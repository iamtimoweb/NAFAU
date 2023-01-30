<?php


namespace App\libraries;

//use Analytics;
use Analytics;
use Illuminate\Support\Carbon;
use Spatie\Analytics\Period;

class GoogleAnalytics
{
    public static function topCountries()
    {
        $country = Analytics::performQuery(Period::days(30), 'ga:sessions', ['dimensions' => 'ga:country', 'sort' => '-ga:sessions']);
        $result = collect($country['rows'] ?? [])->map(function (array $dateRow) {
            return [
                'country' => $dateRow[0],
                'sessions' => (int)$dateRow[1],
            ];
        });
        return $result;
    }

    public static function fetchVisitorsAndPageViews()
    {
        //retrieve visitors and pageview data for the current day and the last seven days
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        return $analyticsData;
    }
}
