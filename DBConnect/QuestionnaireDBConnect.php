<?php
/*
 * Copyright IBM Corp. 2017
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
use PHPOnCouch\CouchClient;

/**
 * Class to handle performing basic CRUD operations on a Couch DB.
 * This class uses the Sag library to talk to the Couch DB.
 */
final class QuestionnaireDBConnect {
	private static $inst = null;
    private $cloundantDB;
    private $db_exists = false;

    public static function Instance() {
        if (self::$inst === null) {
            self::$inst = new QuestionnaireDBConnect();
        }
        return self::$inst;
    }

		public function isConnected() {
			return $this->db_exists;
		}


    private function __construct() {
        $username = getenv('CLOUDANT_USERNAME');
        $password = getenv('CLOUDANT_PASSWORD');
        $dsn = $username + ':' + $password + '@' + getenv('CLOUDANT_HOST') + ':443';
        $options = array(
            'user' => $username,
            'pass' => $password
        );
        $this->cloundantDB = new CouchClient($dsn, 'questionnaire_database');
    }


    /**
     * 测试方法，为了创建一个问卷
     */
    public function createGuestionnaire () {

    }

    /**
     * @param $qid
     */
    public function getGuestionnaireByID ($qid) {

    }
}
