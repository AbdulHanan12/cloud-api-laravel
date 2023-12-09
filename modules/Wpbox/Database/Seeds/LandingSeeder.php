<?php

namespace Modules\Wpbox\Database\Seeds;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $features = [
            [ 'type' => 'feature','title'=>'{"en":"Email marketing is 🏴‍☠️. Say hi to Whatsapp marketing"}', 'description'=>'{"en":"Whatsapp Marketing is a new fields in Direct Marketing. Experience around 98% read rate on your campaigns and never fear your account to get blocked from Whatsapp."}', 'image'=>asset('uploads').'/default/wpbox/campaign.png'],
            [ 'type' => 'feature','title'=>'{"en":"Chat with your contacts"}', 'description'=>'{"en":"Here, you will find fully featured chat system, from where you can send docs, images, fast replies, and rich message templates. Offer manual and automated support via the reply bot triggered by the client message."}', 'image'=>asset('uploads').'/default/wpbox/chat.png'],
            
        ];

        $faq = [
            [
                'type' => 'faq',
                'title' => '{"en":"Can I cancel anytime?"}',
                'description' => '{"en":"Yes, you can! We believe in flexibility, and there are no long-term commitments. You can cancel your subscription at any time with no hidden fees or penalties."}'
            ],
            [
                'type' => 'faq',
                'title' => '{"en":"How do I create a marketing campaign?"}',
                'description' => '{"en":"Creating a marketing campaign is easy with our platform. We provide a user-friendly interface that allows you to design, target, and launch campaigns effortlessly. If you need assistance, our support team is always here to help."}'
            ],
            [
                'type' => 'faq',
                'title' => '{"en":"Is my data secure?"}',
                'description' => '{"en":"Absolutely. We take data security seriously. Our platform employs robust encryption protocols and follows industry best practices to ensure your data remains safe and confidential."}'
            ],
            [
                'type' => 'faq',
                'title' => '{"en":"Can I integrate this with my existing tools?"}',
                'description' => '{"en":"Yes, our platform is designed to be compatible with various third-party tools and services. We offer integrations that make it easy to connect with your existing marketing stack for a seamless experience."}'
            ]
        ];
        
        // You can now use the $faqs array in your PHP application to display the frequently asked questions.
        

        $testimonials = [
            [
                'type' => 'testimonial',
                'title' => '{"en":"I love using the system"}',
                'subtitle' => '{"en":"John Doe - CEO of Marketing LTD"}',
                'description' => '{"en":"This WhatsApp marketing platform has completely transformed how we engage with our customers. It\'s a game-changer for our marketing campaigns, and the direct WhatsApp chat feature has boosted our customer interactions. The platform is user-friendly, and the support team is incredibly responsive. Highly recommend!"}'
            ],
            [
                'type' => 'testimonial',
                'title' => '{"en":"Exceptional WhatsApp Marketing"}',
                'subtitle' => '{"en":"Jane Smith - Marketing Manager"}',
                'description' => '{"en":"Your WhatsApp marketing platform has been a game-changer for our marketing efforts. The campaigns are highly effective, and the direct chat feature allows us to connect with customers on a personal level. It\'s made a significant impact on our business growth!"}'
            ],
            [
                'type' => 'testimonial',
                'title' => '{"en":"Effortless Marketing Campaigns"}',
                'subtitle' => '{"en":"David Williams - Digital Marketer"}',
                'description' => '{"en":"Using your WhatsApp marketing platform has made managing campaigns effortless. The results have been outstanding, and the direct WhatsApp chat has improved our customer engagement. The platform\'s simplicity and the support team\'s assistance have been invaluable to our success."}'
            ],
            [
                'type' => 'testimonial',
                'title' => '{"en":"A Must-Have for Marketers"}',
                'subtitle' => '{"en":"Susan Brown - Marketing Director"}',
                'description' => '{"en":"Your WhatsApp marketing SaaS platform is a must-have for any marketer. It\'s streamlined our marketing efforts, and the direct chat feature has enhanced our customer relationships. The platform is intuitive, and the support team is top-notch. We couldn\'t be happier with the results!"}'
            ]
        ];
        
        // You can now use the $testimonials array in your PHP application as needed.
        


    
        
        

        $content = array_merge($faq, $testimonials,$features);
        
        

        foreach ($content as $key => $element) {
            DB::table('posts')->insert([
                'post_type' => $element['type'],
                'title' => $element['title'],
                'image' => isset($element['image'])?$element['image']:null,
                'description' => $element['description'],
                'link'=>isset($element['link'])?$element['link']:null,
                'subtitle' => isset($element['subtitle'])?$element['subtitle']:null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Model::reguard();
    }
}
