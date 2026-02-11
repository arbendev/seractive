<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\CaseStudy::create([
            'title' => 'Automating Quality Control with Computer Vision',
            'slug' => 'automating-quality-control-computer-vision',
            'client_name' => 'AutoParts Inc.',
            'industry' => 'Automotive Manufacturing',
            'challenge' => "AutoParts Inc. faced a 15% defect rate in their small component assembly line due to manual inspection limitations. Human inspectors were missing subtle defects due to fatigue, leading to costly returns and reputation damage. The existing process was slow, creating a bottleneck that limited overall production capacity. They needed a solution that was faster, more accurate, and could operate 24/7 without degradation in performance.",
            'solution' => "We implemented a custom computer vision system powered by a convolutional neural network (CNN) trained on 50,000 images of both defective and perfect components. The system was integrated directly into the assembly line using high-speed industrial cameras and edge computing devices for real-time inference. \n\nKey components included:\n- High-resolution imaging station with controlled lighting.\n- Edge AI processing unit for <50ms decision making.\n- Automated rejection mechanism for defective parts.\n- Real-time dashboard for production quality monitoring.",
            'results' => "The implementation transformed their quality control process. Within the first month, the defect detection rate improved to 99.8%, effectively eliminating defective shipments. The inspection speed increased by 400%, removing the production bottleneck. \n\nThe system now operates continuously across three shifts, requiring only minimal human supervision for calibration and maintenance. This has resulted in significant cost savings and improved customer satisfaction.",
            'key_metrics' => [
                'Defect Rate' => '0.2%',
                'Speed Increase' => '400%',
                'ROI' => '12 Months',
                'Uptime' => '99.9%'
            ],
            'featured_image' => 'https://images.unsplash.com/photo-1565514020176-dbf227747046?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'published_at' => now(),
        ]);

        \App\Models\CaseStudy::create([
            'title' => 'Streamlining Patient Data Workflow',
            'slug' => 'streamlining-patient-data-workflow',
            'client_name' => 'City General Hospital',
            'industry' => 'Healthcare',
            'challenge' => "City General Hospital was struggling with fragmented patient data across multiple legacy systems. Medical staff spent approximately 30% of their time on data entry and retrieval, reducing the time available for patient care. Data inconsistency errors were frequent, posing risks to patient safety and compliance.",
            'solution' => "We developed a centralized data interoperability layer using HL7 FHIR standards to connect their disparate EMR systems. We built a unified clinician dashboard that pulls data in real-time from all sources, providing a single view of the patient. We also implemented robotic process automation (RPA) to handle routine data entry tasks.",
            'results' => "Administrative time for medical staff was reduced by 60%, allowing doctors and nurses to spend more time with patients. Data entry errors dropped by 95% due to automation. The hospital compliance audit score improved from 82% to 98% within six months.",
            'key_metrics' => [
                'Admin Time' => '-60%',
                'Error Reduction' => '95%',
                'Compliance' => '98%',
            ],
            'featured_image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'published_at' => now()->subDays(15),
        ]);

         \App\Models\CaseStudy::create([
            'title' => 'Optimizing Global Logistics Supply Chain',
            'slug' => 'optimizing-global-logistics-supply-chain',
            'client_name' => 'Terra Logistics',
            'industry' => 'Logistics & Supply Chain',
            'challenge' => "Terra Logistics lacked visibility into their last-mile delivery operations. Route planning was manual and static, failing to account for real-time traffic or weather conditions. This led to high fuel costs, missed delivery windows, and frustrated customers.",
            'solution' => "We deployed an AI-driven route optimization engine that dynamically adjusts delivery routes based on real-time traffic data, weather forecasts, and package priority. The system includes a driver mobile app for turn-by-turn navigation and digital proof of delivery.",
            'results' => "Fuel consumption decreased by 22% in the first quarter. On-time delivery rates improved from 85% to 96%. Customer complaints related to delivery timing dropped by 70%. The system paid for itself in fuel savings alone within 8 months.",
            'key_metrics' => [
                'Fuel Savings' => '22%',
                'On-Time Rate' => '96%',
                'Complaints' => '-70%',
            ],
            'featured_image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
            'published_at' => now()->subDays(45),
        ]);
    }
}
