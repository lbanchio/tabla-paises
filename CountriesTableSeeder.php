<?php
/**
 *  CountryTableSeeder.php
 *
 *  @category Seeds
 *  @author   Leandro Banchio <lbanchio@gmail.com>
 *  @license  MIT 
 *  @version  0.1
 *  @link     https://github.com/lbanchio/tabla-paises
 *
 */

use \App\Models\Country;

/**
 *  Countries table seeder
 *
 *  Provides spanish records for almost all countries in the world.
 *
 *  @category Seeds
 *  @author   Leandro Banchio <lbanchio@gmail.com> 
 */
Class CountriesTableSeeder extends Seeder{
 
    public function run() {

        DB::table('countries')->delete();
        
        Country::create(['name' => 'Afganistán', 'iso3166code' => 4, 'iso3166a1' => 'AF', 'iso3166a2' => 'AFG']);
        Country::create(['name' => 'Islas Gland', 'iso3166code' => 248, 'iso3166a1' => 'AX', 'iso3166a2' => 'ALA']);
        Country::create(['name' => 'Albania', 'iso3166code' => 8, 'iso3166a1' => 'AL', 'iso3166a2' => 'ALB']);
        Country::create(['name' => 'Alemania', 'iso3166code' => 276, 'iso3166a1' => 'DE', 'iso3166a2' => 'DEU']);
        Country::create(['name' => 'Andorra', 'iso3166code' => 20, 'iso3166a1' => 'AD', 'iso3166a2' => 'AND']);
        Country::create(['name' => 'Angola', 'iso3166code' => 24, 'iso3166a1' => 'AO', 'iso3166a2' => 'AGO']);
        Country::create(['name' => 'Anguilla', 'iso3166code' => 660, 'iso3166a1' => 'AI', 'iso3166a2' => 'AIA']);
        Country::create(['name' => 'Antártida', 'iso3166code' => 10, 'iso3166a1' => 'AQ', 'iso3166a2' => 'ATA']);
        Country::create(['name' => 'Antigua y Barbuda', 'iso3166code' => 28, 'iso3166a1' => 'AG', 'iso3166a2' => 'ATG']);
        Country::create(['name' => 'Antillas Holandesas', 'iso3166code' => 530, 'iso3166a1' => 'AN', 'iso3166a2' => 'ANT']);
        Country::create(['name' => 'Arabia Saudí', 'iso3166code' => 682, 'iso3166a1' => 'SA', 'iso3166a2' => 'SAU']);
        Country::create(['name' => 'Argelia', 'iso3166code' => 12, 'iso3166a1' => 'DZ', 'iso3166a2' => 'DZA']);
        Country::create(['name' => 'Argentina', 'iso3166code' => 32, 'iso3166a1' => 'AR', 'iso3166a2' => 'ARG']);
        Country::create(['name' => 'Armenia', 'iso3166code' => 51, 'iso3166a1' => 'AM', 'iso3166a2' => 'ARM']);
        Country::create(['name' => 'Aruba', 'iso3166code' => 533, 'iso3166a1' => 'AW', 'iso3166a2' => 'ABW']);
        Country::create(['name' => 'Australia', 'iso3166code' => 36, 'iso3166a1' => 'AU', 'iso3166a2' => 'AUS']);
        Country::create(['name' => 'Austria', 'iso3166code' => 40, 'iso3166a1' => 'AT', 'iso3166a2' => 'AUT']);
        Country::create(['name' => 'Azerbaiyán', 'iso3166code' => 31, 'iso3166a1' => 'AZ', 'iso3166a2' => 'AZE']);
        Country::create(['name' => 'Bahamas', 'iso3166code' => 44, 'iso3166a1' => 'BS', 'iso3166a2' => 'BHS']);
        Country::create(['name' => 'Bahréin', 'iso3166code' => 48, 'iso3166a1' => 'BH', 'iso3166a2' => 'BHR']);
        Country::create(['name' => 'Bangladesh', 'iso3166code' => 50, 'iso3166a1' => 'BD', 'iso3166a2' => 'BGD']);
        Country::create(['name' => 'Barbados', 'iso3166code' => 52, 'iso3166a1' => 'BB', 'iso3166a2' => 'BRB']);
        Country::create(['name' => 'Bielorrusia', 'iso3166code' => 112, 'iso3166a1' => 'BY', 'iso3166a2' => 'BLR']);
        Country::create(['name' => 'Bélgica', 'iso3166code' => 56, 'iso3166a1' => 'BE', 'iso3166a2' => 'BEL']);
        Country::create(['name' => 'Belice', 'iso3166code' => 84, 'iso3166a1' => 'BZ', 'iso3166a2' => 'BLZ']);
        Country::create(['name' => 'Benin', 'iso3166code' => 204, 'iso3166a1' => 'BJ', 'iso3166a2' => 'BEN']);
        Country::create(['name' => 'Bermudas', 'iso3166code' => 60, 'iso3166a1' => 'BM', 'iso3166a2' => 'BMU']);
        Country::create(['name' => 'Bhután', 'iso3166code' => 64, 'iso3166a1' => 'BT', 'iso3166a2' => 'BTN']);
        Country::create(['name' => 'Bolivia', 'iso3166code' => 68, 'iso3166a1' => 'BO', 'iso3166a2' => 'BOL']);
        Country::create(['name' => 'Bosnia y Herzegovina', 'iso3166code' => 70, 'iso3166a1' => 'BA', 'iso3166a2' => 'BIH']);
        Country::create(['name' => 'Botsuana', 'iso3166code' => 72, 'iso3166a1' => 'BW', 'iso3166a2' => 'BWA']);
        Country::create(['name' => 'Isla Bouvet', 'iso3166code' => 74, 'iso3166a1' => 'BV', 'iso3166a2' => 'BVT']);
        Country::create(['name' => 'Brasil', 'iso3166code' => 76, 'iso3166a1' => 'BR', 'iso3166a2' => 'BRA']);
        Country::create(['name' => 'Brunéi', 'iso3166code' => 96, 'iso3166a1' => 'BN', 'iso3166a2' => 'BRN']);
        Country::create(['name' => 'Bulgaria', 'iso3166code' => 100, 'iso3166a1' => 'BG', 'iso3166a2' => 'BGR']);
        Country::create(['name' => 'Burkina Faso', 'iso3166code' => 854, 'iso3166a1' => 'BF', 'iso3166a2' => 'BFA']);
        Country::create(['name' => 'Burundi', 'iso3166code' => 108, 'iso3166a1' => 'BI', 'iso3166a2' => 'BDI']);
        Country::create(['name' => 'Cabo Verde', 'iso3166code' => 132, 'iso3166a1' => 'CV', 'iso3166a2' => 'CPV']);
        Country::create(['name' => 'Islas Caimán', 'iso3166code' => 136, 'iso3166a1' => 'KY', 'iso3166a2' => 'CYM']);
        Country::create(['name' => 'Camboya', 'iso3166code' => 116, 'iso3166a1' => 'KH', 'iso3166a2' => 'KHM']);
        Country::create(['name' => 'Camerún', 'iso3166code' => 120, 'iso3166a1' => 'CM', 'iso3166a2' => 'CMR']);
        Country::create(['name' => 'Canadá', 'iso3166code' => 124, 'iso3166a1' => 'CA', 'iso3166a2' => 'CAN']);
        Country::create(['name' => 'República Centroafricana', 'iso3166code' => 140, 'iso3166a1' => 'CF', 'iso3166a2' => 'CAF']);
        Country::create(['name' => 'Chad', 'iso3166code' => 148, 'iso3166a1' => 'TD', 'iso3166a2' => 'TCD']);
        Country::create(['name' => 'República Checa', 'iso3166code' => 203, 'iso3166a1' => 'CZ', 'iso3166a2' => 'CZE']);
        Country::create(['name' => 'Chile', 'iso3166code' => 152, 'iso3166a1' => 'CL', 'iso3166a2' => 'CHL']);
        Country::create(['name' => 'China', 'iso3166code' => 156, 'iso3166a1' => 'CN', 'iso3166a2' => 'CHN']);
        Country::create(['name' => 'Chipre', 'iso3166code' => 196, 'iso3166a1' => 'CY', 'iso3166a2' => 'CYP']);
        Country::create(['name' => 'Isla de Navidad', 'iso3166code' => 162, 'iso3166a1' => 'CX', 'iso3166a2' => 'CXR']);
        Country::create(['name' => 'Ciudad del Vaticano', 'iso3166code' => 336, 'iso3166a1' => 'VA', 'iso3166a2' => 'VAT']);
        Country::create(['name' => 'Islas Cocos', 'iso3166code' => 166, 'iso3166a1' => 'CC', 'iso3166a2' => 'CCK']);
        Country::create(['name' => 'Colombia', 'iso3166code' => 170, 'iso3166a1' => 'CO', 'iso3166a2' => 'COL']);
        Country::create(['name' => 'Comoras', 'iso3166code' => 174, 'iso3166a1' => 'KM', 'iso3166a2' => 'COM']);
        Country::create(['name' => 'República Democrática del Congo', 'iso3166code' => 180, 'iso3166a1' => 'CD', 'iso3166a2' => 'COD']);
        Country::create(['name' => 'Congo', 'iso3166code' => 178, 'iso3166a1' => 'CG', 'iso3166a2' => 'COG']);
        Country::create(['name' => 'Islas Cook', 'iso3166code' => 184, 'iso3166a1' => 'CK', 'iso3166a2' => 'COK']);
        Country::create(['name' => 'Corea del Norte', 'iso3166code' => 408, 'iso3166a1' => 'KP', 'iso3166a2' => 'PRK']);
        Country::create(['name' => 'Corea del Sur', 'iso3166code' => 410, 'iso3166a1' => 'KR', 'iso3166a2' => 'KOR']);
        Country::create(['name' => 'Costa de Marfil', 'iso3166code' => 384, 'iso3166a1' => 'CI', 'iso3166a2' => 'CIV']);
        Country::create(['name' => 'Costa Rica', 'iso3166code' => 188, 'iso3166a1' => 'CR', 'iso3166a2' => 'CRI']);
        Country::create(['name' => 'Croacia', 'iso3166code' => 191, 'iso3166a1' => 'HR', 'iso3166a2' => 'HRV']);
        Country::create(['name' => 'Cuba', 'iso3166code' => 192, 'iso3166a1' => 'CU', 'iso3166a2' => 'CUB']);
        Country::create(['name' => 'Dinamarca', 'iso3166code' => 208, 'iso3166a1' => 'DK', 'iso3166a2' => 'DNK']);
        Country::create(['name' => 'Dominica', 'iso3166code' => 212, 'iso3166a1' => 'DM', 'iso3166a2' => 'DMA']);
        Country::create(['name' => 'República Dominicana', 'iso3166code' => 214, 'iso3166a1' => 'DO', 'iso3166a2' => 'DOM']);
        Country::create(['name' => 'Ecuador', 'iso3166code' => 218, 'iso3166a1' => 'EC', 'iso3166a2' => 'ECU']);
        Country::create(['name' => 'Egipto', 'iso3166code' => 818, 'iso3166a1' => 'EG', 'iso3166a2' => 'EGY']);
        Country::create(['name' => 'El Salvador', 'iso3166code' => 222, 'iso3166a1' => 'SV', 'iso3166a2' => 'SLV']);
        Country::create(['name' => 'Emiratos Árabes Unidos', 'iso3166code' => 784, 'iso3166a1' => 'AE', 'iso3166a2' => 'ARE']);
        Country::create(['name' => 'Eritrea', 'iso3166code' => 232, 'iso3166a1' => 'ER', 'iso3166a2' => 'ERI']);
        Country::create(['name' => 'Eslovaquia', 'iso3166code' => 703, 'iso3166a1' => 'SK', 'iso3166a2' => 'SVK']);
        Country::create(['name' => 'Eslovenia', 'iso3166code' => 705, 'iso3166a1' => 'SI', 'iso3166a2' => 'SVN']);
        Country::create(['name' => 'España', 'iso3166code' => 724, 'iso3166a1' => 'ES', 'iso3166a2' => 'ESP']);
        Country::create(['name' => 'Islas ultramarinas de Estados Unidos', 'iso3166code' => 581, 'iso3166a1' => 'UM', 'iso3166a2' => 'UMI']);
        Country::create(['name' => 'Estados Unidos', 'iso3166code' => 840, 'iso3166a1' => 'US', 'iso3166a2' => 'USA']);
        Country::create(['name' => 'Estonia', 'iso3166code' => 233, 'iso3166a1' => 'EE', 'iso3166a2' => 'EST']);
        Country::create(['name' => 'Etiopía', 'iso3166code' => 231, 'iso3166a1' => 'ET', 'iso3166a2' => 'ETH']);
        Country::create(['name' => 'Islas Feroe', 'iso3166code' => 234, 'iso3166a1' => 'FO', 'iso3166a2' => 'FRO']);
        Country::create(['name' => 'Filipinas', 'iso3166code' => 608, 'iso3166a1' => 'PH', 'iso3166a2' => 'PHL']);
        Country::create(['name' => 'Finlandia', 'iso3166code' => 246, 'iso3166a1' => 'FI', 'iso3166a2' => 'FIN']);
        Country::create(['name' => 'Fiyi', 'iso3166code' => 242, 'iso3166a1' => 'FJ', 'iso3166a2' => 'FJI']);
        Country::create(['name' => 'Francia', 'iso3166code' => 250, 'iso3166a1' => 'FR', 'iso3166a2' => 'FRA']);
        Country::create(['name' => 'Gabón', 'iso3166code' => 266, 'iso3166a1' => 'GA', 'iso3166a2' => 'GAB']);
        Country::create(['name' => 'Gambia', 'iso3166code' => 270, 'iso3166a1' => 'GM', 'iso3166a2' => 'GMB']);
        Country::create(['name' => 'Georgia', 'iso3166code' => 268, 'iso3166a1' => 'GE', 'iso3166a2' => 'GEO']);
        Country::create(['name' => 'Islas Georgias del Sur y Sandwich del Sur', 'iso3166code' => 239, 'iso3166a1' => 'GS', 'iso3166a2' => 'SGS']);
        Country::create(['name' => 'Ghana', 'iso3166code' => 288, 'iso3166a1' => 'GH', 'iso3166a2' => 'GHA']);
        Country::create(['name' => 'Gibraltar', 'iso3166code' => 292, 'iso3166a1' => 'GI', 'iso3166a2' => 'GIB']);
        Country::create(['name' => 'Granada', 'iso3166code' => 308, 'iso3166a1' => 'GD', 'iso3166a2' => 'GRD']);
        Country::create(['name' => 'Grecia', 'iso3166code' => 300, 'iso3166a1' => 'GR', 'iso3166a2' => 'GRC']);
        Country::create(['name' => 'Groenlandia', 'iso3166code' => 304, 'iso3166a1' => 'GL', 'iso3166a2' => 'GRL']);
        Country::create(['name' => 'Guadalupe', 'iso3166code' => 312, 'iso3166a1' => 'GP', 'iso3166a2' => 'GLP']);
        Country::create(['name' => 'Guam', 'iso3166code' => 316, 'iso3166a1' => 'GU', 'iso3166a2' => 'GUM']);
        Country::create(['name' => 'Guatemala', 'iso3166code' => 320, 'iso3166a1' => 'GT', 'iso3166a2' => 'GTM']);
        Country::create(['name' => 'Guayana Francesa', 'iso3166code' => 254, 'iso3166a1' => 'GF', 'iso3166a2' => 'GUF']);
        Country::create(['name' => 'Guinea', 'iso3166code' => 324, 'iso3166a1' => 'GN', 'iso3166a2' => 'GIN']);
        Country::create(['name' => 'Guinea Ecuatorial', 'iso3166code' => 226, 'iso3166a1' => 'GQ', 'iso3166a2' => 'GNQ']);
        Country::create(['name' => 'Guinea-Bissau', 'iso3166code' => 624, 'iso3166a1' => 'GW', 'iso3166a2' => 'GNB']);
        Country::create(['name' => 'Guyana', 'iso3166code' => 328, 'iso3166a1' => 'GY', 'iso3166a2' => 'GUY']);
        Country::create(['name' => 'Haití', 'iso3166code' => 332, 'iso3166a1' => 'HT', 'iso3166a2' => 'HTI']);
        Country::create(['name' => 'Islas Heard y McDonald', 'iso3166code' => 334, 'iso3166a1' => 'HM', 'iso3166a2' => 'HMD']);
        Country::create(['name' => 'Honduras', 'iso3166code' => 340, 'iso3166a1' => 'HN', 'iso3166a2' => 'HND']);
        Country::create(['name' => 'Hong Kong', 'iso3166code' => 344, 'iso3166a1' => 'HK', 'iso3166a2' => 'HKG']);
        Country::create(['name' => 'Hungría', 'iso3166code' => 348, 'iso3166a1' => 'HU', 'iso3166a2' => 'HUN']);
        Country::create(['name' => 'India', 'iso3166code' => 356, 'iso3166a1' => 'IN', 'iso3166a2' => 'IND']);
        Country::create(['name' => 'Indonesia', 'iso3166code' => 360, 'iso3166a1' => 'ID', 'iso3166a2' => 'IDN']);
        Country::create(['name' => 'Irán', 'iso3166code' => 364, 'iso3166a1' => 'IR', 'iso3166a2' => 'IRN']);
        Country::create(['name' => 'Iraq', 'iso3166code' => 368, 'iso3166a1' => 'IQ', 'iso3166a2' => 'IRQ']);
        Country::create(['name' => 'Irlanda', 'iso3166code' => 372, 'iso3166a1' => 'IE', 'iso3166a2' => 'IRL']);
        Country::create(['name' => 'Islandia', 'iso3166code' => 352, 'iso3166a1' => 'IS', 'iso3166a2' => 'ISL']);
        Country::create(['name' => 'Israel', 'iso3166code' => 376, 'iso3166a1' => 'IL', 'iso3166a2' => 'ISR']);
        Country::create(['name' => 'Italia', 'iso3166code' => 380, 'iso3166a1' => 'IT', 'iso3166a2' => 'ITA']);
        Country::create(['name' => 'Jamaica', 'iso3166code' => 388, 'iso3166a1' => 'JM', 'iso3166a2' => 'JAM']);
        Country::create(['name' => 'Japón', 'iso3166code' => 392, 'iso3166a1' => 'JP', 'iso3166a2' => 'JPN']);
        Country::create(['name' => 'Jordania', 'iso3166code' => 400, 'iso3166a1' => 'JO', 'iso3166a2' => 'JOR']);
        Country::create(['name' => 'Kazajstán', 'iso3166code' => 398, 'iso3166a1' => 'KZ', 'iso3166a2' => 'KAZ']);
        Country::create(['name' => 'Kenia', 'iso3166code' => 404, 'iso3166a1' => 'KE', 'iso3166a2' => 'KEN']);
        Country::create(['name' => 'Kirguistán', 'iso3166code' => 417, 'iso3166a1' => 'KG', 'iso3166a2' => 'KGZ']);
        Country::create(['name' => 'Kiribati', 'iso3166code' => 296, 'iso3166a1' => 'KI', 'iso3166a2' => 'KIR']);
        Country::create(['name' => 'Kuwait', 'iso3166code' => 414, 'iso3166a1' => 'KW', 'iso3166a2' => 'KWT']);
        Country::create(['name' => 'Laos', 'iso3166code' => 418, 'iso3166a1' => 'LA', 'iso3166a2' => 'LAO']);
        Country::create(['name' => 'Lesotho', 'iso3166code' => 426, 'iso3166a1' => 'LS', 'iso3166a2' => 'LSO']);
        Country::create(['name' => 'Letonia', 'iso3166code' => 428, 'iso3166a1' => 'LV', 'iso3166a2' => 'LVA']);
        Country::create(['name' => 'Líbano', 'iso3166code' => 422, 'iso3166a1' => 'LB', 'iso3166a2' => 'LBN']);
        Country::create(['name' => 'Liberia', 'iso3166code' => 430, 'iso3166a1' => 'LR', 'iso3166a2' => 'LBR']);
        Country::create(['name' => 'Libia', 'iso3166code' => 434, 'iso3166a1' => 'LY', 'iso3166a2' => 'LBY']);
        Country::create(['name' => 'Liechtenstein', 'iso3166code' => 438, 'iso3166a1' => 'LI', 'iso3166a2' => 'LIE']);
        Country::create(['name' => 'Lituania', 'iso3166code' => 440, 'iso3166a1' => 'LT', 'iso3166a2' => 'LTU']);
        Country::create(['name' => 'Luxemburgo', 'iso3166code' => 442, 'iso3166a1' => 'LU', 'iso3166a2' => 'LUX']);
        Country::create(['name' => 'Macao', 'iso3166code' => 446, 'iso3166a1' => 'MO', 'iso3166a2' => 'MAC']);
        Country::create(['name' => 'ARY Macedonia', 'iso3166code' => 807, 'iso3166a1' => 'MK', 'iso3166a2' => 'MKD']);
        Country::create(['name' => 'Madagascar', 'iso3166code' => 450, 'iso3166a1' => 'MG', 'iso3166a2' => 'MDG']);
        Country::create(['name' => 'Malasia', 'iso3166code' => 458, 'iso3166a1' => 'MY', 'iso3166a2' => 'MYS']);
        Country::create(['name' => 'Malawi', 'iso3166code' => 454, 'iso3166a1' => 'MW', 'iso3166a2' => 'MWI']);
        Country::create(['name' => 'Maldivas', 'iso3166code' => 462, 'iso3166a1' => 'MV', 'iso3166a2' => 'MDV']);
        Country::create(['name' => 'Malí', 'iso3166code' => 466, 'iso3166a1' => 'ML', 'iso3166a2' => 'MLI']);
        Country::create(['name' => 'Malta', 'iso3166code' => 470, 'iso3166a1' => 'MT', 'iso3166a2' => 'MLT']);
        Country::create(['name' => 'Islas Malvinas', 'iso3166code' => 238, 'iso3166a1' => 'FK', 'iso3166a2' => 'FLK']);
        Country::create(['name' => 'Islas Marianas del Norte', 'iso3166code' => 580, 'iso3166a1' => 'MP', 'iso3166a2' => 'MNP']);
        Country::create(['name' => 'Marruecos', 'iso3166code' => 504, 'iso3166a1' => 'MA', 'iso3166a2' => 'MAR']);
        Country::create(['name' => 'Islas Marshall', 'iso3166code' => 584, 'iso3166a1' => 'MH', 'iso3166a2' => 'MHL']);
        Country::create(['name' => 'Martinica', 'iso3166code' => 474, 'iso3166a1' => 'MQ', 'iso3166a2' => 'MTQ']);
        Country::create(['name' => 'Mauricio', 'iso3166code' => 480, 'iso3166a1' => 'MU', 'iso3166a2' => 'MUS']);
        Country::create(['name' => 'Mauritania', 'iso3166code' => 478, 'iso3166a1' => 'MR', 'iso3166a2' => 'MRT']);
        Country::create(['name' => 'Mayotte', 'iso3166code' => 175, 'iso3166a1' => 'YT', 'iso3166a2' => 'MYT']);
        Country::create(['name' => 'México', 'iso3166code' => 484, 'iso3166a1' => 'MX', 'iso3166a2' => 'MEX']);
        Country::create(['name' => 'Micronesia', 'iso3166code' => 583, 'iso3166a1' => 'FM', 'iso3166a2' => 'FSM']);
        Country::create(['name' => 'Moldavia', 'iso3166code' => 498, 'iso3166a1' => 'MD', 'iso3166a2' => 'MDA']);
        Country::create(['name' => 'Mónaco', 'iso3166code' => 492, 'iso3166a1' => 'MC', 'iso3166a2' => 'MCO']);
        Country::create(['name' => 'Mongolia', 'iso3166code' => 496, 'iso3166a1' => 'MN', 'iso3166a2' => 'MNG']);
        Country::create(['name' => 'Montserrat', 'iso3166code' => 500, 'iso3166a1' => 'MS', 'iso3166a2' => 'MSR']);
        Country::create(['name' => 'Mozambique', 'iso3166code' => 508, 'iso3166a1' => 'MZ', 'iso3166a2' => 'MOZ']);
        Country::create(['name' => 'Myanmar', 'iso3166code' => 104, 'iso3166a1' => 'MM', 'iso3166a2' => 'MMR']);
        Country::create(['name' => 'Namibia', 'iso3166code' => 516, 'iso3166a1' => 'NA', 'iso3166a2' => 'NAM']);
        Country::create(['name' => 'Nauru', 'iso3166code' => 520, 'iso3166a1' => 'NR', 'iso3166a2' => 'NRU']);
        Country::create(['name' => 'Nepal', 'iso3166code' => 524, 'iso3166a1' => 'NP', 'iso3166a2' => 'NPL']);
        Country::create(['name' => 'Nicaragua', 'iso3166code' => 558, 'iso3166a1' => 'NI', 'iso3166a2' => 'NIC']);
        Country::create(['name' => 'Níger', 'iso3166code' => 562, 'iso3166a1' => 'NE', 'iso3166a2' => 'NER']);
        Country::create(['name' => 'Nigeria', 'iso3166code' => 566, 'iso3166a1' => 'NG', 'iso3166a2' => 'NGA']);
        Country::create(['name' => 'Niue', 'iso3166code' => 570, 'iso3166a1' => 'NU', 'iso3166a2' => 'NIU']);
        Country::create(['name' => 'Isla Norfolk', 'iso3166code' => 574, 'iso3166a1' => 'NF', 'iso3166a2' => 'NFK']);
        Country::create(['name' => 'Noruega', 'iso3166code' => 578, 'iso3166a1' => 'NO', 'iso3166a2' => 'NOR']);
        Country::create(['name' => 'Nueva Caledonia', 'iso3166code' => 540, 'iso3166a1' => 'NC', 'iso3166a2' => 'NCL']);
        Country::create(['name' => 'Nueva Zelanda', 'iso3166code' => 554, 'iso3166a1' => 'NZ', 'iso3166a2' => 'NZL']);
        Country::create(['name' => 'Omán', 'iso3166code' => 512, 'iso3166a1' => 'OM', 'iso3166a2' => 'OMN']);
        Country::create(['name' => 'Países Bajos', 'iso3166code' => 528, 'iso3166a1' => 'NL', 'iso3166a2' => 'NLD']);
        Country::create(['name' => 'Pakistán', 'iso3166code' => 586, 'iso3166a1' => 'PK', 'iso3166a2' => 'PAK']);
        Country::create(['name' => 'Palau', 'iso3166code' => 585, 'iso3166a1' => 'PW', 'iso3166a2' => 'PLW']);
        Country::create(['name' => 'Palestina', 'iso3166code' => 275, 'iso3166a1' => 'PS', 'iso3166a2' => 'PSE']);
        Country::create(['name' => 'Panamá', 'iso3166code' => 591, 'iso3166a1' => 'PA', 'iso3166a2' => 'PAN']);
        Country::create(['name' => 'Papúa Nueva Guinea', 'iso3166code' => 598, 'iso3166a1' => 'PG', 'iso3166a2' => 'PNG']);
        Country::create(['name' => 'Paraguay', 'iso3166code' => 600, 'iso3166a1' => 'PY', 'iso3166a2' => 'PRY']);
        Country::create(['name' => 'Perú', 'iso3166code' => 604, 'iso3166a1' => 'PE', 'iso3166a2' => 'PER']);
        Country::create(['name' => 'Islas Pitcairn', 'iso3166code' => 612, 'iso3166a1' => 'PN', 'iso3166a2' => 'PCN']);
        Country::create(['name' => 'Polinesia Francesa', 'iso3166code' => 258, 'iso3166a1' => 'PF', 'iso3166a2' => 'PYF']);
        Country::create(['name' => 'Polonia', 'iso3166code' => 616, 'iso3166a1' => 'PL', 'iso3166a2' => 'POL']);
        Country::create(['name' => 'Portugal', 'iso3166code' => 620, 'iso3166a1' => 'PT', 'iso3166a2' => 'PRT']);
        Country::create(['name' => 'Puerto Rico', 'iso3166code' => 630, 'iso3166a1' => 'PR', 'iso3166a2' => 'PRI']);
        Country::create(['name' => 'Qatar', 'iso3166code' => 634, 'iso3166a1' => 'QA', 'iso3166a2' => 'QAT']);
        Country::create(['name' => 'Reino Unido', 'iso3166code' => 826, 'iso3166a1' => 'GB', 'iso3166a2' => 'GBR']);
        Country::create(['name' => 'Reunión', 'iso3166code' => 638, 'iso3166a1' => 'RE', 'iso3166a2' => 'REU']);
        Country::create(['name' => 'Ruanda', 'iso3166code' => 646, 'iso3166a1' => 'RW', 'iso3166a2' => 'RWA']);
        Country::create(['name' => 'Rumania', 'iso3166code' => 642, 'iso3166a1' => 'RO', 'iso3166a2' => 'ROU']);
        Country::create(['name' => 'Rusia', 'iso3166code' => 643, 'iso3166a1' => 'RU', 'iso3166a2' => 'RUS']);
        Country::create(['name' => 'Sahara Occidental', 'iso3166code' => 732, 'iso3166a1' => 'EH', 'iso3166a2' => 'ESH']);
        Country::create(['name' => 'Islas Salomón', 'iso3166code' => 90, 'iso3166a1' => 'SB', 'iso3166a2' => 'SLB']);
        Country::create(['name' => 'Samoa', 'iso3166code' => 882, 'iso3166a1' => 'WS', 'iso3166a2' => 'WSM']);
        Country::create(['name' => 'Samoa Americana', 'iso3166code' => 16, 'iso3166a1' => 'AS', 'iso3166a2' => 'ASM']);
        Country::create(['name' => 'San Cristóbal y Nevis', 'iso3166code' => 659, 'iso3166a1' => 'KN', 'iso3166a2' => 'KNA']);
        Country::create(['name' => 'San Marino', 'iso3166code' => 674, 'iso3166a1' => 'SM', 'iso3166a2' => 'SMR']);
        Country::create(['name' => 'San Pedro y Miquelón', 'iso3166code' => 666, 'iso3166a1' => 'PM', 'iso3166a2' => 'SPM']);
        Country::create(['name' => 'San Vicente y las Granadinas', 'iso3166code' => 670, 'iso3166a1' => 'VC', 'iso3166a2' => 'VCT']);
        Country::create(['name' => 'Santa Helena', 'iso3166code' => 654, 'iso3166a1' => 'SH', 'iso3166a2' => 'SHN']);
        Country::create(['name' => 'Santa Lucía', 'iso3166code' => 662, 'iso3166a1' => 'LC', 'iso3166a2' => 'LCA']);
        Country::create(['name' => 'Santo Tomé y Príncipe', 'iso3166code' => 678, 'iso3166a1' => 'ST', 'iso3166a2' => 'STP']);
        Country::create(['name' => 'Senegal', 'iso3166code' => 686, 'iso3166a1' => 'SN', 'iso3166a2' => 'SEN']);
        Country::create(['name' => 'Serbia y Montenegro', 'iso3166code' => 891, 'iso3166a1' => 'CS', 'iso3166a2' => 'SCG']);
        Country::create(['name' => 'Seychelles', 'iso3166code' => 690, 'iso3166a1' => 'SC', 'iso3166a2' => 'SYC']);
        Country::create(['name' => 'Sierra Leona', 'iso3166code' => 694, 'iso3166a1' => 'SL', 'iso3166a2' => 'SLE']);
        Country::create(['name' => 'Singapur', 'iso3166code' => 702, 'iso3166a1' => 'SG', 'iso3166a2' => 'SGP']);
        Country::create(['name' => 'Siria', 'iso3166code' => 760, 'iso3166a1' => 'SY', 'iso3166a2' => 'SYR']);
        Country::create(['name' => 'Somalia', 'iso3166code' => 706, 'iso3166a1' => 'SO', 'iso3166a2' => 'SOM']);
        Country::create(['name' => 'Sri Lanka', 'iso3166code' => 144, 'iso3166a1' => 'LK', 'iso3166a2' => 'LKA']);
        Country::create(['name' => 'Suazilandia', 'iso3166code' => 748, 'iso3166a1' => 'SZ', 'iso3166a2' => 'SWZ']);
        Country::create(['name' => 'Sudáfrica', 'iso3166code' => 710, 'iso3166a1' => 'ZA', 'iso3166a2' => 'ZAF']);
        Country::create(['name' => 'Sudán', 'iso3166code' => 736, 'iso3166a1' => 'SD', 'iso3166a2' => 'SDN']);
        Country::create(['name' => 'Suecia', 'iso3166code' => 752, 'iso3166a1' => 'SE', 'iso3166a2' => 'SWE']);
        Country::create(['name' => 'Suiza', 'iso3166code' => 756, 'iso3166a1' => 'CH', 'iso3166a2' => 'CHE']);
        Country::create(['name' => 'Surinam', 'iso3166code' => 740, 'iso3166a1' => 'SR', 'iso3166a2' => 'SUR']);
        Country::create(['name' => 'Svalbard y Jan Mayen', 'iso3166code' => 744, 'iso3166a1' => 'SJ', 'iso3166a2' => 'SJM']);
        Country::create(['name' => 'Tailandia', 'iso3166code' => 764, 'iso3166a1' => 'TH', 'iso3166a2' => 'THA']);
        Country::create(['name' => 'Taiwán', 'iso3166code' => 158, 'iso3166a1' => 'TW', 'iso3166a2' => 'TWN']);
        Country::create(['name' => 'Tanzania', 'iso3166code' => 834, 'iso3166a1' => 'TZ', 'iso3166a2' => 'TZA']);
        Country::create(['name' => 'Tayikistán', 'iso3166code' => 762, 'iso3166a1' => 'TJ', 'iso3166a2' => 'TJK']);
        Country::create(['name' => 'Territorio Británico del Océano Índico', 'iso3166code' => 86, 'iso3166a1' => 'IO', 'iso3166a2' => 'IOT']);
        Country::create(['name' => 'Territorios Australes Franceses', 'iso3166code' => 260, 'iso3166a1' => 'TF', 'iso3166a2' => 'ATF']);
        Country::create(['name' => 'Timor Oriental', 'iso3166code' => 626, 'iso3166a1' => 'TL', 'iso3166a2' => 'TLS']);
        Country::create(['name' => 'Togo', 'iso3166code' => 768, 'iso3166a1' => 'TG', 'iso3166a2' => 'TGO']);
        Country::create(['name' => 'Tokelau', 'iso3166code' => 772, 'iso3166a1' => 'TK', 'iso3166a2' => 'TKL']);
        Country::create(['name' => 'Tonga', 'iso3166code' => 776, 'iso3166a1' => 'TO', 'iso3166a2' => 'TON']);
        Country::create(['name' => 'Trinidad y Tobago', 'iso3166code' => 780, 'iso3166a1' => 'TT', 'iso3166a2' => 'TTO']);
        Country::create(['name' => 'Túnez', 'iso3166code' => 788, 'iso3166a1' => 'TN', 'iso3166a2' => 'TUN']);
        Country::create(['name' => 'Islas Turcas y Caicos', 'iso3166code' => 796, 'iso3166a1' => 'TC', 'iso3166a2' => 'TCA']);
        Country::create(['name' => 'Turkmenistán', 'iso3166code' => 795, 'iso3166a1' => 'TM', 'iso3166a2' => 'TKM']);
        Country::create(['name' => 'Turquía', 'iso3166code' => 792, 'iso3166a1' => 'TR', 'iso3166a2' => 'TUR']);
        Country::create(['name' => 'Tuvalu', 'iso3166code' => 798, 'iso3166a1' => 'TV', 'iso3166a2' => 'TUV']);
        Country::create(['name' => 'Ucrania', 'iso3166code' => 804, 'iso3166a1' => 'UA', 'iso3166a2' => 'UKR']);
        Country::create(['name' => 'Uganda', 'iso3166code' => 800, 'iso3166a1' => 'UG', 'iso3166a2' => 'UGA']);
        Country::create(['name' => 'Uruguay', 'iso3166code' => 858, 'iso3166a1' => 'UY', 'iso3166a2' => 'URY']);
        Country::create(['name' => 'Uzbekistán', 'iso3166code' => 860, 'iso3166a1' => 'UZ', 'iso3166a2' => 'UZB']);
        Country::create(['name' => 'Vanuatu', 'iso3166code' => 548, 'iso3166a1' => 'VU', 'iso3166a2' => 'VUT']);
        Country::create(['name' => 'Venezuela', 'iso3166code' => 862, 'iso3166a1' => 'VE', 'iso3166a2' => 'VEN']);
        Country::create(['name' => 'Vietnam', 'iso3166code' => 704, 'iso3166a1' => 'VN', 'iso3166a2' => 'VNM']);
        Country::create(['name' => 'Islas Vírgenes Británicas', 'iso3166code' => 92, 'iso3166a1' => 'VG', 'iso3166a2' => 'VGB']);
        Country::create(['name' => 'Islas Vírgenes de los Estados Unidos', 'iso3166code' => 850, 'iso3166a1' => 'VI', 'iso3166a2' => 'VIR']);
        Country::create(['name' => 'Wallis y Futuna', 'iso3166code' => 876, 'iso3166a1' => 'WF', 'iso3166a2' => 'WLF']);
        Country::create(['name' => 'Yemen', 'iso3166code' => 887, 'iso3166a1' => 'YE', 'iso3166a2' => 'YEM']);
        Country::create(['name' => 'Yibuti', 'iso3166code' => 262, 'iso3166a1' => 'DJ', 'iso3166a2' => 'DJI']);
        Country::create(['name' => 'Zambia', 'iso3166code' => 894, 'iso3166a1' => 'ZM', 'iso3166a2' => 'ZMB']);
        Country::create(['name' => 'Zimbabue', 'iso3166code' => 716, 'iso3166a1' => 'ZW', 'iso3166a2' => 'ZWE']);
    }
}
