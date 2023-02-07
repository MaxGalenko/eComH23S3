<?php
namespace app\models;

define('LOG_FILE', 'log.txt');
class UserLog {
	public $name;

	public function insert() {
		$fh = fopen(LOG_FILE, 'a');
		// need an exclusive lock to write
		flock($fh, LOCK_EX);
		fwrite($fh, "$this->name has visited!\n");
		// release resource and the lock
		fclose($fh);
	}

	public function getAll() {
		$contents = file(LOG_FILE);
		return $contents;
	}

	public function delete($lineNumber) {
		// read the file
		$contents = $this->getAll();
		// write the file for each line that does not have this number
		$fh = fopen(LOG_FILE, 'w');
		flock($fh, LOCK_EX);
		foreach ($contents as $lineNum => $entry) {
			if($lineNum != $lineNumber) {
				fwrite($fh, $entry);
			}
		}
		fclose($fh);
	}
}