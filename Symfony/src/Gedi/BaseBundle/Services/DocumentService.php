<?php

namespace Gedi\BaseBundle\Services;

class DocumentService
{
    public function create($sel, $entityClass) {

    }

    public function read($sel, $entityClass) {

    }

    public function update($sel, $entityClass) {

    }

    public function delete($sel, $entityClass) {
        $em = $this->getDoctrine()->getManager();
        for ($i = 0; $i <= count($sel) - 1; $i++) {
            $toDel = $em->find('GediBaseBundle:'.$entityClass, $sel[$i]['id']);
            $em->remove($toDel);
        }
        $em->flush();
        $response = new JsonResponse();
        $response->setData(array('reponse' => "OK"));
        return $response;
    }
}