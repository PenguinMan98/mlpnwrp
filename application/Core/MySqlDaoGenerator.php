<?php
define('DATABASE_NAMING_CONVENTION', 'underscores');	// camelcase, underscores

$objScript = new DaoScripter();
$objScript->bScriptDatabase();
exit();

class DaoScripter
{
	private $modelDir = '';
    private $providerDir = '';
    private $modelDirRequire = '';
    private $providerDirRequire = '';
	private $modelPrefix = '';
	private $providerPrefix = '';

	function bScriptDatabase()
	{
        // CONFIGURATION PARAMETER
		$sDbServer = 'localhost';
		$sDbUser = 'root';
		$sDbName = 'maids_lookup';
		$sGeneratePath = 'C:\Users\Pengy\Desktop\Projects\generated';
		$sNamespace = '';
        $sDbPw = 'PengyProgramming';

		// Connect to the database
		$this->_connectToDb($sDbServer, $sDbUser, $sDbPw, $sDbName);
		$arrTableList = $this->_arrGetQueryResults("show tables");
		
        // Create base directories
        $baseDirectories = array(
            '\\Model',
            '\\Model\\Structure',
            /*'\\Model\\Structure\\Amazon',
            '\\Model\\Structure\\Inventory',
        	'\\Model\\Structure\\Job',
            '\\Model\\Structure\\Manufacturer',
            '\\Model\\Structure\\Notification',
            '\\Model\\Structure\\Order',
            '\\Model\\Structure\\Po',
            '\\Model\\Structure\\Product',
            '\\Model\\Structure\\ShoppingCart',
            '\\Model\\Structure\\Steal',*/
            '\\Model\\Data',
            /*'\\Model\\Data\\Amazon',
            '\\Model\\Data\\Inventory',
        	'\\Model\\Data\\Job',
            '\\Model\\Data\\Manufacturer',
            '\\Model\\Data\\Notification',
            '\\Model\\Data\\Order',
            '\\Model\\Data\\Po',
            '\\Model\\Data\\Product',
            '\\Model\\Data\\ShoppingCart',
            '\\Model\\Data\\Steal'*/

        );

        foreach($baseDirectories as $directory) {
        	if (!file_exists($sGeneratePath . $directory)) {
                mkdir($sGeneratePath . $directory);
            }
        }

        $lookupTable = array(
            /*'inventory_adjustment_type',
            'inventory_froom_status',
            'inventory_froom_reason',
            'order_issue_type',
            'po_payment_term',
            'po_status',
            'payment_status',
            'payment_method',
            'payment_gateway',
            'manufacturer_return_policy',
            'notification_status',
            'refund_reason',
            'transaction_reference',
            'transaction_type',
            'product_type',
            'product_gender',
            'po_charge_type',
            'po_freight_type',
            'po_shipment_status',
            'steal_type',
            'steal_status',
            'order_shipment_status',
            'job_status',
            'job_result',
            'catalog',
            'email_type',
            'inventory_status'*/
        );

		// Cycle through each table
		foreach ($arrTableList as $arrTable) {
			$table = $arrTable['Tables_in_' . $sDbName];
			if ($table != '') {
                    
                    // Skip any views
                    if (!(in_array($table, array(
                    'transaction_log',
                    'session' ,
                    'profile_key',
                    'order_rubber_stamp',
                    'customer_rfm',
                    'customer_rfm_frequency',
                    'customer_rfm_monetary',
                    'customer_rfm_recency',
                    ))))
                    {
                       if (substr($table, 0, 9) == 'inventory') {
                            if (strlen($table) > 9) {
                                $this->_setNamespace('Inventory');
                            } else {
                                $this->setBaseNamespace();
                            }
                        } else if (substr($table, 0, 3) == 'job') {
                            if (strlen($table) > 3) {
                                $this->_setNamespace('Job');
                            } else {
                                $this->setBaseNamespace();
                            }
                        } else if ($table == 'orders') {
                                $this->setDefaulNamespace();
                        } else if (substr($table, 0, 2) == 'po') {
                            if (strlen($table) > 2) {
                                $this->_setNamespace('Po');
                            } else {
                                $this->setBaseNamespace();
                            }
                        } else if ($table == 'refund') {
                                $this->setBaseNamespace();
                        } else if (substr($table, 0, 13) == 'shopping_cart') {
                            if (strlen($table) > 13) {
                                $this->_setNamespace('ShoppingCart');
                            } else {
                                $this->setBaseNamespace();
                            }
                        } else if (substr($table, 0, 12) == 'manufacturer') {
                            if (strlen($table) > 12) {
                                $this->_setNamespace('Manufacturer');
                            } else {
                                $this->setBaseNamespace();
                            }
                        } else if (substr($table, 0, 6) == 'amazon') {
                            if (strlen($table) > 6) {
                                $this->_setNamespace('Amazon');
                            } else {
                                $this->setBaseNamespace();
                            }
                        } else if (substr($table, 0, 12) == 'notification') {
                            if (strlen($table) > 12) {
                                $this->_setNamespace('Notification');
                            } else {
                                $this->setBaseNamespace();
                            }
                        } else if ($table == 'product_variant') {
                            $this->_setNamespace('Product');
                        } else if (substr($table, 0, 7) == 'product') {
                            $this->setBaseNamespace();
                        } else if (substr($table, 0, 8) == 'product_') {
                            $this->_setNamespace('Product');
                        } else if ($table == 'product_variant_defect') {
                            $this->_setNamespace('Product');
                        } else if (substr($table, 0, 5) == 'steal') {
                            $this->_setNamespace('Steal');
                        } else if (substr($table, 0, 12) == 'daily_steals') {
                            $this->setBaseNamespace();
                        } else if (substr($table, 0, 12) == 'daily_steal_') {
                            $this->_setNamespace('Steal');
                        } else if (substr($table,0,6) == 'order_'){
                            if(strlen($table)>6){
                                $this->_setNamespace('Order');
                            } else{
                                $this->setBaseNamespace();
                            }
                        }
                         else {
                            $this->setBaseNamespace();
                        }

                        if (!in_array($table, $lookupTable)) {
					        $this->bScriptTable($sGeneratePath, $sNamespace, $table, false);
                        }
                    }
			}
		}

		// Close the database connection
		mysql_close();
	}

    /* --- Private Methods ---  */
    private function _setObjectName($sObjectName)
    {
        $result = $sObjectName;
        if($sObjectName == 'ProductCategory') {
            // Naming exception, will be converted later when we move Product to the new naming convention
           $result = 'Category';
        } else if($sObjectName == 'DailySteals') {
            $result = 'Steal';
        } else if($sObjectName == 'DailyStealInfo') {
            $result = 'Info';
        } else if($sObjectName == 'DailyStealImage') {
            $result = 'Image';
        } else if($sObjectName == 'DailyStealItems') {
            $result = 'Item';
        } else if($sObjectName == 'DailyStealItemAttributes') {
            $result = 'Attribute';
        } else if($sObjectName == 'DailyStealItemImage') {
            $result = 'ItemImage';
        } else if ($sObjectName == 'Orders') {
            $result = 'Orders';
        } else {
            $names = array (
                'Po',
                'Inventory',
                'Manufacturer',
                'Notification',
                'Amazon',
                'ShoppingCart',
            	'Steal',
                'Order',
                'Job',
                'Product'
            );
            foreach ($names as $name) {
                $len = strlen($name);
                if(substr($sObjectName, 0, $len) == $name && strlen($sObjectName) > $len) {
                   $result = substr($sObjectName, $len);
                   break;
                }
            }
        }
        return $result;
    }

    private function _setNamespace($name)
    {
        $this->modelDir = 'Model\\Structure\\' . $name . '\\';
        $this->providerDir = 'Model\\Data\\' . $name . '\\';
        $this->modelDirRequire = 'Model/Structure/' . $name . '/';
        $this->providerDirRequire = 'Model/Data/' . $name . '/';
        $this->modelPrefix = 'Model_Structure_' . $name . '_';
        $this->providerPrefix = 'Model_Data_' . $name . '_';
    }

    private function _setNotificationNamespace()
    {
        $this->modelDir = 'Model\\Structure\\Notification\\';
        $this->providerDir = 'Model\\Data\\Notification\\';
        $this->modelDirRequire = 'Model/Structure/Notification/';
        $this->providerDirRequire = 'Model/Data/Notification/';
        $this->modelPrefix = 'Model_Structure_Notification_';
        $this->providerPrefix = 'Model_Data_Notification_';
    }


    private function _setPoNamespace()
    {
        $this->modelDir = 'Model\\Structure\\Po\\';
        $this->providerDir = 'Model\\Data\\Po\\';
        $this->modelDirRequire = 'Model/Structure/Po/';
        $this->providerDirRequire = 'Model/Data/Po/';
        $this->modelPrefix = 'Model_Structure_Po_';
        $this->providerPrefix = 'Model_Data_Po_';
    }

    private function _setProductNamespace()
    {
        $this->modelDir = 'Model\\Structure\\Product\\';
        $this->providerDir = 'Model\\Data\\Product\\';
        $this->modelDirRequire = 'Model/Structure/Product/';
        $this->providerDirRequire = 'Model/Data/Product/';
        $this->modelPrefix = 'Model_Structure_Product_';
        $this->providerPrefix = 'Model_Data_Product_';
    }

    private function setBaseNamespace()
    {
        $this->modelDir = 'Model\\Structure\\';
        $this->providerDir = 'Model\\Data\\';
        $this->modelDirRequire = 'Model/Structure/';
        $this->providerDirRequire = 'Model/Data/';
        $this->modelPrefix = 'Model_Structure_';
        $this->providerPrefix = 'Model_Data_';
    }


    private function setDefaulNamespace()
    {
        $this->modelDir = 'Model\\';
        $this->providerDir = 'Model\\';
        $this->modelDirRequire = 'Model/';
        $this->providerDirRequire = 'Model/';
        $this->modelPrefix = '';
        $this->providerPrefix = '';
    }

    private function _setManufacturerNamespace()
    {
        $this->modelDir = 'Model\\Structure\\Manufacturer\\';
        $this->providerDir = 'Model\\Data\\Manufacturer\\';
        $this->modelDirRequire = 'Model/Structure/Manufacturer/';
        $this->providerDirRequire = 'Model/Data/Manufacturer/';
        $this->modelPrefix = 'Model_Structure_Manufacturer_';
        $this->providerPrefix = 'Model_Data_Manufacturer_';
    }

    function sCleanDbObjectName($sName)
    {
    	if (DATABASE_NAMING_CONVENTION == 'camelcase') {
	    	$sPrefix = strtolower(substr($sName, 0, 3));
	    	if (in_array($sPrefix, array(	'tbl',
	    									'int',
	    									'lng',
	    									'dbl',
	    									'flt',
	    									'dtm',
	    									'cur',
	    									'dec',
	    									'str',
	    									'txt',
	    									'bln',
	    									'bin'
	    									)	)) {
				$sName = substr($sName, 3);
			}

			$arrStripChars = array(	' ', '_'	);
			$sName = str_replace($arrStripChars, '', $sName);
    	} else {
    		$sName = str_replace(' ', '', ucwords(str_replace('_', ' ', strtolower($sName))));
    	}

		return $sName;
    }

    function bScriptProvider($sGeneratePath, $sNamespace, $sObjectName, $bForceOverwrite, $sTableName)
    {
    	$sClassName     = $this->providerPrefix . $sObjectName . 'Provider';
    	$sBaseClassName = $this->providerPrefix . $sObjectName . 'ProviderBase';

    	$arrLines = array();
		array_push($arrLines, '<?php');
		array_push($arrLines, "class $sClassName extends $sBaseClassName");
		array_push($arrLines, '{');
		array_push($arrLines, '}');

		$this->bWriteArrayToFile($sGeneratePath . '/' . $this->providerDir
            . '/' . $sObjectName . 'Provider.php', $arrLines);

		return true;
    }

    function bScriptBaseProvider($sGeneratePath, $sNamespace, $sObjectName, $arrFieldNames, $arrKeys, $arrFieldNameAccessors, $arrKeyAccessors, $sAutoIncrement, $sTableName)
    {
    	$sClassFile = $sObjectName . 'ProviderBase';
    	$sClassName = $this->providerPrefix . $sClassFile;

    	$arrLines = array();
		array_push($arrLines, '<?php');
		array_push($arrLines, '/**');
		array_push($arrLines, '* AUTO-GENERATED');
		array_push($arrLines, '* DO NOT EDIT');
		array_push($arrLines, '*/');
        array_push($arrLines, "require_once 'DaoStealNetwork.php';");
		array_push($arrLines, "class $sClassName");
		array_push($arrLines, '{');

		array_push($arrLines, "    " . 'protected function getOneFromQuery($strSql, $params)');
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . '$arrResults = array();');
		array_push($arrLines, "        " . '$arrErrors = array();');
		array_push($arrLines, "        " . 'if (DaoStealNetwork::getAssoc($strSql, $params, $arrResults, $arrErrors)) {');
		array_push($arrLines, "            " . 'if (count($arrResults) > 0) {');
		array_push($arrLines, "                " . 'return new ' . $this->modelPrefix . $sObjectName . '($arrResults[0]);');
		array_push($arrLines, "            " . '}');
		array_push($arrLines, "        " . '}');
		array_push($arrLines, "        " . 'return null;');
		array_push($arrLines, "    " . '}');
		array_push($arrLines, '');

		array_push($arrLines, "    " . 'protected function getArrayFromQuery($strSql, $params)');
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . '$arrResults = array();');
		array_push($arrLines, "        " . '$arrErrors = array();');
		array_push($arrLines, "        " . 'if (DaoStealNetwork::getAssoc($strSql, $params, $arrResults, $arrErrors)) {');
		array_push($arrLines, "            " . '$arrRecordList = array();');
		array_push($arrLines, "            " . 'foreach ($arrResults as $arrRecord) {');
		array_push($arrLines, "                " . '$arrRecordList[] = new ' . $this->modelPrefix . $sObjectName . '($arrRecord);');
		array_push($arrLines, "            " . '}');
		array_push($arrLines, "            " . 'return $arrRecordList;');
		array_push($arrLines, "        " . '}');
		array_push($arrLines, "        " . 'return null;');
		array_push($arrLines, "    " . '}');
		array_push($arrLines, '');

		// SELECT by PK
		array_push($arrLines, "    " . 'public function getOneByPk($' . join($arrKeys, ', $') . ')');
		array_push($arrLines, "    " . '{');
		$strFullSql = "        " . '$strSql = \'';
		$strFullSql .= "SELECT * FROM $sTableName";
		$sJoinClause = " WHERE ";
		foreach ($arrKeys as $sKey) {
			$strFullSql .= $sJoinClause . "$sKey=?";
			$sJoinClause = " AND ";
		}
		$strFullSql .= "';";
		array_push($arrLines, $strFullSql);
		$strFullSql = '';
		array_push($arrLines, "        " . '$params = array($' . join($arrKeys, ', $') . ');');
		array_push($arrLines, "        " . 'return ' . $this->providerPrefix . $sObjectName . 'Provider::getOneFromQuery($strSql, $params);');
		array_push($arrLines, "    " . '}');
		array_push($arrLines, '');

		// INSERT
		array_push($arrLines, "    " . 'public function insertOne(&$objRecord, &$arrErrors)');
		array_push($arrLines, "    " . '{');
		$strFullSql = "        " . '$strSql = \'';
		$strFullSql .= " INSERT INTO $sTableName (\n";
		$strFullSql .= "            " . join($arrFieldNames, ",\n            ") . "\n        )";
		$strFullSql .= " VALUES ";
		$strFullSql .= " (?" . str_repeat(", ?", count($arrFieldNames) - 1) . ")";
		$strFullSql .= "';";
		array_push($arrLines, $strFullSql);
		$strFullSql = '';
		$sParamValues = '$params = array($objRecord->get' . join($arrFieldNameAccessors, "(),\n            \$objRecord->get") . "()\n        );";
		// Watch out for auto increment (identity) columns
		if ($sAutoIncrement != '') {
			$sParamValues = str_replace('$objRecord->get' . $this->sCleanDbObjectName($sAutoIncrement) . '()', "\n            0", $sParamValues);
		}
		array_push($arrLines, "        " . $sParamValues);
		array_push($arrLines, "        " . '$arrErrors = array();');
		array_push($arrLines, "        " . '$blnResult = DaoStealNetwork::execute($strSql, $params, $arrErrors);');

		// Handle retrieval of any auto increment (identity) column values
		if ($sAutoIncrement != '') {
			array_push($arrLines, "        " . 'if ($blnResult) {');
			array_push($arrLines, "            " . '$objRecord->set' . $this->sCleanDbObjectName($sAutoIncrement) . '(DaoStealNetwork::getInsertId());');
			/* OLD STYLE
			$strFullSql = "            " . '$strSql = \'';
			$strFullSql .= "SELECT LAST_INSERT_ID() AS lngNewId";
			$strFullSql .= "';";
			array_push($arrLines, $strFullSql);
			$strFullSql = '';
			array_push($arrLines, "            " . '$params = array();');
			array_push($arrLines, "            " . '$arrResults = array();');
			array_push($arrLines, "            " . 'if (DaoStealNetwork::getAssoc($strSql, $params, $arrResults, $arrErrors)) {');
			array_push($arrLines, "                " . 'if (count($arrResults) > 0) {');
			array_push($arrLines, "                    " . '$objRecord->set' . $this->sCleanDbObjectName($sAutoIncrement) . '($arrResults[0][\'lngNewId\']);');
			array_push($arrLines, "                " . '}');
			array_push($arrLines, "            " . '}');
			*/
			array_push($arrLines, "        " . '}');
		}

		array_push($arrLines, "        " . 'return $blnResult;');
		array_push($arrLines, "    " . '}');
		array_push($arrLines, '');

		// UPDATE
		array_push($arrLines, "    " . 'public function updateOne($objRecord, &$arrErrors)');
		array_push($arrLines, "    " . '{');
		$strFullSql = "        " . '$strSql = \'';
		$strFullSql .= "UPDATE $sTableName";
		$sJoinClause = " SET ";
		foreach ($arrFieldNames as $sField) {
			$strFullSql .= $sJoinClause . "\n            $sField=?";
			$sJoinClause = ",";
		}
		$sJoinClause = "\n        WHERE ";
		foreach ($arrKeys as $sKey) {
			$strFullSql .= $sJoinClause . "$sKey=?";
			$sJoinClause = " AND ";
		}
		$strFullSql .= "';";
		array_push($arrLines, $strFullSql);
		$strFullSql = '';
		array_push($arrLines, "        " . '$arrSetParams = array(' . "\n". '            $objRecord->get' . join($arrFieldNameAccessors, "(),\n            \$objRecord->get") . '()' . "\n        " . ');');
		array_push($arrLines, "        " . '$arrKeyParams = array($objRecord->getOrig' . join($arrKeyAccessors, '(), $objRecord->getOrig') . '());');
		array_push($arrLines, "        " . '$params = array_merge($arrSetParams, $arrKeyParams);');
		array_push($arrLines, "        " . '$arrErrors = array();');
		array_push($arrLines, "        " . '$blnResult = DaoStealNetwork::execute($strSql, $params, $arrErrors);');
		array_push($arrLines, "        " . 'return $blnResult;');
		array_push($arrLines, "    " . '}');
		array_push($arrLines, '');

		// DELETE
		array_push($arrLines, "    " . 'public function deleteOne($objRecord, &$arrErrors)');
		array_push($arrLines, "    " . '{');
		$strFullSql = "        " . '$strSql = \'';
		$strFullSql .= "DELETE FROM $sTableName";
		$sJoinClause = " WHERE ";
		foreach ($arrKeys as $sKey) {
			$strFullSql .= $sJoinClause . "$sKey=?";
			$sJoinClause = " AND ";
		}
		$strFullSql .= "';";
		array_push($arrLines, $strFullSql);
		$strFullSql = '';
		array_push($arrLines, "        " . '$params = array($objRecord->get' . join($arrKeyAccessors, '(), $objRecord->get') . '());');
		array_push($arrLines, "        " . '$arrErrors = array();');
		array_push($arrLines, "        " . '$blnResult = DaoStealNetwork::execute($strSql, $params, $arrErrors);');
		array_push($arrLines, "        " . 'return $blnResult;');
		array_push($arrLines, "    " . '}');

		array_push($arrLines, '}');
		$this->bWriteArrayToFile($sGeneratePath . '/' . $this->providerDir . $sClassFile . '.php', $arrLines);

		return(true);
    }

    function bScriptObject($sGeneratePath, $sNamespace, $sObjectName, $bForceOverwrite)
    {
    	$sClassFile = $sObjectName;
    	$sClassName = $this->modelPrefix . $sClassFile;
    	$sBaseClassName = $sClassName . 'Base';

    	$arrLines = array();
		array_push($arrLines, '<?php');
		array_push($arrLines, "class $sClassName extends $sBaseClassName");
		array_push($arrLines, '{');
		array_push($arrLines, "    " . "public function __construct(\$arrData = null)");
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . "parent::__construct(\$arrData);");
		array_push($arrLines, "        " . 'return;');
		array_push($arrLines, "    " . '}');
		array_push($arrLines, '}');
		$this->bWriteArrayToFile($sGeneratePath . '/' . $this->modelDir . $sClassFile . '.php', $arrLines);

		return(true);
    }

    function bScriptBaseObject($sGeneratePath, $sObjectName, $arrFieldNames, $arrKeys, $arrFieldDefaults)
    {
    	$sClassFile = $sObjectName . 'Base';
    	$sClassName = $this->modelPrefix . $sClassFile;

    	$arrLines = array();
		array_push($arrLines, '<?php');
		array_push($arrLines, '/**');
		array_push($arrLines, '* AUTO-GENERATED');
		array_push($arrLines, '* DO NOT EDIT');
		array_push($arrLines, '*/');
		array_push($arrLines, "class $sClassName");
		array_push($arrLines, '{');
		// Include each field as private variable
		foreach ($arrFieldNames as $sField) {
			array_push($arrLines, "    " . 'protected $m_' . $sField . ';');
		}
		// Also track original values of key fields
		foreach ($arrKeys as $sField) {
			array_push($arrLines, "    " . 'protected $m_' . $sField . '_Orig;');
		}
		array_push($arrLines, '');

		// Constructor
		array_push($arrLines, "    " . "public function __construct(\$arrData = null)");
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . 'if (isset($arrData)) {');
		array_push($arrLines, "            " . '$this->loadFromArray($arrData);');
		array_push($arrLines, "        " . '}');
		array_push($arrLines, "        " . 'else {');
		// Set any column default values
		foreach ($arrFieldDefaults as $sField=>$sDefault) {
			// Do NOT include default values for primary key columns
			if (!(in_array($sField, $arrKeys))) {
				if (is_numeric($sDefault)) {
					array_push($arrLines, "            " . '$this->set' . $this->sCleanDbObjectName($sField) . '(' . $sDefault . ');');
				}
				else {
					array_push($arrLines, "            " . '$this->set' . $this->sCleanDbObjectName($sField) . '(\'' . $sDefault . '\');');
				}
			}
		}
		array_push($arrLines, "        " . '}');
		array_push($arrLines, "        " . 'return;');
		array_push($arrLines, "    " . '}');

		// Old-style constructor
		array_push($arrLines, "    " . "public function " . $sObjectName . "Base(\$arrData = null)");
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . '$this->__construct($arrData);');
		array_push($arrLines, "        " . 'return;');
		array_push($arrLines, "    " . '}');

		// Include getters/setters for every field
		foreach ($arrFieldNames as $sField) {
			array_push($arrLines, '');
			array_push($arrLines, "    " . "public function get" . $this->sCleanDbObjectName($sField) . '()');
			array_push($arrLines, "    " . '{');
			array_push($arrLines, "        " . 'return $this->m_' . $sField . ';');
			array_push($arrLines, "    " . '}');
			array_push($arrLines, "    " . "public function set" . $this->sCleanDbObjectName($sField) . '($value)');
			array_push($arrLines, "    " . '{');
			array_push($arrLines, "        " . '$this->m_' . $sField . ' = $value;');
			if (in_array($sField, $arrKeys)) {
				array_push($arrLines, "        " . '$this->setOrig' . $this->sCleanDbObjectName($sField) . '($value);');
			}
			array_push($arrLines, "        " . 'return;');
			array_push($arrLines, "    " . '}');
		}
		// Include getters/setters for every key
		foreach ($arrKeys as $sField) {
			array_push($arrLines, '');
			array_push($arrLines, "    " . "public function getOrig" . $this->sCleanDbObjectName($sField) . '()');
			array_push($arrLines, "    " . '{');
			array_push($arrLines, "        " . 'return $this->m_' . $sField . '_Orig;');
			array_push($arrLines, "    " . '}');
			array_push($arrLines, "    " . "public function setOrig" . $this->sCleanDbObjectName($sField) . '($value)');
			array_push($arrLines, "    " . '{');
			array_push($arrLines, "        " . 'if (isset($this->m_' . $sField . '_Orig)) { return; }');
			array_push($arrLines, "        " . '$this->m_' . $sField . '_Orig = $value;');
			array_push($arrLines, "        " . 'return;');
			array_push($arrLines, "    " . '}');
		}

		// Include an option to quickly set all values from an associative array
		array_push($arrLines, '');
		array_push($arrLines, "    " . 'public function loadFromArray($arrValues)');
		array_push($arrLines, "    " . '{');
		foreach ($arrFieldNames as $sField) {
			array_push($arrLines, "        " . '$this->set' . $this->sCleanDbObjectName($sField) . '($arrValues[\'' . $sField . '\']);');
		}
		array_push($arrLines, "        " . 'return;');
		array_push($arrLines, "    " . '}');

		// FOR HELP WITH EDIT FORMS
		array_push($arrLines, '');
		array_push($arrLines, "    " . 'public function updateFromArray($arrValues)');
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . 'foreach ($arrValues as $key=>$val) {');
		array_push($arrLines, "            " . 'switch ($key) {');
		foreach ($arrFieldNames as $sField) {
			array_push($arrLines, "                " . 'case \'' . $sField . '\':');
			array_push($arrLines, "                    " . '$this->set' . $this->sCleanDbObjectName($sField) . '($val);');
			array_push($arrLines, "                    " . 'break;');
		}
		array_push($arrLines, "                " . 'default:');
		array_push($arrLines, "                    " . 'break;');
		array_push($arrLines, "            " . '}');
		array_push($arrLines, "        " . '}');
		array_push($arrLines, "        " . 'return;');
		array_push($arrLines, "    " . '}');

		// Include an option to quickly export all values into an associative array
		array_push($arrLines, '');
		array_push($arrLines, "    " . 'public function getAsArray()');
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . '$arrValues = array();');
		foreach ($arrFieldNames as $sField) {
			array_push($arrLines, "        " . '$arrValues[\'' . $sField . '\'] = $this->get' . $this->sCleanDbObjectName($sField) . '();');
		}
		array_push($arrLines, "        " . 'return $arrValues;');
		array_push($arrLines, "    " . '}');

		// Include a stub for validation
		array_push($arrLines, '');
		array_push($arrLines, "    " . 'public function validateInsert(&$arrErrors)');
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . 'return true;');
		array_push($arrLines, "    " . '}');
		array_push($arrLines, '');
		array_push($arrLines, "    " . 'public function validateUpdate(&$arrErrors)');
		array_push($arrLines, "    " . '{');
		array_push($arrLines, "        " . 'return true;');
		array_push($arrLines, "    " . '}');

		array_push($arrLines, '}');
		$this->bWriteArrayToFile($sGeneratePath . '\\' . $this->modelDir . $sClassFile . '.php', $arrLines);

		return(true);
    }

    function bScriptTable($sGeneratePath, $sNamespace, $sTableName, $bForceOverwrite)
    {
		// Get field information for this table
		$arrFields = $this->_arrGetQueryResults("show fields from `" . $sTableName . "`");
		$arrFieldNameAccessors = array();
		$arrFieldDefaults = array();
		$arrFieldNames = array();
		$arrKeys = array();
		$sAutoIncrement = '';
		foreach ($arrFields as $arrCurField) {
			if ($arrCurField['Key'] == 'PRI') {
				array_push($arrKeys, $arrCurField['Field']);
			}
			if ($arrCurField['Extra'] == 'auto_increment') {
				$sAutoIncrement = $arrCurField['Field'];
			}
			if ($arrCurField['Default'] !== null) {
				$arrFieldDefaults[$arrCurField['Field']] = $arrCurField['Default'];
			}

			array_push($arrFieldNames, $arrCurField['Field']);
			array_push($arrFieldNameAccessors, $this->sCleanDbObjectName($arrCurField['Field']));
		}
		if (count($arrKeys) == 0) {
			// Heap table; assume all fields are keys
			foreach ($arrFields as $arrCurField) {
				array_push($arrKeys, $arrCurField['Field']);
			}
		}
		$arrKeyAccessors = array();
		foreach ($arrKeys as $sKey) {
			array_push($arrKeyAccessors, $this->sCleanDbObjectName($sKey));
		}

    	$sObjectName = $this->sCleanDbObjectName($sTableName);
        $sObjectName = $this->_setObjectName($sObjectName);
        echo $this->modelPrefix . $sObjectName . "<br />\n";

		$this->bScriptBaseObject($sGeneratePath, $sObjectName, $arrFieldNames, $arrKeys, $arrFieldDefaults);
		$this->bScriptObject($sGeneratePath, $sNamespace, $sObjectName, $bForceOverwrite);
	    $this->bScriptBaseProvider($sGeneratePath, $sNamespace, $sObjectName, $arrFieldNames, $arrKeys, $arrFieldNameAccessors, $arrKeyAccessors, $sAutoIncrement, $sTableName);
		$this->bScriptProvider($sGeneratePath, $sNamespace, $sObjectName, $bForceOverwrite, $sTableName);

		return(true);
    }

    function bWriteArrayToFile($sFilePath, $arrLines)
    {
    	$fp = fopen($sFilePath, 'w');
		foreach ($arrLines as $sLine) {
			fwrite($fp, $sLine . "\r\n");
		}
    	fclose($fp);
    }

    /**
	* Executes a single query and returns the results as an associative array.
	*
	* @param	string	$sQuery	The query to execute
	* @return	array
	* @access	private
	*/
    function _arrGetQueryResults($sQuery)
    {
		$result = mysql_query($sQuery);
		
        // Get the results into an array
        $arrResults = array();
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        	array_push($arrResults, $line);
        }

    	@mysql_free_result($result);
		return($arrResults);
    }

    /**
	* Opens a connection to the specified MySql database.
	*
    * @param	string	$sServer	The name/IP of the database server
	* @param	string	$sUser		The user to connect with
	* @param	string	$sPw			The password to connect with
	* @param string	$sDb			The name of the database to use
	* @return	void
	* @access	private
	*/
    function _connectToDb($sServer, $sUser, $sPw, $sDb)
    {
        $link = mysql_connect($sServer, $sUser, $sPw);
        mysql_select_db($sDb);
        return;
    }
}