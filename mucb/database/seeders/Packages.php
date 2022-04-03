<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Packages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert('INSERT INTO `packages` (`package_id`, `package_name`, `package_price`, `package_img`, `package_desc`, `created_at`, `updated_at`) VALUES
        (1, 'BASIC PRE-PURCHASE INSPECTION', 165.00, '', 'Basic Pre Purchase Inspection', NULL, NULL),
        (2, 'PRO INSPECTION SERVICE', 195.00, '', 'Vehicles up to 25 years old. Interior, Exterior [paint test where applicable], Mechanical, Tires and Wheels, Live Scan Testing, and a Road Test. This includes all Compact, Sedans, luxury, SUV’s, Hybrids, Exotics, Performance, and most Trucks up to a 3500 ', NULL, NULL),
        (3, 'PRO INSPECTION SERVICE PLUS', 215.00, '', 'Vehicles up to 25 years old. Interior, Exterior [paint test where applicable], Mechanical, Tires and Wheels, Live Scan Testing, and a Road Test. This includes all Compact, Sedans, luxury, SUV’s, Hybrids, Exotics, Performance, and most Trucks up to a 3500 ', NULL, NULL),
        (4, 'CLASSIC & VINTAGE INSPECTION', 295.00, '', 'Vehicles up to 25 years old. Interior, Exterior [paint test where applicable], Mechanical, Tires and Wheels, Live Scan Testing, and a Road Test. This includes all Compact, Sedans, luxury, SUV’s, Hybrids, Exotics, Performance, and most Trucks up to a 3500 ', NULL, NULL),
        (5, 'COMMERCIAL & HEAVY DUTY', 295.00, '', 'Vehicles up to 25 years old. Interior, Exterior [paint test where applicable], Mechanical, Tires and Wheels, Live Scan Testing, and a Road Test. This includes all Compact, Sedans, luxury, SUV’s, Hybrids, Exotics, Performance, and most Trucks up to a 3500 ', NULL, NULL),
        (6, 'RE-INSPECTION', 79.00, '', 'Vehicles up to 25 years old. Interior, Exterior [paint test where applicable], Mechanical, Tires and Wheels, Live Scan Testing, and a Road Test. This includes all Compact, Sedans, luxury, SUV’s, Hybrids, Exotics, Performance, and most Trucks up to a 3500 ', NULL, NULL),
        (7, 'SPECIALTY SERVICES', 99.00, '', 'Vehicles up to 25 years old. Interior, Exterior [paint test where applicable], Mechanical, Tires and Wheels, Live Scan Testing, and a Road Test. This includes all Compact, Sedans, luxury, SUV’s, Hybrids, Exotics, Performance, and most Trucks up to a 3500 ', NULL, NULL);');
    }
}
