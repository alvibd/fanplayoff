<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    private $countries = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCountries();

        foreach ($this->countries as $country) {
            DB::table('countries')->insert($country);
        }
    }

    private function createCountries()
    {
        $this->countries[] = [
            'id' => 1,
            'name' => 'Afghanistan',
            'code_2' => 'AF',
            'code_3' => 'AFG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 2,
            'name' => 'Albania',
            'code_2' => 'AL',
            'code_3' => 'ALB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 3,
            'name' => 'Algeria',
            'code_2' => 'DZ',
            'code_3' => 'DZA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 4,
            'name' => 'American Samoa',
            'code_2' => 'AS',
            'code_3' => 'ASM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 5,
            'name' => 'Andorra',
            'code_2' => 'AD',
            'code_3' => 'AND',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 6,
            'name' => 'Angola',
            'code_2' => 'AO',
            'code_3' => 'AGO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 7,
            'name' => 'Anguilla',
            'code_2' => 'AI',
            'code_3' => 'AIA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 8,
            'name' => 'Antarctica',
            'code_2' => 'AQ',
            'code_3' => 'ATA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 9,
            'name' => 'Antigua and Barbuda',
            'code_2' => 'AG',
            'code_3' => 'ATG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 10,
            'name' => 'Argentina',
            'code_2' => 'AR',
            'code_3' => 'ARG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 11,
            'name' => 'Armenia',
            'code_2' => 'AM',
            'code_3' => 'ARM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 12,
            'name' => 'Aruba',
            'code_2' => 'AW',
            'code_3' => 'ABW',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 13,
            'name' => 'Australia',
            'code_2' => 'AU',
            'code_3' => 'AUS',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 14,
            'name' => 'Austria',
            'code_2' => 'AT',
            'code_3' => 'AUT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 15,
            'name' => 'Azerbaijan',
            'code_2' => 'AZ',
            'code_3' => 'AZE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 16,
            'name' => 'Bahamas',
            'code_2' => 'BS',
            'code_3' => 'BHS',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 17,
            'name' => 'Bahrain',
            'code_2' => 'BH',
            'code_3' => 'BHR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 18,
            'name' => 'Bangladesh',
            'code_2' => 'BD',
            'code_3' => 'BGD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 19,
            'name' => 'Barbados',
            'code_2' => 'BB',
            'code_3' => 'BRB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 20,
            'name' => 'Belarus',
            'code_2' => 'BY',
            'code_3' => 'BLR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 21,
            'name' => 'Belgium',
            'code_2' => 'BE',
            'code_3' => 'BEL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 22,
            'name' => 'Belize',
            'code_2' => 'BZ',
            'code_3' => 'BLZ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 23,
            'name' => 'Benin',
            'code_2' => 'BJ',
            'code_3' => 'BEN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 24,
            'name' => 'Bermuda',
            'code_2' => 'BM',
            'code_3' => 'BMU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 25,
            'name' => 'Bhutan',
            'code_2' => 'BT',
            'code_3' => 'BTN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 26,
            'name' => 'Bolivia',
            'code_2' => 'BO',
            'code_3' => 'BOL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 27,
            'name' => 'Bosnia and Herzegovina',
            'code_2' => 'BA',
            'code_3' => 'BIH',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 28,
            'name' => 'Botswana',
            'code_2' => 'BW',
            'code_3' => 'BWA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 29,
            'name' => 'Bouvet Island',
            'code_2' => 'BV',
            'code_3' => 'BVT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 30,
            'name' => 'Brazil',
            'code_2' => 'BR',
            'code_3' => 'BRA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 31,
            'name' => 'British Indian Ocean Territory',
            'code_2' => 'IO',
            'code_3' => 'IOT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 32,
            'name' => 'Brunei Darussalam',
            'code_2' => 'BN',
            'code_3' => 'BRN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 33,
            'name' => 'Bulgaria',
            'code_2' => 'BG',
            'code_3' => 'BGR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 34,
            'name' => 'Burkina Faso',
            'code_2' => 'BF',
            'code_3' => 'BFA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 35,
            'name' => 'Burundi',
            'code_2' => 'BI',
            'code_3' => 'BDI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 36,
            'name' => 'Cambodia',
            'code_2' => 'KH',
            'code_3' => 'KHM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 37,
            'name' => 'Cameroon',
            'code_2' => 'CM',
            'code_3' => 'CMR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 38,
            'name' => 'Canada',
            'code_2' => 'CA',
            'code_3' => 'CAN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 39,
            'name' => 'Cape Verde',
            'code_2' => 'CV',
            'code_3' => 'CPV',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 40,
            'name' => 'Cayman Islands',
            'code_2' => 'KY',
            'code_3' => 'CYM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 41,
            'name' => 'Central African Republic',
            'code_2' => 'CF',
            'code_3' => 'CAF',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 42,
            'name' => 'Chad',
            'code_2' => 'TD',
            'code_3' => 'TCD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 43,
            'name' => 'Chile',
            'code_2' => 'CL',
            'code_3' => 'CHL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 44,
            'name' => 'China',
            'code_2' => 'CN',
            'code_3' => 'CHN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 45,
            'name' => 'Christmas Island',
            'code_2' => 'CX',
            'code_3' => 'CXR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 46,
            'name' => 'Cocos (Keeling) Islands',
            'code_2' => 'CC',
            'code_3' => 'CCK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 47,
            'name' => 'Colombia',
            'code_2' => 'CO',
            'code_3' => 'COL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 48,
            'name' => 'Comoros',
            'code_2' => 'KM',
            'code_3' => 'COM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 49,
            'name' => 'Congo',
            'code_2' => 'CG',
            'code_3' => 'COG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 50,
            'name' => 'Cook Islands',
            'code_2' => 'CK',
            'code_3' => 'COK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 51,
            'name' => 'Costa Rica',
            'code_2' => 'CR',
            'code_3' => 'CRI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 52,
            'name' => 'Cote D\'Ivoire',
            'code_2' => 'CI',
            'code_3' => 'CIV',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 53,
            'name' => 'Croatia',
            'code_2' => 'HR',
            'code_3' => 'HRV',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 54,
            'name' => 'Cuba',
            'code_2' => 'CU',
            'code_3' => 'CUB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 55,
            'name' => 'Cyprus',
            'code_2' => 'CY',
            'code_3' => 'CYP',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 56,
            'name' => 'Czech Republic',
            'code_2' => 'CZ',
            'code_3' => 'CZE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 57,
            'name' => 'Denmark',
            'code_2' => 'DK',
            'code_3' => 'DNK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 58,
            'name' => 'Djibouti',
            'code_2' => 'DJ',
            'code_3' => 'DJI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 59,
            'name' => 'Dominica',
            'code_2' => 'DM',
            'code_3' => 'DMA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 60,
            'name' => 'Dominican Republic',
            'code_2' => 'DO',
            'code_3' => 'DOM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 61,
            'name' => 'East Timor',
            'code_2' => 'TL',
            'code_3' => 'TLS',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 62,
            'name' => 'Ecuador',
            'code_2' => 'EC',
            'code_3' => 'ECU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 63,
            'name' => 'Egypt',
            'code_2' => 'EG',
            'code_3' => 'EGY',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 64,
            'name' => 'El Salvador',
            'code_2' => 'SV',
            'code_3' => 'SLV',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 65,
            'name' => 'Equatorial Guinea',
            'code_2' => 'GQ',
            'code_3' => 'GNQ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 66,
            'name' => 'Eritrea',
            'code_2' => 'ER',
            'code_3' => 'ERI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 67,
            'name' => 'Estonia',
            'code_2' => 'EE',
            'code_3' => 'EST',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 68,
            'name' => 'Ethiopia',
            'code_2' => 'ET',
            'code_3' => 'ETH',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 69,
            'name' => 'Falkland Islands (Malvinas)',
            'code_2' => 'FK',
            'code_3' => 'FLK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 70,
            'name' => 'Faroe Islands',
            'code_2' => 'FO',
            'code_3' => 'FRO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 71,
            'name' => 'Fiji',
            'code_2' => 'FJ',
            'code_3' => 'FJI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 72,
            'name' => 'Finland',
            'code_2' => 'FI',
            'code_3' => 'FIN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 74,
            'name' => 'France, Metropolitan',
            'code_2' => 'FR',
            'code_3' => 'FRA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 75,
            'name' => 'French Guiana',
            'code_2' => 'GF',
            'code_3' => 'GUF',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 76,
            'name' => 'French Polynesia',
            'code_2' => 'PF',
            'code_3' => 'PYF',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 77,
            'name' => 'French Southern Territories',
            'code_2' => 'TF',
            'code_3' => 'ATF',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 78,
            'name' => 'Gabon',
            'code_2' => 'GA',
            'code_3' => 'GAB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 79,
            'name' => 'Gambia',
            'code_2' => 'GM',
            'code_3' => 'GMB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 80,
            'name' => 'Georgia',
            'code_2' => 'GE',
            'code_3' => 'GEO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 81,
            'name' => 'Germany',
            'code_2' => 'DE',
            'code_3' => 'DEU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 82,
            'name' => 'Ghana',
            'code_2' => 'GH',
            'code_3' => 'GHA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 83,
            'name' => 'Gibraltar',
            'code_2' => 'GI',
            'code_3' => 'GIB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 84,
            'name' => 'Greece',
            'code_2' => 'GR',
            'code_3' => 'GRC',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 85,
            'name' => 'Greenland',
            'code_2' => 'GL',
            'code_3' => 'GRL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 86,
            'name' => 'Grenada',
            'code_2' => 'GD',
            'code_3' => 'GRD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 87,
            'name' => 'Guadeloupe',
            'code_2' => 'GP',
            'code_3' => 'GLP',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 88,
            'name' => 'Guam',
            'code_2' => 'GU',
            'code_3' => 'GUM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 89,
            'name' => 'Guatemala',
            'code_2' => 'GT',
            'code_3' => 'GTM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 90,
            'name' => 'Guinea',
            'code_2' => 'GN',
            'code_3' => 'GIN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 91,
            'name' => 'Guinea-Bissau',
            'code_2' => 'GW',
            'code_3' => 'GNB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 92,
            'name' => 'Guyana',
            'code_2' => 'GY',
            'code_3' => 'GUY',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 93,
            'name' => 'Haiti',
            'code_2' => 'HT',
            'code_3' => 'HTI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 94,
            'name' => 'Heard and Mc Donald Islands',
            'code_2' => 'HM',
            'code_3' => 'HMD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 95,
            'name' => 'Honduras',
            'code_2' => 'HN',
            'code_3' => 'HND',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 96,
            'name' => 'Hong Kong',
            'code_2' => 'HK',
            'code_3' => 'HKG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 97,
            'name' => 'Hungary',
            'code_2' => 'HU',
            'code_3' => 'HUN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 98,
            'name' => 'Iceland',
            'code_2' => 'IS',
            'code_3' => 'ISL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 99,
            'name' => 'India',
            'code_2' => 'IN',
            'code_3' => 'IND',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 100,
            'name' => 'Indonesia',
            'code_2' => 'ID',
            'code_3' => 'IDN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 101,
            'name' => 'Iran (Islamic Republic of)',
            'code_2' => 'IR',
            'code_3' => 'IRN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 102,
            'name' => 'Iraq',
            'code_2' => 'IQ',
            'code_3' => 'IRQ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 103,
            'name' => 'Ireland',
            'code_2' => 'IE',
            'code_3' => 'IRL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 104,
            'name' => 'Israel',
            'code_2' => 'IL',
            'code_3' => 'ISR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 105,
            'name' => 'Italy',
            'code_2' => 'IT',
            'code_3' => 'ITA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 106,
            'name' => 'Jamaica',
            'code_2' => 'JM',
            'code_3' => 'JAM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 107,
            'name' => 'Japan',
            'code_2' => 'JP',
            'code_3' => 'JPN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 108,
            'name' => 'Jordan',
            'code_2' => 'JO',
            'code_3' => 'JOR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 109,
            'name' => 'Kazakhstan',
            'code_2' => 'KZ',
            'code_3' => 'KAZ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 110,
            'name' => 'Kenya',
            'code_2' => 'KE',
            'code_3' => 'KEN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 111,
            'name' => 'Kiribati',
            'code_2' => 'KI',
            'code_3' => 'KIR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 112,
            'name' => 'North Korea',
            'code_2' => 'KP',
            'code_3' => 'PRK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 113,
            'name' => 'Korea, Republic of',
            'code_2' => 'KR',
            'code_3' => 'KOR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 114,
            'name' => 'Kuwait',
            'code_2' => 'KW',
            'code_3' => 'KWT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 115,
            'name' => 'Kyrgyzstan',
            'code_2' => 'KG',
            'code_3' => 'KGZ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 116,
            'name' => 'Lao People\'s Democratic Republic',
            'code_2' => 'LA',
            'code_3' => 'LAO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 117,
            'name' => 'Latvia',
            'code_2' => 'LV',
            'code_3' => 'LVA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 118,
            'name' => 'Lebanon',
            'code_2' => 'LB',
            'code_3' => 'LBN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 119,
            'name' => 'Lesotho',
            'code_2' => 'LS',
            'code_3' => 'LSO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 120,
            'name' => 'Liberia',
            'code_2' => 'LR',
            'code_3' => 'LBR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 121,
            'name' => 'Libyan Arab Jamahiriya',
            'code_2' => 'LY',
            'code_3' => 'LBY',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 122,
            'name' => 'Liechtenstein',
            'code_2' => 'LI',
            'code_3' => 'LIE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 123,
            'name' => 'Lithuania',
            'code_2' => 'LT',
            'code_3' => 'LTU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 124,
            'name' => 'Luxembourg',
            'code_2' => 'LU',
            'code_3' => 'LUX',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 125,
            'name' => 'Macau',
            'code_2' => 'MO',
            'code_3' => 'MAC',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 126,
            'name' => 'FYROM',
            'code_2' => 'MK',
            'code_3' => 'MKD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 127,
            'name' => 'Madagascar',
            'code_2' => 'MG',
            'code_3' => 'MDG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 128,
            'name' => 'Malawi',
            'code_2' => 'MW',
            'code_3' => 'MWI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 129,
            'name' => 'Malaysia',
            'code_2' => 'MY',
            'code_3' => 'MYS',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 130,
            'name' => 'Maldives',
            'code_2' => 'MV',
            'code_3' => 'MDV',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 131,
            'name' => 'Mali',
            'code_2' => 'ML',
            'code_3' => 'MLI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 132,
            'name' => 'Malta',
            'code_2' => 'MT',
            'code_3' => 'MLT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 133,
            'name' => 'Marshall Islands',
            'code_2' => 'MH',
            'code_3' => 'MHL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 134,
            'name' => 'Martinique',
            'code_2' => 'MQ',
            'code_3' => 'MTQ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 135,
            'name' => 'Mauritania',
            'code_2' => 'MR',
            'code_3' => 'MRT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 136,
            'name' => 'Mauritius',
            'code_2' => 'MU',
            'code_3' => 'MUS',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 137,
            'name' => 'Mayotte',
            'code_2' => 'YT',
            'code_3' => 'MYT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 138,
            'name' => 'Mexico',
            'code_2' => 'MX',
            'code_3' => 'MEX',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 139,
            'name' => 'Micronesia, Federated States of',
            'code_2' => 'FM',
            'code_3' => 'FSM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 140,
            'name' => 'Moldova, Republic of',
            'code_2' => 'MD',
            'code_3' => 'MDA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 141,
            'name' => 'Monaco',
            'code_2' => 'MC',
            'code_3' => 'MCO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 142,
            'name' => 'Mongolia',
            'code_2' => 'MN',
            'code_3' => 'MNG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 143,
            'name' => 'Montserrat',
            'code_2' => 'MS',
            'code_3' => 'MSR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 144,
            'name' => 'Morocco',
            'code_2' => 'MA',
            'code_3' => 'MAR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 145,
            'name' => 'Mozambique',
            'code_2' => 'MZ',
            'code_3' => 'MOZ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 146,
            'name' => 'Myanmar',
            'code_2' => 'MM',
            'code_3' => 'MMR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 147,
            'name' => 'Namibia',
            'code_2' => 'NA',
            'code_3' => 'NAM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 148,
            'name' => 'Nauru',
            'code_2' => 'NR',
            'code_3' => 'NRU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 149,
            'name' => 'Nepal',
            'code_2' => 'NP',
            'code_3' => 'NPL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 150,
            'name' => 'Netherlands',
            'code_2' => 'NL',
            'code_3' => 'NLD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 151,
            'name' => 'Netherlands Antilles',
            'code_2' => 'AN',
            'code_3' => 'ANT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 152,
            'name' => 'New Caledonia',
            'code_2' => 'NC',
            'code_3' => 'NCL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 153,
            'name' => 'New Zealand',
            'code_2' => 'NZ',
            'code_3' => 'NZL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 154,
            'name' => 'Nicaragua',
            'code_2' => 'NI',
            'code_3' => 'NIC',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 155,
            'name' => 'Niger',
            'code_2' => 'NE',
            'code_3' => 'NER',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 156,
            'name' => 'Nigeria',
            'code_2' => 'NG',
            'code_3' => 'NGA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 157,
            'name' => 'Niue',
            'code_2' => 'NU',
            'code_3' => 'NIU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 158,
            'name' => 'Norfolk Island',
            'code_2' => 'NF',
            'code_3' => 'NFK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 159,
            'name' => 'Northern Mariana Islands',
            'code_2' => 'MP',
            'code_3' => 'MNP',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 160,
            'name' => 'Norway',
            'code_2' => 'NO',
            'code_3' => 'NOR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 161,
            'name' => 'Oman',
            'code_2' => 'OM',
            'code_3' => 'OMN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 162,
            'name' => 'Pakistan',
            'code_2' => 'PK',
            'code_3' => 'PAK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 163,
            'name' => 'Palau',
            'code_2' => 'PW',
            'code_3' => 'PLW',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 164,
            'name' => 'Panama',
            'code_2' => 'PA',
            'code_3' => 'PAN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 165,
            'name' => 'Papua New Guinea',
            'code_2' => 'PG',
            'code_3' => 'PNG',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 166,
            'name' => 'Paraguay',
            'code_2' => 'PY',
            'code_3' => 'PRY',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 167,
            'name' => 'Peru',
            'code_2' => 'PE',
            'code_3' => 'PER',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 168,
            'name' => 'Philippines',
            'code_2' => 'PH',
            'code_3' => 'PHL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 169,
            'name' => 'Pitcairn',
            'code_2' => 'PN',
            'code_3' => 'PCN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 170,
            'name' => 'Poland',
            'code_2' => 'PL',
            'code_3' => 'POL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 171,
            'name' => 'Portugal',
            'code_2' => 'PT',
            'code_3' => 'PRT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 172,
            'name' => 'Puerto Rico',
            'code_2' => 'PR',
            'code_3' => 'PRI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 173,
            'name' => 'Qatar',
            'code_2' => 'QA',
            'code_3' => 'QAT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 174,
            'name' => 'Reunion',
            'code_2' => 'RE',
            'code_3' => 'REU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 175,
            'name' => 'Romania',
            'code_2' => 'RO',
            'code_3' => 'ROM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 176,
            'name' => 'Russian Federation',
            'code_2' => 'RU',
            'code_3' => 'RUS',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 177,
            'name' => 'Rwanda',
            'code_2' => 'RW',
            'code_3' => 'RWA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 178,
            'name' => 'Saint Kitts and Nevis',
            'code_2' => 'KN',
            'code_3' => 'KNA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 179,
            'name' => 'Saint Lucia',
            'code_2' => 'LC',
            'code_3' => 'LCA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 180,
            'name' => 'Saint Vincent and the Grenadines',
            'code_2' => 'VC',
            'code_3' => 'VCT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 181,
            'name' => 'Samoa',
            'code_2' => 'WS',
            'code_3' => 'WSM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 182,
            'name' => 'San Marino',
            'code_2' => 'SM',
            'code_3' => 'SMR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 183,
            'name' => 'Sao Tome and Principe',
            'code_2' => 'ST',
            'code_3' => 'STP',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 184,
            'name' => 'Saudi Arabia',
            'code_2' => 'SA',
            'code_3' => 'SAU',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 185,
            'name' => 'Senegal',
            'code_2' => 'SN',
            'code_3' => 'SEN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 186,
            'name' => 'Seychelles',
            'code_2' => 'SC',
            'code_3' => 'SYC',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 187,
            'name' => 'Sierra Leone',
            'code_2' => 'SL',
            'code_3' => 'SLE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 188,
            'name' => 'Singapore',
            'code_2' => 'SG',
            'code_3' => 'SGP',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 189,
            'name' => 'Slovak Republic',
            'code_2' => 'SK',
            'code_3' => 'SVK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 190,
            'name' => 'Slovenia',
            'code_2' => 'SI',
            'code_3' => 'SVN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 191,
            'name' => 'Solomon Islands',
            'code_2' => 'SB',
            'code_3' => 'SLB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 192,
            'name' => 'Somalia',
            'code_2' => 'SO',
            'code_3' => 'SOM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 193,
            'name' => 'South Africa',
            'code_2' => 'ZA',
            'code_3' => 'ZAF',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 194,
            'name' => 'South Georgia &amp; South Sandwich Islands',
            'code_2' => 'GS',
            'code_3' => 'SGS',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 195,
            'name' => 'Spain',
            'code_2' => 'ES',
            'code_3' => 'ESP',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 196,
            'name' => 'Sri Lanka',
            'code_2' => 'LK',
            'code_3' => 'LKA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 197,
            'name' => 'St. Helena',
            'code_2' => 'SH',
            'code_3' => 'SHN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 198,
            'name' => 'St. Pierre and Miquelon',
            'code_2' => 'PM',
            'code_3' => 'SPM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 199,
            'name' => 'Sudan',
            'code_2' => 'SD',
            'code_3' => 'SDN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 200,
            'name' => 'Suriname',
            'code_2' => 'SR',
            'code_3' => 'SUR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 201,
            'name' => 'Svalbard and Jan Mayen Islands',
            'code_2' => 'SJ',
            'code_3' => 'SJM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 202,
            'name' => 'Swaziland',
            'code_2' => 'SZ',
            'code_3' => 'SWZ',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 203,
            'name' => 'Sweden',
            'code_2' => 'SE',
            'code_3' => 'SWE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 204,
            'name' => 'Switzerland',
            'code_2' => 'CH',
            'code_3' => 'CHE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 205,
            'name' => 'Syrian Arab Republic',
            'code_2' => 'SY',
            'code_3' => 'SYR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 206,
            'name' => 'Taiwan',
            'code_2' => 'TW',
            'code_3' => 'TWN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 207,
            'name' => 'Tajikistan',
            'code_2' => 'TJ',
            'code_3' => 'TJK',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 208,
            'name' => 'Tanzania, United Republic of',
            'code_2' => 'TZ',
            'code_3' => 'TZA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 209,
            'name' => 'Thailand',
            'code_2' => 'TH',
            'code_3' => 'THA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 210,
            'name' => 'Togo',
            'code_2' => 'TG',
            'code_3' => 'TGO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 211,
            'name' => 'Tokelau',
            'code_2' => 'TK',
            'code_3' => 'TKL',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 212,
            'name' => 'Tonga',
            'code_2' => 'TO',
            'code_3' => 'TON',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 213,
            'name' => 'Trinidad and Tobago',
            'code_2' => 'TT',
            'code_3' => 'TTO',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 214,
            'name' => 'Tunisia',
            'code_2' => 'TN',
            'code_3' => 'TUN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 215,
            'name' => 'Turkey',
            'code_2' => 'TR',
            'code_3' => 'TUR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 216,
            'name' => 'Turkmenistan',
            'code_2' => 'TM',
            'code_3' => 'TKM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 217,
            'name' => 'Turks and Caicos Islands',
            'code_2' => 'TC',
            'code_3' => 'TCA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 218,
            'name' => 'Tuvalu',
            'code_2' => 'TV',
            'code_3' => 'TUV',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 219,
            'name' => 'Uganda',
            'code_2' => 'UG',
            'code_3' => 'UGA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 220,
            'name' => 'Ukraine',
            'code_2' => 'UA',
            'code_3' => 'UKR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 221,
            'name' => 'United Arab Emirates',
            'code_2' => 'AE',
            'code_3' => 'ARE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 222,
            'name' => 'United Kingdom',
            'code_2' => 'GB',
            'code_3' => 'GBR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 223,
            'name' => 'United States',
            'code_2' => 'US',
            'code_3' => 'USA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 224,
            'name' => 'United States Minor Outlying Islands',
            'code_2' => 'UM',
            'code_3' => 'UMI',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 225,
            'name' => 'Uruguay',
            'code_2' => 'UY',
            'code_3' => 'URY',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 226,
            'name' => 'Uzbekistan',
            'code_2' => 'UZ',
            'code_3' => 'UZB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 227,
            'name' => 'Vanuatu',
            'code_2' => 'VU',
            'code_3' => 'VUT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 228,
            'name' => 'Vatican City State (Holy See)',
            'code_2' => 'VA',
            'code_3' => 'VAT',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 229,
            'name' => 'Venezuela',
            'code_2' => 'VE',
            'code_3' => 'VEN',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 230,
            'name' => 'Viet Nam',
            'code_2' => 'VN',
            'code_3' => 'VNM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 231,
            'name' => 'Virgin Islands (British)',
            'code_2' => 'VG',
            'code_3' => 'VGB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 232,
            'name' => 'Virgin Islands (U.S.)',
            'code_2' => 'VI',
            'code_3' => 'VIR',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 233,
            'name' => 'Wallis and Futuna Islands',
            'code_2' => 'WF',
            'code_3' => 'WLF',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 234,
            'name' => 'Western Sahara',
            'code_2' => 'EH',
            'code_3' => 'ESH',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 235,
            'name' => 'Yemen',
            'code_2' => 'YE',
            'code_3' => 'YEM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 237,
            'name' => 'Democratic Republic of Congo',
            'code_2' => 'CD',
            'code_3' => 'COD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 238,
            'name' => 'Zambia',
            'code_2' => 'ZM',
            'code_3' => 'ZMB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 239,
            'name' => 'Zimbabwe',
            'code_2' => 'ZW',
            'code_3' => 'ZWE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 240,
            'name' => 'Jersey',
            'code_2' => 'JE',
            'code_3' => 'JEY',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 241,
            'name' => 'Guernsey',
            'code_2' => 'GG',
            'code_3' => 'GGY',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 242,
            'name' => 'Montenegro',
            'code_2' => 'ME',
            'code_3' => 'MNE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 243,
            'name' => 'Serbia',
            'code_2' => 'RS',
            'code_3' => 'SRB',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 244,
            'name' => 'Aaland Islands',
            'code_2' => 'AX',
            'code_3' => 'ALA',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 245,
            'name' => 'Bonaire, Sint Eustatius and Saba',
            'code_2' => 'BQ',
            'code_3' => 'BES',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 246,
            'name' => 'Curacao',
            'code_2' => 'CW',
            'code_3' => 'CUW',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 247,
            'name' => 'Palestinian Territory, Occupied',
            'code_2' => 'PS',
            'code_3' => 'PSE',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 248,
            'name' => 'South Sudan',
            'code_2' => 'SS',
            'code_3' => 'SSD',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 249,
            'name' => 'St. Barthelemy',
            'code_2' => 'BL',
            'code_3' => 'BLM',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 250,
            'name' => 'St. Martin (French part)',
            'code_2' => 'MF',
            'code_3' => 'MAF',
            'published' => 1
        ];

        $this->countries[] = [
            'id' => 251,
            'name' => 'Canary Islands',
            'code_2' => 'IC',
            'code_3' => 'ICA',
            'published' => 1
        ];

        return $this->countries;
    }
}
