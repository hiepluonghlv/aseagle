<?php

namespace WebPlatform\AseagleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use WebPlatform\AseagleBundle\Form\Model\Document;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        /*
        if ($request->getMethod() == 'POST') {
            $image = $request->files->get('img');
            $status = 'success';
            $uploadedURL='';
            $message='';
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000)) {
                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        //Start Uploading File

                        $document = new Document();
                        $document->setFile($image);
                        $document->setSubDirectory('uploads');
                        $document->processFile();
                        $uploadedURL=$uploadedURL = $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $originalName;

                    } else {
                        $status = 'failed';
                        $message = 'Invalid File Type';
                    }
                } else {
                    $status = 'failed';
                    $message = 'Size exceeds limit';
                }
            } else {
                $status = 'failed';
                $message = 'File Error';
            }
            return $this->render('AseagleBundle:Default:index.html.twig',array('status'=>$status,'message'=>$message,'uploadedURL'=>$uploadedURL));
        } else {
            return $this->render('AseagleBundle:Default:index.html.twig', array('name' => 'Aseagle','status'=>'index', 'uploadedURL'=>'index'));

        }
        */
        return $this->render('AseagleBundle:Default:index.html.twig', array('name' => 'Aseagle','status'=>'index', 'uploadedURL'=>'index'));
    }

    public function upload_fileAction()
    {
        /*
        $request = $this->get('request');
        $uploaded_file = $request;
        $req = $request->request->all();
        $que = $request->query->all();
        $fil = $request->files->all();
        if ($uploaded_file)
        {
            $picture1 = $this->processImage($uploaded_file);
            $picture1->setPath('pictures/artist/' . $picture1);
            $em->persist($picture1);
            $em->flush();
            $response = 'success';
        }
        else $response= 'error';
        */
        error_reporting(E_ALL | E_STRICT);
        require('bundles/framework/js/jquery-file-upload/server/php/UploadHandler.php');
        $upload_handler = new UploadHandler(null, true, null, 1);

        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        return $response;

        /*
        $files = [];
        array_push($files, array(
            "name" => "picture1.jpg",
            "size" => 902604,
            "url" => "http:\/\/example.org\/files\/picture1.jpg",
            "thumbnailUrl" => "http:\/\/example.org\/files\/thumbnail\/picture1.jpg",
            "deleteUrl" => "http:\/\/example.org\/files\/picture1.jpg",
            "deleteType"=> "DELETE"
        ));
        return new Response(json_encode(array('files' => $files)),200,array('Content-Type'=>'application/json'));
        */
    }

    public static function processImage(UploadedFile $uploaded_file)
    {
        $path = 'pictures/artist/';
        $uploaded_file_info = pathinfo($uploaded_file->getClientOriginalName());
        $filename = uniqid() . "." .$uploaded_file_info['extension'];

        $uploaded_file->move($path, $filename);

        return $filename;
    }
}
