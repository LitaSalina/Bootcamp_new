<?php 

class BaseView
{
    public static function generate (string $folder, string $file, $data = []): string
    {
        extract ($data);
        ob_start();
        require __DIR__ . '/Global/header.php';
        require __DIR__ . '/' . $folder . '/' . $file . '.php';
        require __DIR__ . '/Global/footer.php';
        $html = ob_get_clean();

        return $html;
        
    }
}