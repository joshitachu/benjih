<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrackersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trackers')->insert([
            [
                'name' => 'Stealth Compact Tracker',
                'price' => 109.00,
                'subjects' => json_encode([
                    'Location determination', 
                    'Own power supply', 
                    'Quick to switch between objects', 
                    'Self-assembly', 
                    'Theft protection', 
                    'Widely applicable'
                ]),
                'description' => 'The Stealth Compact Tracker is designed with anti-theft in mind. In the unlikely event that your equipment is stolen, it is easy to trace! Thanks to the geofencing feature, you will receive a notification when your tracked object leaves a zone you specify. In case of emergency, you have the option to track your vehicle immediately and take further measures if necessary. By default, the tracker transmits its location once or twice every 24 hours. As a result, the Stealth is virtually impossible to detect with the help of GPS listeners or sweepers. In the event of theft, the frequency of the location determination can be set more often. The Stealth Compact Tracker works completely autonomously because it has its own GPS chip, antenna and energy source.',
                'additional_information' => 'Usable for: Agricultural machinery, Buses, Construction machinery, Motorbikes & scooters, Motorhomes, Objects, Passenger cars, Trailers, Trucks, Vans, Vessels',
                'dimensions' => '46.8 mm x 41.8 x 16.9 mm (L x W x H)',
                'weight' => 42.00,
                'battery' => 'Lithium manganese dioxide, 2400 mAh',
                'resistance' => 'IP 67 (dustproof & water immersion protected)',
                'voltage' => null,
                'power_consumption' => null,
            ],
            [
                'name' => 'Relay 4G Tracker',
                'price' => 75.00,
                'subjects' => json_encode([
                    'Geofencing', 
                    'Mileage registration', 
                    'Monitoring speeds', 
                    'Option (cigarette) smoke detector', 
                    'Quick to switch between objects', 
                    'Realtime track & trace', 
                    'Self-assembly', 
                    'Start blockade', 
                    'Widely applicable'
                ]),
                'description' => 'The Relay 4G Tracker is frequently used by fleet managers and lessors who want to monitor their fleet well but want to use their trackers flexibly and widely. A big advantage is also that the Relay Tracker itself can be built in, easily and quickly. The Relay Tracker has the same functionalities as our Wired Tracker! For example, the Relay 4G Tracker can determine the location of a vehicle or vessel down to the minute (in real time) and is therefore extremely suitable for route, trip and kilometre registration. The Relay 4G Tracker can also monitor, register and report exceedances of your vehicle or vessel. When your vehicle or vessel enters or leaves a demarcated area (geofencing), you will immediately receive a notification. What’s new is that the Relay 4G Tracker also has a built-in immobiliser; In the event of misuse, non-payment or theft, you can activate it. As an option, as with the Wired Tracker, you can order our unique (cigarette) smoke detector and connect it to the Relay 4G Tracker. This prevents odour nuisance and fire damage in the vehicle or vessel!',
                'additional_information' => 'Usable for: Agricultural machinery, Buses, Construction machinery, Motorbikes & scooters, Motorhomes, Objects, Passenger cars, Trailers, Trucks, Vans, Vessels',
                'dimensions' => '31 x 31 x 57 mm (L x W x H)',
                'weight' => 29.30,
                'battery' => '3.7V 80mAh Li-Polymer',
                'resistance' => 'IP41 (protection against pointed objects & vertical dripping water)',
                'voltage' => '10- 40 V DC',
                'power_consumption' => 'At 12V <8mA (standby) At 12V <28mA (active)',
            ],
            [
                'name' => 'Wired 4G Tracker',
                'price' => 109.00,
                'subjects' => json_encode([
                    'Driving behaviour monitoring',
                    'Geofencing',
                    'Mileage registration',
                    'Monitoring speeds',
                    'Option (cigarette) smoke detector',
                    'Professional assembly',
                    'Realtime track & trace',
                    'Start blockade',
                    'Widely applicable'
                ]),
                'description' => 'The Wired 4G Tracker can determine the location of a vehicle down to the minute (in real time) and is therefore extremely suitable for route, trip and mileage registration. This tracker also has G-sensors that register rough and fast driving behavior and report this to you. Driving behaviour has a major influence on so-called ecodriving! With ecodriving you apply a number of simple principles that reduce fuel consumption, increase safety (for personnel and / or equipment) and perhaps prevent failure of personnel and / or equipment. You should think of factors such as braking, acceleration and speeds, but also turning off the engine at stops. The difference between a sporty driving style and ecodriving can be as much as 35 percent. This allows you as a company to increase your return! When your vehicle or vessel leaves an area defined by you (geofencing), you will immediately receive a notification. In the event of misuse, non-payment or theft, you can activate the starting blockade. Do you want to optimally protect your company against missed payments or other contract violations? With the Wired 4G Tracker you get easy but very complete insight into the use of your equipment!',
                'additional_information' => 'Usable for: Agricultural machinery, Buses, Motorbikes & scooters, Motorhomes, Objects, Passenger cars, Trailers, Vans, Vessels',
                'dimensions' => '79 x 43 x 12 mm (L x W x H)',
                'weight' => 54.00,
                'battery' => '170 mAh Li-lon, 0.63 Wh',
                'resistance' => 'IP 54 (protection against dust & splash/splash water)',
                'voltage' => '10 – 30 V DC with surge protection & polarity protection',
                'power_consumption' => 'At 12V <8mA (standby) At 12V <28mA (active)',
            ],
            [
                'name' => 'Wired Connect 4G Tracker',
                'price' => 150.00,
                'subjects' => json_encode([
                    'Canbus vehicle information',
                    'Driving behaviour monitoring',
                    'Fuel consumption monitoring',
                    'Geofencing',
                    'Mileage on dashboard',
                    'Mileage registration',
                    'Monitoring speeds',
                    'Option (cigarette) smoke detector',
                    'Professional assembly',
                    'Realtime track & trace',
                    'Remote door control',
                    'Start blockade',
                    'Widely applicable'
                ]),
                'description' => 'The Wired Connect Tracker has the most functionalities of all our trackers and goes one step further than the Wired Tracker. Just like the Wired Tracker, the Wired Connect Tracker determines the location of a vehicle in real time, making it ideal for route, trip and mileage registration. It also has G-sensors that register rough driving behavior and report it to you. When your vehicle or vessel enters or leaves an area demarcated by you (geofencing), you will immediately receive a notification. In the event of misuse, non-payment or theft, you can activate the starting blockade. What’s unique about the Wired Connect Tracker is that it also provides you with the exact mileage and fuel/charge level of the vehicle! In addition, the Wired Connect Tracker has a locking and unlocking system d.w.z. dat allows you to remotely lock and unlock the vehicle’s doors. The Wired Connect Tracker is ideal for fleet managers and rental companies. Whether you rent out vehicles, vessels or machines, this tracker can be connected to all your equipment (with its own power supply of 9-30 volts). Just like the Wired Tracker, the Wired Connect Tracker is professionally installed by a fitter or garage. A nice side effect is that this makes the tracker difficult to detect and sabotage. As an option you can order our unique (cigarette) smoke detector. This is easy to connect to the Wired Connect Tracker. This prevents odour nuisance and fire damage in your vehicle or vessel!',
                'additional_information' => 'Usable for: Agricultural machinery, Buses, Construction machinery, Motorbikes & scooters, Motorhomes, Objects, Passenger cars, Trailers, Trucks, Vans, Vessels',
                'dimensions' => '65 x 56.6 x 20.6 mm (L x W x H)',
                'weight' => 61.90,
                'battery' => '3.7V 170mAh Li-lon',
                'resistance' => 'IP 41 (protection against pointed objects and vertically dripping water)',
                'voltage' => '10-30 V DC',
                'power_consumption' => 'At 12V < 16 mA (Standby) & At 12V < 2A Max. (Active)',
            ],
            [
                'name' => 'OBD Connect 4G Tracker',
                'price' => 125.00,
                'subjects' => json_encode([
                    'Canbus vehicle information',
                    'Driving behaviour monitoring',
                    'Fuel consumption monitoring',
                    'Geofencing',
                    'Mileage on dashboard',
                    'Mileage registration',
                    'Monitoring speeds',
                    'Quick to switch between objects',
                    'Realtime track & trace',
                    'Self-assembly'
                ]),
                'description' => 'The OBD Connect 4G tracker is the successor to the OBD Connect 2G tracker and, like it, has been specially developed for flexible use in vehicles. This means that the OBD Connect 4G is easy to change vehicles. Passenger cars, light commercial vehicles and motorhomes have an OBD port to which this tracker is connected. The OBD Connect 4G is particularly suitable for companies that want to have more control over their fleet in an easy way, where preventing theft or theft is not the main goal. The OBD Connect 4G is mainly used by car rental companies that want to gain insight into both the vehicle data and the driving behaviour of the driver of the vehicle. Car dealers use the OBD Connect to monitor their new cars during test drives (occasional vehicle monitoring). OBD stands for On-Board Diagnostics. The OBD Connect 4G Tracker is connected to the OBD port, which provides the power supply. By means of the optional Y-cable, the original OBD remains accessible to the workshop, but the tracker is invisibly built-in. The connection takes little time and does not require any technical knowledge. After connection, it is immediately functional; PLUG & PLAY! The OBD Connect 4G collects data (route, trip, mileage registration & location tracking) that is important for every fleet manager. This tracker has G-sensors that register all kinds of data about driving behaviour such as braking, acceleration and speeds. In the portal you can define a specific area for your vehicles (geofencing). In the event of rough driving or leaving or entering the geofence, you will receive a notification. This latest version of the OBD tracker also offers you even more insights into vehicle data such as the real mileage, fuel level, fuel consumption and diagnostic problems (error) codes!',
                'additional_information' => 'Usable for: Motorhomes, Passenger cars, Vans',
                'dimensions' => '52.6 x 29.1 x 26 mm (L x W x H)',
                'weight' => 63.00,
                'battery' => null,
                'resistance' => 'IP41 (protection against pointed objects & vertical dripping water)',
                'voltage' => '10- 30 V DC with surge protection',
                'power_consumption' => 'At 12V <7mA (standby) & At 12V< 28mA (active)',
            ],
            [
                'name' => 'Trailer 4G Tracker',
                'price' => 125.00,
                'subjects' => json_encode([
                    'Driving behaviour monitoring',
                    'Geofencing',
                    'Mileage registration',
                    'Monitoring speeds',
                    'Monitoring transport',
                    'Professional assembly',
                    'Realtime track & trace'
                ]),
                'description' => 'An often heard problem is that transport and logistics companies do not always have a good overview of their fleet because the planning is not always efficient and sometimes last minute deviations from a schedule, so that equipment (and cargo) is sometimes lost sight of. In addition, trailers and semi-trailers are increasingly stolen from parking lots, the trailer is often still found but is already stripped of the load. The Trailer Tracker has been specially developed for transport companies with trailers, semi-trailers, trailers and even rigids and offers you the solution; You always have insight into whether – the right equipment – at the right time – is at the right location!',
                'additional_information' => 'Usable for: Trailers',
                'dimensions' => '140 x 40 x 11 (L x W x H)',
                'weight' => 46.00,
                'battery' => '170 MAh Li-lon, 0.63 Wh',
                'resistance' => 'IP 67 (dustproof & water immersion protected)',
                'voltage' => '10 - 30 V DC with surge protection and polarity protection',
                'power_consumption' => 'At 12V <8mA (standby) At 12V <28mA (active)',
            ],
        ]);
    }
}
