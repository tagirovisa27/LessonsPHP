<?php 

namespace App\lesson2;

interface FileInterface {
    public function read($filename);
    public function write($filename, $content);
}

class TextFile implements FileInterface {
    public function read($filename) {
        return "Чтение текстового файла: " . $filename;
    }

    public function write($filename, $content) {
        return "Запись текстового файла: " . $filename . " с содержимым: " . $content;
    }
}

interface NotificationInterface {
    public function sendNotification($message);
}

class EmailNotification implements NotificationInterface {
    public function sendNotification($message) {
        return "Отправка уведомления по электронной почте: " . $message;
    }
}
