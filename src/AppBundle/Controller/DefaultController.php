<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $sites = $this->getDoctrine()
                ->getRepository('AppBundle:TblProject')
                ->findAll();
        
        return $this->render('default/index.html.twig', array(
            'sites' => $sites
        ));
    }
    
    /**
     * @Route("/{website}", name="website")
     */
    public function siteAction($website)
    {
        $project = $this->getDoctrine()
                ->getRepository('AppBundle:TblProject')
                ->findOneBy(array(
                    'path' => $website
                ));
        
        $subsites = $this->getDoctrine()
                ->getRepository('AppBundle:TblRelation')
                ->findBy(array(
                    'idProject' => $project
                ));
        
        
        $site = $this->getDoctrine()
                ->getRepository('AppBundle:TblRelation')
                ->findOneBy(array(
                    'idProject' => $project,
                    'idParent' => null
                ));
        
        return $this->render('default/site.html.twig', array(
            'home'=>$project,
            'subsites' => $subsites,
            'site' => $site->getIdSite()
        ));
    }
    
    /**
     * @Route("/{website}/{subsite}", name="sumsite")
     */
    public function subSiteAction($website, $subsite)
    {
        $project = $this->getDoctrine()
                ->getRepository('AppBundle:TblProject')
                ->findOneBy(array(
                    'path' => $website
                ));
        
        $subsites = $this->getDoctrine()
                ->getRepository('AppBundle:TblRelation')
                ->findBy(array(
                    'idProject' => $project
                ));
        
        foreach($subsites as $sub ){
            if($sub->getIdSite()->getPath() == $subsite){
                $site = $sub->getIdSite();
            }
        }
        
        return $this->render('default/site.html.twig', array(
            'home'=>$project,
            'subsites' => $subsites,
            'site' => $site
        ));
    }
    
    
}
