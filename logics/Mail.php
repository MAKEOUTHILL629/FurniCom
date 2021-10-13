<?php

require_once 'persistence/Connection.php';
require_once 'persistence/MailDAO.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use Dompdf\Dompdf;

class Mail
{
    private $receiver;
    private $invoice;
    private $total;
    private $products;
    private $connection;
    private $mailDAO;

    /**
     * @param $id
     * @param $name
     * @param $abbreviation
     */
    public function __construct($receiver = "", $invoice = "", $total = "", $products = "")
    {
        $this->receiver = $receiver;
        $this->invoice = $invoice;
        $this->total = $total;
        $this->products = $products;
        $this->connection = new Connection();
        $this->mailDAO = new MailDAO();
    }

    public function makeMail($id)
    {
        $this->connection->openConnection();
        $this->connection->execute($this->mailDAO->getInfo($id));
        $productos = [];
        $cliente = "";
        $email = "";
        $total = 0;
        while (($item = $this->connection->extract()) != null) {
            $detail = [
                "nombre" => $item[0],
                "cantidad" => $item[1],
                "precio" => $item[2],
                "total" => $item[3]
            ];

            array_push($productos,$detail);
            $cliente = $item[4];
            $email = $item[5];
            $total = $total + $item[3];
        }

        $this->connection->close();

        $dompdf = new Dompdf();
        ob_start();
        include "./presentation/factura.php";

        $html = ob_get_clean();
        $dompdf->loadHtml($html);
        $dompdf->render();

        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=factura.pdf");
        file_put_contents('./presentation/files/factura.pdf', $dompdf->output()); 

        $mail = new PHPMailer();
        $mail->IsSMTP();

        $mail->SMTPDebug  = 0;
        $mail->Host       = 'smtp.gmail.com';
        $mail->Port       = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth   = true;
        $mail->Username   = "furnicomweb@gmail.com";
        $mail->Password   = "furn1c0m";
        $mail->SetFrom("furnicomweb@gmail.com", 'FurniCom');
        $mail->AddAddress($email, 'Cliente');
        $mail->Subject = 'Factura generada FurniCom';
        $mail->MsgHTML("Hola! Gracias por tu compra, te enviamos anexa la factura, ten una buena tarde.");
        $mail->AltBody = 'Hola! Gracias por tu compra, te enviamos anexa la factura, ten una buena tarde.';
        $mail->AddAttachment("./presentation/files/factura.pdf");

        //Enviamos el correo
        if (!$mail->Send()) {
            echo "Error: " . $mail->ErrorInfo;
        } else {
            echo "Enviado!";
        }
    }

    /**
     * @return mixed|string
     */
    public function getTransmitter()
    {
        return $this->transmitter;
    }

    /**
     * @return mixed|string
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @return mixed|string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
}
