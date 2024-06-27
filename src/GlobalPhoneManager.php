<?php

namespace Ispahbod\GlobalPhoneManager;

class GlobalPhoneManager
{
    public const COUNTRY_CODES = [
        ['Afghanistan', '+93', 9],
        ['Albania', '+355', 9],
        ['Algeria', '+213', 9],
        ['American Samoa', '+1684', 10],
        ['Andorra', '+376', 9],
        ['Angola', '+244', 9],
        ['Anguilla', '+1264', 10],
        ['Antigua and Barbuda', '+1268', 10],
        ['Argentina', '+54', 10],
        ['Armenia', '+374', 9],
        ['Aruba', '+297', 9],
        ['Australia', '+61', 9],
        ['Austria', '+43', 9],
        ['Azerbaijan', '+994', 9],
        ['Bahamas', '+1242', 10],
        ['Bahrain', '+973', 9],
        ['Bangladesh', '+880', 9],
        ['Barbados', '+1246', 10],
        ['Belarus', '+375', 9],
        ['Belgium', '+32', 9],
        ['Belize', '+501', 9],
        ['Benin', '+229', 9],
        ['Bermuda', '+1441', 10],
        ['Bhutan', '+975', 9],
        ['Bolivia', '+591', 9],
        ['Bosnia and Herzegovina', '+387', 9],
        ['Botswana', '+267', 9],
        ['Brazil', '+55', 10],
        ['British Virgin Islands', '+1284', 10],
        ['Brunei', '+673', 9],
        ['Bulgaria', '+359', 9],
        ['Burkina Faso', '+226', 9],
        ['Burundi', '+257', 9],
        ['Cambodia', '+855', 9],
        ['Cameroon', '+237', 9],
        ['Canada', '+1', 10],
        ['Cape Verde', '+238', 9],
        ['Cayman Islands', '+1345', 10],
        ['Central African Republic', '+236', 9],
        ['Chad', '+235', 9],
        ['Chile', '+56', 9],
        ['China', '+86', 9],
        ['Colombia', '+57', 9],
        ['Comoros', '+269', 9],
        ['Congo', '+242', 9],
        ['Congo Democratic Republic', '+243', 9],
        ['Cook Islands', '+682', 9],
        ['Costa Rica', '+506', 9],
        ['Cote d\'Ivoire', '+225', 9],
        ['Croatia', '+385', 9],
        ['Cuba', '+53', 9],
        ['Curacao', '+599', 9],
        ['Cyprus', '+357', 9],
        ['Czech Republic', '+420', 9],
        ['Denmark', '+45', 9],
        ['Diego Garcia', '+246', 9],
        ['Djibouti', '+253', 9],
        ['Dominica', '+1767', 10],
        ['Dominican Republic', '+1809', 10],
        ['Dominican Republic 2', '+1829', 10],
        ['Dominican Republic 3', '+1849', 10],
        ['Ecuador', '+593', 9],
        ['Egypt', '+20', 9],
        ['El Salvador', '+503', 9],
        ['Equatorial Guinea', '+240', 9],
        ['Eritrea', '+291', 9],
        ['Estonia', '+372', 9],
        ['Eswatini', '+268', 9],
        ['Ethiopia', '+251', 9],
        ['Falkland Islands', '+500', 9],
        ['Faroe Islands', '+298', 9],
        ['Fiji', '+679', 9],
        ['Finland', '+358', 9],
        ['France', '+33', 9],
        ['French Guiana', '+594', 9],
        ['French Polynesia', '+689', 9],
        ['Gabon', '+241', 9],
        ['Gambia', '+220', 9],
        ['Georgia', '+995', 9],
        ['Germany', '+49', 9],
        ['Ghana', '+233', 9],
        ['Gibraltar', '+350', 9],
        ['Greece', '+30', 9],
        ['Greenland', '+299', 9],
        ['Grenada', '+1473', 10],
        ['Guadeloupe', '+590', 9],
        ['Guam', '+1671', 10],
        ['Guatemala', '+502', 9],
        ['Guinea', '+224', 9],
        ['Guinea-Bissau', '+245', 9],
        ['Guyana', '+592', 9],
        ['Haiti', '+509', 9],
        ['Honduras', '+504', 9],
        ['Hong Kong', '+852', 9],
        ['Hungary', '+36', 9],
        ['Iceland', '+354', 9],
        ['India', '+91', 10],
        ['Indonesia', '+62', 9],
        ['Iran', '+98', 10],
        ['Iraq', '+964', 9],
        ['Ireland', '+353', 9],
        ['Israel', '+972', 9],
        ['Italy', '+39', 9],
        ['Jamaica', '+1876', 10],
        ['Japan', '+81', 9],
        ['Jordan', '+962', 9],
        ['Kazakhstan', '+7', 9],
        ['Kenya', '+254', 9],
        ['Kiribati', '+686', 9],
        ['Kosovo', '+383', 9],
        ['Korea Democratic People\'s Republic', '+850', 9],
        ['Korea Republic', '+82', 9],
        ['Kuwait', '+965', 9],
        ['Kyrgyzstan', '+996', 9],
        ['Laos', '+856', 9],
        ['Latvia', '+371', 9],
        ['Lebanon', '+961', 9],
        ['Lesotho', '+266', 9],
        ['Liberia', '+231', 9],
        ['Libya', '+218', 9],
        ['Liechtenstein', '+423', 9],
        ['Lithuania', '+370', 9],
        ['Luxembourg', '+352', 9],
        ['Macau', '+853', 9],
        ['Madagascar', '+261', 9],
        ['Malawi', '+265', 9],
        ['Malaysia', '+60', 9],
        ['Maldives', '+960', 9],
        ['Mali', '+223', 9],
        ['Malta', '+356', 9],
        ['Marshall Islands', '+692', 9],
        ['Martinique', '+596', 9],
        ['Mauritania', '+222', 9],
        ['Mauritius', '+230', 9],
        ['Mexico', '+52', 9],
        ['Micronesia', '+691', 9],
        ['Moldova', '+373', 9],
        ['Monaco', '+377', 9],
        ['Mongolia', '+976', 9],
        ['Montenegro', '+382', 9],
        ['Montserrat', '+1664', 10],
        ['Morocco', '+212', 9],
        ['Mozambique', '+258', 9],
        ['Myanmar', '+95', 9],
        ['Namibia', '+264', 9],
        ['Nauru', '+674', 9],
        ['Nepal', '+977', 9],
        ['Netherlands', '+31', 9],
        ['New Caledonia', '+687', 9],
        ['New Zealand', '+64', 9],
        ['Nicaragua', '+505', 9],
        ['Niger', '+227', 9],
        ['Nigeria', '+234', 9],
        ['Niue', '+683', 9],
        ['Norfolk Island', '+672', 9],
        ['Northern Mariana Islands', '+1670', 10],
        ['Norway', '+47', 9],
        ['Oman', '+968', 9],
        ['Pakistan', '+92', 9],
        ['Palau', '+680', 9],
        ['Palestine', '+970', 9],
        ['Panama', '+507', 9],
        ['Papua New Guinea', '+675', 9],
        ['Paraguay', '+595', 9],
        ['Peru', '+51', 9],
        ['Philippines', '+63', 9],
        ['Poland', '+48', 9],
        ['Portugal', '+351', 9],
        ['Puerto Rico', '+1787', 10],
        ['Puerto Rico 2', '+1939', 10],
        ['Qatar', '+974', 9],
        ['Reunion', '+262', 9],
        ['Romania', '+40', 9],
        ['Russia', '+7', 9],
        ['Rwanda', '+250', 9],
        ['Saint Helena', '+290', 9],
        ['Saint Helena 2', '+247', 9],
        ['Saint Kitts and Nevis', '+1869', 10],
        ['Saint Lucia', '+1758', 10],
        ['Saint Pierre and Miquelon', '+508', 9],
        ['Saint Vincent and the Grenadines', '+1784', 10],
        ['Samoa', '+685', 9],
        ['San Marino', '+378', 9],
        ['Sao Tome and Principe', '+239', 9],
        ['Saudi Arabia', '+966', 9],
        ['Senegal', '+221', 9],
        ['Serbia', '+381', 9],
        ['Seychelles', '+248', 9],
        ['Sierra Leone', '+232', 9],
        ['Singapore', '+65', 9],
        ['Sint Maarten', '+1721', 10],
        ['Slovakia', '+421', 9],
        ['Slovenia', '+386', 9],
        ['Solomon Islands', '+677', 9],
        ['Somalia', '+252', 9],
        ['South Africa', '+27', 9],
        ['South Korea', '+82', 9],
        ['South Sudan', '+211', 9],
        ['Spain', '+34', 9],
        ['Sri Lanka', '+94', 9],
        ['Sudan', '+249', 9],
        ['Suriname', '+597', 9],
        ['Sweden', '+46', 9],
        ['Switzerland', '+41', 9],
        ['Syria', '+963', 9],
        ['Taiwan', '+886', 9],
        ['Tajikistan', '+992', 9],
        ['Tanzania', '+255', 9],
        ['Thailand', '+66', 9],
        ['Timor-Leste', '+670', 9],
        ['Togo', '+228', 9],
        ['Tokelau', '+690', 9],
        ['Tonga', '+676', 9],
        ['Trinidad and Tobago', '+1868', 10],
        ['Tunisia', '+216', 9],
        ['Turkey', '+90', 9],
        ['Turkmenistan', '+993', 9],
        ['Turks and Caicos Islands', '+1649', 10],
        ['Tuvalu', '+688', 9],
        ['Uganda', '+256', 9],
        ['Ukraine', '+380', 9],
        ['United Arab Emirates', '+971', 9],
        ['United Kingdom', '+44', 9],
        ['United States', '+1', 10],
        ['Uruguay', '+598', 9],
        ['US Virgin Islands', '+1340', 10],
        ['Uzbekistan', '+998', 9],
        ['Vanuatu', '+678', 9],
        ['Vatican City', '+379', 9],
        ['Venezuela', '+58', 9],
        ['Vietnam', '+84', 9],
        ['Wallis and Futuna', '+681', 9],
        ['Yemen', '+967', 9],
        ['Zambia', '+260', 9],
        ['Zimbabwe', '+263', 9],
        ['Anonymous Numbers', '+888', 9],
    ];

    public static function normalizeNumber(string $number): array
    {
        $number = preg_replace('/^\+/', '', $number);
        foreach (self::COUNTRY_CODES as $code) {
            if (strpos($number, ltrim($code[1], '+')) === 0) {
                $prefix = ltrim($code[1], '+');
                $normalizedNumber = substr($number, strlen($prefix));
                return [$prefix, $normalizedNumber];
            }
        }
        return [null, $number];
    }

    public static function isValidNumber(string $number): bool
    {
        $number = preg_replace('/^\+/', '', $number);
        foreach (self::COUNTRY_CODES as $code) {
            $prefix = ltrim($code[1], '+');
            if (strpos($number, $prefix) === 0) {
                $normalizedNumber = substr($number, strlen($prefix));
                if (strlen($normalizedNumber) == $code[2]) {
                    return true;
                }
            }
        }
        return false;
    }

    public static function isValidPrefix(string $number): bool
    {
        $number = preg_replace('/^\+/', '', $number);
        foreach (self::COUNTRY_CODES as $code) {
            if (strpos($number, ltrim($code[1], '+')) === 0) {
                return true;
            }
        }
        return false;
    }

    public static function getPrefix(string $number): ?string
    {
        $number = preg_replace('/^\+/', '', $number);
        foreach (self::COUNTRY_CODES as $code) {
            if (strpos($number, ltrim($code[1], '+')) === 0) {
                return ltrim($code[1], '+');
            }
        }
        return null;
    }

    public static function getCountryName(string $number): ?string
    {
        $number = preg_replace('/^\+/', '', $number);
        foreach (self::COUNTRY_CODES as $code) {
            if (strpos($number, ltrim($code[1], '+')) === 0) {
                return $code[0];
            }
        }
        return null;
    }

    public static function getNumberLength(string $prefix): ?int
    {
        $prefix = ltrim($prefix, '+');
        foreach (self::COUNTRY_CODES as $code) {
            if (ltrim($code[1], '+') === $prefix) {
                return $code[2];
            }
        }
        return null;
    }

    public static function isCorrectLength(string $number): bool
    {
        $number = preg_replace('/^\+/', '', $number);
        foreach (self::COUNTRY_CODES as $code) {
            $prefix = ltrim($code[1], '+');
            if (strpos($number, $prefix) === 0) {
                $normalizedNumber = substr($number, strlen($prefix));
                if (strlen($normalizedNumber) == $code[2]) {
                    return true;
                }
            }
        }
        return false;
    }
}
