<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassesController extends AbstractController
{
    #[Route('/classes', name: 'classes')]
    public function index(): Response
    {
        $classes=[
            [
                'link'=>'TPS-PS',
                'level'=>'maternelle',
                'htmlDesc'=>['TPS et PS','Mme Bulteau'],
                'illu'=>'TPSPSBulteau\TPSPS'
            ],
            [
                'link'=>'PS-MS',
                'level'=>'maternelle',
                'htmlDesc'=>['PS et MS','Mmes Candelier et Guffroy'],
                'illu'=>'PSMSCandelier\PSMS'
            ],
            [
                'link'=>'MS',
                'level'=>'maternelle',
                'htmlDesc'=>['MS','Mmes Martinage et Derieux'],
                'illu'=>'MSMartinage\MS'
            ],
            [
                'link'=>'GS',
                'level'=>'maternelle',
                'htmlDesc'=>['GS','Mme Baudry'],
                'illu'=>'GSBaudry\GS'
            ],
            [
                'link'=>'GS-CP',
                'level'=>'coursPreparatoire',
                'htmlDesc'=>['GS et CP','Mme Camier'],
                'illu'=>'GSCPCamier\GSCP'
            ],
            [
                'link'=>'CP',
                'level'=>'coursPreparatoire',
                'htmlDesc'=>['CP','Mme Caillieriez'],
                'illu'=>'CPCaillieriez\CP'
            ],
            [
                'link'=>'CE1',
                'level'=>'coursElementaire',
                'htmlDesc'=>['CE1','Mme Dourlens'],
                'illu'=>'CE1Dourlens\CE1'
            ],
            [
                'link'=>'CE12',
                'level'=>'coursElementaire',
                'htmlDesc'=>['CE1 et CE2','Mme Dartois'],
                'illu'=>'CE1CE2Dartois\CE1CE2'
            ],
            [
                'link'=>'CE2',
                'level'=>'coursElementaire',
                'htmlDesc'=>['CE2','Mmes Tilloy et Desbuquois'],
                'illu'=>'CE2Tilloy\CE2'
            ],
            [
                'link'=>'CM1',
                'level'=>'coursMoyen',
                'htmlDesc'=>['CM1','M Bossuwe'],
                'illu'=>'CM1Bossuwe\CM1'
            ],
            [
                'link'=>'CM12',
                'level'=>'coursMoyen',
                'htmlDesc'=>['CM1 et CM2','Mmes Dupont et Duhamel'],
                'illu'=>'CM1CM2Duhamel\CM1CM2'
            ],
            [
                'link'=>'CM2',
                'level'=>'coursMoyen',
                'htmlDesc'=>['CM2','Mmes Cazer et Heil'],
                'illu'=>'CM2Cazer\CM2'
            ]
        ];

        return $this->render('\classes\classes.html.twig', [
            'classes' => $classes,
        ]);
    }
}
