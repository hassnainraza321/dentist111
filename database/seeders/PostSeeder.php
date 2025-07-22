<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Helper;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => '10 Essential Dental Care Tips for a Healthy Smile',
                'featured_image' => 'img/gallery/essential-dental-care-tips-for-a-healthy-smile.webp',
                'featured_image_alt_text' => '10 Essential Dental Care Tips for a Healthy Smile',
                'excerpt' => 'Your smile is one of the first things people notice, and maintaining good oral hygiene is vital in keeping it bright and healthy. Whether trying to prevent cavities,',
                'meta_keywords' => 'Dental care tips, healthy smile, oral hygiene, brushing tips, flossing, fluoride toothpaste, dental checkups, dentist services, dentist111, dental health, teeth care tips',
                'meta_description' => 'Discover ten essential dental care tips to maintain a healthy, bright smile. From brushing techniques to professional care, learn how Dentist 111 can help you.',
                'created_at' => '2024-10-03 00:00:00'
            ],
            [
                'title' => 'The Benefits of Same-Day Dental Appointments',
                'featured_image' => 'img/gallery/benefits-of-same-day-dental-appointments.webp',
                'featured_image_alt_text' => 'The Benefits of Same-Day Dental Appointments',
                'excerpt' => 'In today fast-paced world, convenience is king and applies to healthcare, including dentistry. People are constantly moving, juggling work, family, and personal',
                'meta_keywords' => 'same-day dental appointments, emergency dental care, immediate dental care, fast dental services, dental care convenience, Dentist111, urgent dental care',
                'meta_description' => 'Discover the convenience and benefits of same-day dental appointments at Dentist 111! Say goodbye to long waits and enjoy professional care. Book today!',
                'created_at' => '2024-10-5 00:00:00',
            ],
            [
                'title' => 'How to Overcome Dental Anxiety',
                'featured_image' => 'img/gallery/overcome-dental-anxiety.webp',
                'featured_image_alt_text' => 'Overcome Dental Anxiety',
                'excerpt' => 'Fear of dental visits is a widespread concern that impacts countless individuals across the globe. The idea of going to the dentist can evoke feelings of dread, nervousness, and even panic.',
                'meta_keywords' => 'dental anxiety, overcoming dental anxiety, dental fear, tips for dental anxiety, dentist advice, anxiety relief at the dentist, comfortable dental visits',
                'meta_description' => 'Are you struggling with dental anxiety? Discover practical strategies to overcome your fear of the dentist. Learn tips to overcome a dental stress at Dentist 111.',
                'created_at' => '2024-10-15 00:00:00',
            ],
            [
                'title' => '24-Hour Emergency Dentist in Nottingham',
                'featured_image' => 'img/gallery/24-hour-emergency-dentist-in-Nottingham.webp',
                'featured_image_alt_text' => '24-Hour Emergency Dentist in Nottingham',
                'excerpt' => 'A dental emergency can strike any time—often when you least expect it. Whether its a toothache that suddenly becomes unbearable at night or an unexpected dental injury, waiting for regular office',
                'meta_keywords' => '24-hour emergency dentist in Nottingham, urgent dental care, emergency dental services, dental pain relief, dental injury treatment, Dentist111, 24/7 dental care, emergency toothache treatment',
                'meta_description' => 'Are you looking for a 24-hour emergency dentist in Nottingham? Dentist 111 offers round-the-clock dental care to treat pain, injuries, and urgent issues immediately.',
                'created_at' => '2024-10-21 00:00:00',
            ],
            [
                'title' => 'How Much is an Emergency Dentist Appointment Cost',
                'featured_image' => 'img/gallery/how-much-is-an-emergency-dentist-appointment-cost.webp',
                'featured_image_alt_text' => 'How Much is an Emergency Dentist Appointment Cost',
                'excerpt' => 'Dental emergencies are never convenient, but knowing what to expect regarding cost can help you feel more prepared if an issue arises. At Dentist 111, we provide quality emergency dental services so',
                'meta_keywords' => 'emergency tooth extraction price, tooth removal cost, emergency dentist cost, how much does an emergency dentist cost, emergency dental prices, tooth extraction cost, dentist emergency appointment cost, affordable emergency dental care',
                'meta_description' => 'Discover the cost of an emergency dentist appointment, tooth extraction prices, and dental treatment. Dentist 111 offer affordable options for urgent dental care.',
                'created_at' => '2024-11-8 00:00:00',
            ],
            [
                'title' => 'Can You Eat After a Filling? Tips & Foods Guide',
                'featured_image' => 'img/gallery/what-to-eat-after-a-dental-filling.webp',
                'featured_image_alt_text' => 'Can You Eat After a Filling? Tips & Foods Guide',
                'excerpt' => 'Getting a dental filling is a common procedure to treat cavities and restore your tooth’s health and function. However, many patients leave the dentist’s office wondering about one crucial thing:',
                'meta_keywords' => 'What to eat after a dental filling, can you eat after a tooth filling, can I eat after a filling, how long after cavity filling can I eat, post-filling care, dental filling recovery, how soon can you eat after a filling, when can you eat after fillings',
                'meta_description' => 'Can you eat after a filling? Learn how long after a filling can you eat, the best soft foods to eat after tooth filling, and tips for a smooth recovery at Dentist 111.',
                'created_at' => '2024-11-12 00:00:00',
            ],
            [
                'title' => 'What Does a Dental Filling Look Like? Insights on Dental Fillings',
                'featured_image' => 'img/gallery/what-does-a-dental-filling-look-like.webp',
                'featured_image_alt_text' => 'What Does a Dental Filling Look Like',
                'excerpt' => 'When it comes to oral health, dental fillings are essential for treating cavities and restoring teeth. Many patients, however, often wonder: What does a dental filling look like?',
                'meta_keywords' => 'dental filling, cavity filling, what does a dental filling look like, types of dental fillings, tooth filling appearance, composite fillings, amalgam fillings, gold fillings, ceramic fillings, dental care tips, tooth restoration',
                'meta_description' => 'Learn about dental fillings, their types, durability, and care tips for a healthy smile. Discover expert insights and affordable dental treatments at Dentist 111.',
                'created_at' => '2024-11-18 00:00:00',
            ],
            [
                'title' => 'What to Eat in Toothache: Best Foods & Tips for Relief',
                'featured_image' => 'img/gallery/what-to-eat-in-toothache.webp',
                'featured_image_alt_text' => 'What to Eat in Toothache',
                'excerpt' => 'Toothaches are not only painful but can also disrupt daily life, especially when it comes to eating. Understanding what to eat in toothache is essential to navigate the discomfort and maintain proper nutrition.',
                'meta_keywords' => '',
                'meta_description' => 'Discover the best soft foods for toothache, what to eat, and how to avoid worsening it. Tips to manage tooth pain and the worst foods to avoid at dentist 111.',
                'created_at' => '2024-12-03 00:00:00',
            ],
            [
                'title' => 'Can You Go to Dentist with Cold Sore?',
                'featured_image' => 'img/gallery/can-you-go-to-dentist-with-cold-sore.webp',
                'featured_image_alt_text' => 'Can You Go to Dentist with Cold Sore',
                'excerpt' => 'Dealing with a cold sore is uncomfortable, especially if you have a dental appointment coming up. Many people wonder, “Can you go to the dentist with a cold sore?” or “should you go to the dentist with a cold”',
                'meta_keywords' => 'cold sore dentist, can I go to dentist with cold sore, dental visit with cold sore, cold sore symptoms, cold sore treatment, reschedule dental appointment, contagious cold sores, dental procedures cold sore, oral health and cold sores',
                'meta_description' => 'Can you visit the dentist with a cold sore? Discover when to proceed, when to reschedule, and essential precautions for a safe dental appointment at dentist 111.',
                'created_at' => '2024-12-09 00:00:00',
            ],
            [
                'title' => 'How to Maintain Your Teeth Whitening Results',
                'featured_image' => 'img/gallery/how-to-maintain-your-teeth-whitening-results.webp',
                'featured_image_alt_text' => 'How to Maintain Your Teeth Whitening Results',
                'excerpt' => 'Teeth whitening is a fantastic way to enhance your confidence and appearance, but maintaining those results requires ongoing care. Discolouration can creep back without proper attention, undoing the benefits',
                'meta_keywords' => 'teeth whitening maintenance, bright smile tips, oral hygiene, teeth care, maintain white teeth, Dentist 111',
                'meta_description' => 'Find the best ways to maintain teeth whitening results with our expert tips. From dietary advice to oral hygiene routines, keep your smile bright with Dentist 111.',
                'created_at' => '2024-12-28 00:00:00',
            ],
            [
                'title' => 'What Is Gum Disease and How Is It Treated?',
                'featured_image' => 'img/gallery/what-is-gum-disease-and-how-is-it-treated.webp',
                'featured_image_alt_text' => 'What Is Gum Disease and How Is It Treated?',
                'excerpt' => 'Gum or periodontal disease is one of the most common oral health issues affecting people worldwide. Its a progressive condition that starts with gum inflammation (gingivitis). If left untreated, it can lead',
                'meta_keywords' => 'gum disease, periodontal disease, gingivitis, gum disease treatment, oral health, dental care, gum health, dentist services, dentist 111',
                'meta_description' => 'Learn about gum disease, its symptoms, causes, and modern treatment options. Protect your oral health with expert advice from dentist 111.',
                'created_at' => '2024-12-31 00:00:00',
            ],
            [
                'title' => 'The Benefits of Wearing Retainers After Orthodontic Treatment',
                'featured_image' => 'img/gallery/the-benefits-of-wearing-retainers-after-orthodontic-treatment.webp',
                'featured_image_alt_text' => 'The Benefits of Wearing Retainers After Orthodontic Treatment',
                'excerpt' => 'After months or even years of wearing braces or aligners, the day you finally achieve a perfectly aligned smile feels monumental. However, orthodontic treatment doesn’t end when your braces come off.',
                'meta_keywords' => 'benefits of retainers, wearing retainers after braces, orthodontic retainers, retainer care tips, dental retainers, retainers after orthodontic treatment, Dentist 111',
                'meta_description' => 'Find the vital role of retainers in preserving your perfect smile after braces. Learn the top benefits, faqs, and expert tips for proper retainer care with Dentist 111.',
                'created_at' => '2025-01-3 00:00:00',
            ],
            [
                'title' => "Signs you might need Root Canal: Don't ignore these symptoms",
                'featured_image' => 'img/gallery/signs-you-might-need-root-canal-dont-ignore-these-symptoms.webp',
                'featured_image_alt_text' => "Signs you might need Root Canal: Don't ignore these symptoms",
                'excerpt' => 'Caring for your teeth is essential for maintaining a pain-free and confident smile. Yet, even with good oral hygiene, some dental issues, like severe tooth pain or sensitivity, may signal the need for a root canal.',
                'meta_keywords' => 'Root canal symptoms, root canal signs, tooth pain relief, dental care, Dentist 111, oral health services, tooth sensitivity, gum infection, root canal dentist',
                'meta_description' => 'Recognize the signs that you need a root canal to avoid tooth pain and severe dental issues. Dentist 111 offers affordable treatments and expert dental care.',
                'created_at' => '2025-01-7 00:00:00',
            ],
            [
                'title' => 'The Role of Dental Hygienists in Your Oral Health Routine',
                'featured_image' => 'img/gallery/the-role-of-dental-hygienists-in-your-oral-health-routine.webp',
                'featured_image_alt_text' => 'The Role of Dental Hygienists in Your Oral Health Routine',
                'excerpt' => 'Oral health isn’t just about brushing twice daily or flossing regularly; it’s about a comprehensive approach to maintaining your teeth and gums. A key player in this approach? Dental hygienists. These professionals',
                'meta_keywords' => 'dental hygienist role, oral health care, dental cleaning, prevention, Dentist 111, dental health services, professional teeth cleaning, healthy smile',
                'meta_description' => 'Discover how dental hygienists contribute to your oral health. Learn about their vital role in dental care, prevention, and a healthy smile. Visit Dentist 111 today.',
                'created_at' => '2025-01-10 00:00:00',
            ],
            [
                'title' => 'Invisalign vs. Traditional Braces: Which Is Right for You?',
                'featured_image' => 'img/gallery/invisalign-vs-traditional-braces-which-is-right-for-you.webp',
                'featured_image_alt_text' => 'Invisalign vs. Traditional Braces: Which Is Right for You?',
                'excerpt' => "Achieving a confident smile often starts with orthodontic treatment. Whether you're a teenager dreaming of straighter teeth or an adult seeking a flawless smile, the debate between Invisalign and traditional",
                'meta_keywords' => 'Invisalign, traditional braces, orthodontic treatment, braces vs Invisalign, clear aligners, dental care, Dentist 111',
                'meta_description' => 'Explore the pros and cons of Invisalign vs. traditional braces. Find the best orthodontic option for you and why Dentist 111 is your trusted choice for dental care.',
                'created_at' => '2025-01-14 00:00:00',
            ],
            [
                'title' => 'The Benefits of Laser Dentistry: Minimally Invasive Treatments',
                'featured_image' => 'img/gallery/the-benefits-of-laser-dentistry-minimally-invasive-treatments.webp',
                'featured_image_alt_text' => 'The Benefits of Laser Dentistry: Minimally Invasive Treatments',
                'excerpt' => "Laser technology has revolutionized modern dentistry, offering patients a safer, faster, and more comfortable experience. At Dentist 111, we leverage the latest advancements in laser dentistry to provide minimally",
                'meta_keywords' => 'Laser dentistry benefits, minimally invasive dental treatments, painless dental procedures, advanced dental technology, laser gum therapy, cavity treatment with lasers, best laser dentist, Dentist 111',
                'meta_description' => 'Find the advantages of laser dentistry for painless, minimally invasive treatments. Learn how Dentist 111 improves your dental health with precision and comfort.',
                'created_at' => '2025-01-24 00:00:00',
            ],
            [
                'title' => 'Gingivitis: Symptoms, Causes, and Treatment Options',
                'featured_image' => 'img/gallery/gingivitis-symptoms-causes-and-treatment-options.webp',
                'featured_image_alt_text' => 'Gingivitis: Symptoms, Causes, and Treatment Options',
                'excerpt' => "Gingivitis is one of the most common dental issues affecting millions worldwide. It's a mild form of gum disease that, if left untreated, may progress to more serious conditions like periodontitis. At Dentist 111, we",
                'meta_keywords' => 'gingivitis symptoms, gingivitis causes, gingivitis treatment, gum disease, prevent gingivitis, Dentist 111, dental care, oral health',
                'meta_description' => 'Learn about gingivitis, its symptoms, causes, and effective treatment options. Discover why Dentist 111 is your best choice for dental care.',
                'created_at' => '2025-02-10 00:00:00',
            ],
        ];

        $tags = [
            [
                'title' => 'Dental care tips',
            ],
            [
                'title' => 'healthy smile',
            ],
            [
                'title' => 'brushing tips',
            ],
            [
                'title' => 'teeth care tips',
            ],
            [
                'title' => 'same-day dental appointments',
            ],
            [
                'title' => 'emergency dental care',
            ],
            [
                'title' => 'dental anxiety',
            ],
            [
                'title' => 'dentist advice',
            ],
            [
                'title' => '24/7 dental care',
            ],
            [
                'title' => '24-hour emergency dentist',
            ],
            [
                'title' => 'emergency dentist cost',
            ],
            [
                'title' => 'emergency dentist appointment',
            ],
            [
                'title' => 'dental filling',
            ],
            [
                'title' => 'can I eat after a filling',
            ],
            [
                'title' => 'dental filling look like',
            ],
            [
                'title' => 'types of dental fillings',
            ],
        ];

        $post_tags = [
            [
                'post_id' => 1,
                'tag_id' => 1,
            ],
            [
                'post_id' => 1,
                'tag_id' => 2,
            ],
            [
                'post_id' => 1,
                'tag_id' => 3,
            ],
            [
                'post_id' => 1,
                'tag_id' => 4,
            ],
            [
                'post_id' => 1,
                'tag_id' => 6,
            ],
            [
                'post_id' => 1,
                'tag_id' => 8,
            ],
            [
                'post_id' => 2,
                'tag_id' => 2,
            ],
            [
                'post_id' => 2,
                'tag_id' => 5,
            ],
            [
                'post_id' => 2,
                'tag_id' => 6,
            ],
            [
                'post_id' => 3,
                'tag_id' => 7,
            ],
            [
                'post_id' => 3,
                'tag_id' => 8,
            ],
            [
                'post_id' => 3,
                'tag_id' => 6,
            ],
            [
                'post_id' => 4,
                'tag_id' => 9,
            ],
            [
                'post_id' => 4,
                'tag_id' => 10,
            ],
            [
                'post_id' => 4,
                'tag_id' => 5,
            ],
            [
                'post_id' => 4,
                'tag_id' => 6,
            ],
            [
                'post_id' => 5,
                'tag_id' => 11,
            ],
            [
                'post_id' => 5,
                'tag_id' => 12,
            ],
            [
                'post_id' => 6,
                'tag_id' => 13,
            ],
            [
                'post_id' => 6,
                'tag_id' => 14,
            ],
            [
                'post_id' => 7,
                'tag_id' => 14,
            ],
            [
                'post_id' => 7,
                'tag_id' => 15,
            ]
        ];

        foreach ($posts as $key => $post)
        {
            $post['slug'] = Helper::getSlug($post['title']);
            $post['updated_at'] = now();

            $post_id = DB::table('posts')->insertGetId( $post );
        }

        foreach ($tags as $key => $tag)
        {
            $tag['slug'] = Helper::getSlug($tag['title']);
            $tag['created_at'] = now();
            $tag['updated_at'] = now();
            
            $tag_id = DB::table('tags')->insertGetId( $tag );
        }

        foreach ($post_tags as $key => $post_tag)
        {
            $post_tag['created_at'] = now();
            $post_tag['updated_at'] = now();
            
            $post_tag = DB::table('post_tags')->insertGetId( $post_tag );
        }
    }
}
