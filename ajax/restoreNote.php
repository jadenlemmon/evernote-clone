<?php
/**
 * Created by PhpStorm.
 * User: Jaden Lemmon
 * Date: 2/12/16
 * Time: 1:57 PM
 */

require_once '../models/note.php';

$note = new note();

$note->deleteNote($data->id, false);