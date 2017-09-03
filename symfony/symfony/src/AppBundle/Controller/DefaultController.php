<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Histogram;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        /*
          $em = $this->getDoctrine()->getManager();
          $db = $em->getConnection();

          $querye = "SELECT CASE WHEN (age BETWEEN 18 AND 30) THEN 'De 18 a 30' "
          . "ELSE CASE WHEN(age BETWEEN 30 AND 40) THEN 'De 30 a 40' "
          . "ELSE CASE WHEN(age BETWEEN 40 AND 50) THEN 'De 40 a 50'"
          . " ELSE CASE WHEN(AGE BETWEEN 50 AND 60) THEN 'De 50 a 60'"
          . " ELSE CASE WHEN(age BETWEEN 60 AND 70) THEN 'De 60 a 70' "
          . "ELSE CASE WHEN(age BETWEEN 70 AND 80) THEN 'De 70 a 80'"
          . " END END END END END END rango, COUNT(*) total FROM users GROUP BY rango;";
          $stmt = $db->prepare($querye);
          $params = array();
          $stmt->execute($params);

          $notification = $stmt->fetchAll();

         */
        /**/
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
                [
                    ['Language', 'Speakers (in millions)'],
                    ['German', 5.85],
                    ['French', 1.66],
                    ['Italian', 0.316],
                    ['Romansh', 0.0791]
                ]
        );
        $pieChart->getOptions()->setPieSliceText('label');
        $pieChart->getOptions()->setTitle('Swiss Language Use (100 degree rotation)');
        $pieChart->getOptions()->setPieStartAngle(100);
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getLegend()->setPosition('none');
        $histogram = new Histogram();
        $histogram->getData()->setArrayToDataTable([
            ['Population'],
            [12000000],
            [13000000],
            [100000000],
            [1000000000],
            [25000000],
            [600000],
            [6000000],
            [65000000],
            [210000000],
            [80000000],
        ]);
        $histogram->getOptions()->setTitle('Country Populations');
        $histogram->getOptions()->setWidth(900);
        $histogram->getOptions()->setHeight(500);
        $histogram->getOptions()->getLegend()->setPosition('none');
        $histogram->getOptions()->setColors(['#e7711c']);
        $histogram->getOptions()->getHistogram()->setLastBucketPercentile(10);
        $histogram->getOptions()->getHistogram()->setBucketSize(10000000);

        return $this->render('AppBundle::index.html.twig', array(
                    'piechart' => $pieChart,
                    'histogram' => $histogram
        ));
    }

}
