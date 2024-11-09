<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nebenkostenabrechnung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #FFC107; /* Yellow color */
        }
        .company-info, .client-info {
            width: 48%;
            display: inline-block;
            vertical-align: top;
            padding: 10px;
        }
        .company-info {
            float: left;
        }
        .client-info {
            float: end;
        }
        .summary-table, .details-table, .distribution-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .summary-table th, .summary-table td,
        .details-table th, .details-table td,
        .distribution-table th, .distribution-table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 12px;

        }
        .summary-table th, .details-table th {
            background-color: #f4f4f4;
            font-weight: bold;
            font-size: 12px;

        }
        .summary-table {
            margin-top: 10px;
            width: 60%;
            margin-left: auto;
        }
        .distribution-table th {
            text-align: center;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
            color: #888;
        }

        /* Page break styling */
        .page-break {
            page-break-before: always;
        }

    </style>
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h1>Nebenkostenabrechnung 11111</h1>
        <p>Abrechnungszeitraum vom 01.01.2024 bis 31.12.2024</p>
    </div>

    <!-- Tenant Information -->
    <div class="company-info">
        <strong>Mieter</strong><br>
        Dunja Kramaric<br>
        Heidkrugsweg 31<br>
        31234 Edemissen<br>
        Phone: (123) 456-7890<br>
        Email: tenant@example.com
    </div>

    <!-- Summary Table -->
    <table class="summary-table">
        <tr>
            <td>Ihre Vorauszahlung im Abrechnungszeitraum:</td>
            <td>2.000,00 EUR</td>
        </tr>
        <tr>
            <td>Für ihre Wohnung errechneter Kostenanteil:</td>
            <td>– 1.808,52 EUR</td>
        </tr>
        <tr>
            <td>Ihr Guthaben:</td>
            <td>191,48 EUR</td>
        </tr>
    </table>

    <h2>Kostenaufstellung</h2>

    <!-- Detailed Cost Breakdown Table -->
    <table class="details-table">
        <thead>
            <tr>
                <th>Beschreibung</th>
                <th>Datum</th>
                <th>Menge</th>
                <th>Kosten (EUR)</th>
                <th>Betrag (EUR)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Anfangsbestand</td>
                <td></td>
                <td>3.000 l</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>+ Rechnung</td>
                <td>15.02.2020</td>
                <td>3.000 l</td>
                <td>1.620,00</td>
                <td>1.620,00</td>
            </tr>
            <tr>
                <td>+ Rechnung</td>
                <td>15.06.2020</td>
                <td>2.700 l</td>
                <td>1.107,00</td>
                <td>1.107,00</td>
            </tr>
            <tr>
                <td>+ Rechnung</td>
                <td>15.12.2020</td>
                <td>2.800 l</td>
                <td>1.260,00</td>
                <td>1.260,00</td>
            </tr>
            <tr>
                <td>- Restbestand</td>
                <td></td>
                <td>3.000 l</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><strong>Summe Brennstoffkosten</strong></td>
                <td></td>
                <td>8.500 l</td>
                <td></td>
                <td><strong>5.050,00 EUR</strong></td>
            </tr>
            <tr>
                <td>Prüfung</td>
                <td>12.02.2020</td>
                <td></td>
                <td></td>
                <td>120,00</td>
            </tr>
            <tr>
                <td>Immissionsprüfung</td>
                <td>17.12.2020</td>
                <td></td>
                <td></td>
                <td>100,00</td>
            </tr>
            <tr>
                <td>Betriebskosten</td>
                <td>10.01.2020</td>
                <td></td>
                <td></td>
                <td>50,00</td>
            </tr>
            <tr>
                <td>Wartung</td>
                <td>18.01.2020</td>
                <td></td>
                <td></td>
                <td>130,00</td>
            </tr>
            <tr>
                <td><strong>Summe Weitere Kosten</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td><strong>400,00 EUR</strong></td>
            </tr>
        </tbody>
    </table>

    <!-- Page Break -->
    <div class="page-break"></div>

    <!-- Header Section -->

    <h2>Kostenverteilung</h2>

    <!-- Distribution Table -->
    <table class="distribution-table">
        <thead>
            <tr>
                <th>Beschreibung</th>
                <th>Betrag (EUR)</th>
                <th>Gesamteinheiten</th>
                <th>Kosten je Einheit (EUR)</th>
                <th>Ihre Einheiten</th>
                <th>Ihre Kosten (EUR)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gesamtkosten</td>
                <td>5.450,00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>davon für Warmwasser</td>
                <td>1.202,21</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30 % Grundkosten</td>
                <td>360,66</td>
                <td>400 m2 Wohnfläche</td>
                <td>0,90</td>
                <td>100</td>
                <td>90,17</td>
            </tr>
            <tr>
                <td>70 % Verbrauchskosten</td>
                <td>841,54</td>
                <td>150 m3 Warmwasser</td>
                <td>5,61</td>
                <td>64</td>
                <td>359,04</td>
            </tr>
            <tr>
                <td>davon für Heizung</td>
                <td>4.247,79</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30 % Grundkosten</td>
                <td>1.274,34</td>
                <td>400 m2 Wohnfläche</td>
                <td>3,19</td>
                <td>100</td>
                <td>318,58</td>
            </tr>
            <tr>
                <td>70 % Verbrauchskosten</td>
                <td>2.973,46</td>
                <td>500 Verbrauchseinheiten</td>
                <td>5,95</td>
                <td>175</td>
                <td>1.040,71</td>
            </tr>
            <tr>
                <td colspan="5">Ihr Rechnungsbetrag:</td>
                <td>1.808,52 EUR</td>
            </tr>
        </tbody>
    </table>

    <!-- Footer Section -->
    <div class="footer">
        Vielen Dank für Ihr Vertrauen!
    </div>
</div>

</body>
</html>
