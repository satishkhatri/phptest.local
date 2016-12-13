    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Example 3-1</title>
        <style type="text/css">
           *{


           }
            body{
                width: 650px;
                background: #000000;
                margin: 0 auto;
                color: #FFFFFF;
                font:12px sans-serif;

            }
           .planet{
                border: solid #FFFFFF;
                margin: 10px 0;
                padding: 20px 20px 20px 200px;
                background-position: 20px 20px;
                background-repeat: no-repeat;
           }
            h1{
              font-size: 24px;
            }
            h2{
                font-size: 18px;;
            }
            table{
                margin: 0 auto;
                border-spacing: 0px;
            }
            #jupiter{
             background-image: url("images/jupiter.jpg");
            }
            #neptune{
                background-image: url("images/neptune.jpg");
            }
            #saturn{
                background-image:url("images/saturn.jpg");
            }
            #uranus{
                background-image:url("images/uranus.jpg");
            }
            .planet table th,td{
                padding: 0 10px 0 0;
                text-align: left;
            }
            caption{
                 margin-bottom: 10px;
                font-size: 14px;
                font-weight: bold;
                text-align: left;

            }

        </style>
    </head>
    <body>

    <h1>The gas giants</h1>

    <div class="planet" id="jupiter">

        <h2>Jupiter</h2>

        <p>Jupiter is the fifth planet from the Sun and the largest planet within the
            Solar System. The Romans named the planet after the god Jupiter. It is a gas
            giant with a mass two and a half times the mass of all the other planets in
            our Solar System combined.</p>
        <table>
            <caption>Jupiter Facts</caption>
            <tbody>
            <tr>
                <th>Distance from the Sun</th>
                <td>78,412,020 km</td>
            </tr>
            <tr>
                <th>Equatorial Radius</th>
                <td>71,492 km</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>1,425,500,000,000,000 km<sup>3</sup></td>
            </tr>
            <tr>
                <th>Mass</th>
                <td>1,898,700,000,000,000,000,000,000,000 kg</td>
            </tr>
            </tbody>
        </table>
        <a href=”http://solarsystem.jpl.nasa.gov/planets/profile.cfm?Object=Jupiter”>
            More Jupiter facts</a>
    </div>
    <div class="planet" id="saturn">
        <h2>Saturn</h2>

        <p>Saturn is the sixth planet from the Sun and the second largest planet in the
            Solar System, after Jupiter. Saturn is named after the Roman god Saturn,
            equated to the Greek Cronus (the Titan father of Zeus), the Babylonian
            Ninurta, and the Hindu Shani.</p>
        <table>
            <caption>Saturn Facts</caption>
            <tbody>
            <tr>
                <th>Distance from the Sun</th>
                <td>1,426,725,400 km</td>
            </tr>
            <tr>
                <th>Equatorial Radius</th>
                <td>60,268 km</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>827,130,000,000,000 km<sup>3</sup></td>
            </tr>
            <tr>
                <th>Mass</th>
                <td>568,510,000,000,000,000,000,000,000 kg</td>
            </tr>
            </tbody>
        </table>
        <a href=”http://solarsystem.jpl.nasa.gov/planets/profile.cfm?Object=Saturn”>
            More Saturn facts</a>
    </div>
    <div class="planet" id="uranus">
        <h2>Uranus</h2>

        <p>Uranus is the seventh planet from the Sun, and the third-largest and fourth
            most massive planet in the Solar System. It is named after the ancient Greek
            deity of the sky Uranus the father of Cronus and grandfather of Zeus.</p>
        <table>
            <caption>Uranus Facts</caption>
            <tbody>
            <tr>
                <th>Distance from the Sun</th>
                <td>78,412,020 km</td>
            </tr>
            <tr>
                <th>Equatorial Radius</th>
                <td>25,559 km</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>69,142,000,000,000 km<sup>3</sup></td>
            </tr>
            <tr>
                <th>Mass</th>
                <td>86,849,000,000,000,000,000,000,000 kg</td>
            </tr>
            </tbody>
        </table>
        <a href=”http://solarsystem.jpl.nasa.gov/planets/profile.cfm?Object=Uranus”>
            More Uranus facts</a>
    </div>
    <div class="planet" id="neptune">
        <h2>Neptune</h2>

        <p>Neptune is the eighth and farthest planet from the Sun in our Solar System.
            Named for the Roman god of the sea, it is the fourth-largest planet by
            diameter and the third-largest by mass.</p>
        <table>
            <caption>Neptune Facts</caption>
            <tbody>
            <tr>
                <th>Distance from the Sun</th>
                <td>4,498,252,900 km</td>
            </tr>
            <tr>
                <th>Equatorial Radius</th>
                <td>24,764 km</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>62,526,000,000,000 km<sup>3</sup></td>
            </tr>
            <tr>
                <th>Mass</th>
                <td>102,440,000,000,000,000,000,000,000 kg</td>
            </tr>
            </tbody>
        </table>
        <a href="http://solarsystem.jpl.nasa.gov/planets/profile.cfm?Object=Neptune">
            More Neptune facts</a>
    </div>
    </body>
    </html>

    <?php
    /**
     * Created by PhpStorm.
     * User: skhatri
     * Date: 07/08/2015
     * Time: 10:02

     */