<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use BaconQrCode\Renderer\GDLibRenderer;
use BaconQrCode\Writer;




class QRController extends Controller
{
    function generateQRCode($url, $filename)
    {
        $width = 300;
        $height = 300;

        $qrCode = imagecreatetruecolor($width, $height);

        $background = imagecolorallocate($qrCode, 255, 255, 255);
        $color = imagecolorallocate($qrCode, 0, 0, 0);

        // QR kodu oluştur
        imagefilledrectangle($qrCode, 0, 0, 300, 300, $background);
        $qr = imagecreatetruecolor(300, 300);
        $qr = $this->qrCodeImage($url, $qr, $color);

        // QR kodunu dosyaya kaydet
        imagepng($qrCode, public_path('qrcodes/' . $filename));

        // Belleği temizle
        imagedestroy($qrCode);
    }

    function qrCodeImage($url, $qr, $color)
    {
        $data = urlencode($url);
        $url = 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' . $data;
        $contents = file_get_contents($url);
        $contents = imagecreatefromstring($contents);
        imagecopyresized($qr, $contents, 0, 0, 0, 0, 300, 300, imagesx($contents), imagesy($contents));

        return $qr;
    }
    public function index()
    {
        $url = "https://example.com";
        $filename = "qrcode.png";
        self::generateQRCode($url, $filename);
    }
}
