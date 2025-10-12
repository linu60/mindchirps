<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogDetail extends Component
{
    public $slug;
    public $blog;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadBlogData();
    }

    private function loadBlogData()
    {
        // Define all your blog posts data
        $blogs = [
            'hooked' => [
                'title' => 'Book Review: Hooked by Nir Eyal',
                'date' => 'January 15, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/hooked.jpg',
                'rating' => 5,
                'overview' => '"Hooked: How to Build Habit-Forming Products" by Nir Eyal is a groundbreaking book that explores the psychology behind why certain products capture our attention and become part of our daily routines. This book is essential reading for product managers, designers, and entrepreneurs who want to understand the mechanics of user engagement.',
                'sections' => [
                    [
                        'heading' => 'The Hook Model',
                        'content' => 'Eyal introduces the Hook Model, a four-phase process that companies use to form user habits. The model consists of:',
                        'list' => [
                            '<strong>Trigger:</strong> The actuator of behavior, either external or internal',
                            '<strong>Action:</strong> The behavior done in anticipation of a reward',
                            '<strong>Variable Reward:</strong> What the user receives, which varies to create desire',
                            '<strong>Investment:</strong> What the user puts into the product, increasing likelihood of return'
                        ]
                    ],
                    [
                        'heading' => 'Key Takeaways',
                        'content' => 'The book emphasizes that habit-forming products don\'t rely on expensive marketing campaigns or aggressive messaging. Instead, they create associations with internal triggers in users\' minds. When users feel a certain emotion or are in a specific situation, they automatically turn to these products.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This book opened my eyes to the intentional design behind many of the apps and services I use daily. While it\'s a powerful framework for product development, it also made me more conscious as a consumer about which habits I want to form and which products truly add value to my life. I highly recommend this book for anyone interested in product design, psychology, or understanding the digital world we live in.'
                    ]
                ]
            ],
            'midnight-library' => [
                'title' => 'Book Review: The Midnight Library by Matt Haig',
                'date' => 'January 20, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/midnight-library.jpg',
                'rating' => 5,
                'overview' => '"The Midnight Library" by Matt Haig is a profound exploration of regret, possibility, and the choices that shape our lives. The story follows Nora Seed, who finds herself in a mysterious library between life and death, where each book represents a different version of her life had she made different choices.',
                'sections' => [
                    [
                        'heading' => 'The Premise',
                        'content' => 'At her lowest point, Nora discovers the Midnight Library, where she can experience alternate versions of her life. With each book she opens, she lives a different life - as an Olympic swimmer, a glaciologist, a rock star, and many more. Through these experiences, she must determine what truly makes life worth living.'
                    ],
                    [
                        'heading' => 'Themes and Messages',
                        'content' => 'The book beautifully explores themes of mental health, depression, and the universal human experience of wondering "what if?" It reminds us that every life has its challenges, and that the grass isn\'t always greener on the other side. Haig\'s writing is both heartbreaking and uplifting, offering comfort to anyone who has ever felt lost or questioned their life choices.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This book came into my life at exactly the right time. It\'s a gentle reminder that our lives are valuable exactly as they are, and that the small moments we often overlook are what make life meaningful. The Midnight Library is a must-read for anyone navigating life\'s uncertainties.'
                    ]
                ]
            ],
            'alchemist' => [
                'title' => 'Book Review: The Alchemist by Paulo Coelho',
                'date' => 'January 25, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/alchemist.jpg',
                'rating' => 5,
                'overview' => '"The Alchemist" by Paulo Coelho is a timeless tale about following your dreams and listening to your heart. This philosophical novel follows Santiago, a young Andalusian shepherd, on his journey to find a worldly treasure.',
                'sections' => [
                    [
                        'heading' => 'The Journey',
                        'content' => 'Santiago\'s quest takes him from Spain to the Egyptian pyramids, where he encounters various characters who teach him about life, love, and the importance of pursuing one\'s Personal Legend.'
                    ],
                    [
                        'heading' => 'Key Lessons',
                        'content' => 'The book teaches us that when you want something, all the universe conspires in helping you achieve it. It emphasizes the importance of listening to our hearts and recognizing the omens along our path.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This book is a beautiful allegory about life and purpose. It\'s simple yet profound, and its messages stay with you long after you\'ve finished reading. A must-read for anyone seeking inspiration.'
                    ]
                ]
            ],
            'deep-work' => [
                'title' => 'Book Review: Deep Work by Cal Newport',
                'date' => 'February 1, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/deep-work.jpg',
                'rating' => 5,
                'overview' => '"Deep Work" by Cal Newport argues that the ability to focus without distraction on cognitively demanding tasks is becoming increasingly rare yet increasingly valuable in our economy.',
                'sections' => [
                    [
                        'heading' => 'The Deep Work Hypothesis',
                        'content' => 'Newport presents the Deep Work Hypothesis: the ability to perform deep work is becoming increasingly rare at the same time it is becoming increasingly valuable. Those who cultivate this skill will thrive.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This book completely changed how I approach my work day. The strategies for eliminating distractions and scheduling deep work sessions have significantly improved my productivity and the quality of my output.'
                    ]
                ]
            ],
            'educated' => [
                'title' => 'Book Review: Educated by Tara Westover',
                'date' => 'February 5, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/educated.jpg',
                'rating' => 5,
                'overview' => '"Educated" is a memoir by Tara Westover about growing up in a strict and abusive household in rural Idaho and eventually escaping to learn about the wider world through education.',
                'sections' => [
                    [
                        'heading' => 'The Power of Education',
                        'content' => 'Westover\'s story demonstrates the transformative power of education and the courage it takes to forge your own path, even when it means leaving everything you\'ve known behind.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This memoir is both heartbreaking and inspiring. It\'s a testament to the resilience of the human spirit and the importance of critical thinking and self-discovery.'
                    ]
                ]
            ],
            'sapiens' => [
                'title' => 'Book Review: Sapiens by Yuval Noah Harari',
                'date' => 'February 10, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/sapiens.jpg',
                'rating' => 5,
                'overview' => '"Sapiens" explores the history of humankind from the Stone Age to the modern age, examining how Homo sapiens came to dominate the world.',
                'sections' => [
                    [
                        'heading' => 'Big History',
                        'content' => 'Harari weaves together insights from biology, anthropology, paleontology, and economics to tell the story of how insignificant apes became the rulers of planet Earth.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This book offers a fascinating perspective on human history and challenges many assumptions about progress, happiness, and the future of our species. A mind-expanding read.'
                    ]
                ]
            ],
            'ikigai' => [
                'title' => 'Book Review: Ikigai by Héctor García and Francesc Miralles',
                'date' => 'February 15, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/ikigai.jpg',
                'rating' => 5,
                'overview' => '"Ikigai" explores the Japanese concept of finding purpose and joy in life, based on interviews with residents of Okinawa, one of the world\'s Blue Zones.',
                'sections' => [
                    [
                        'heading' => 'Finding Your Ikigai',
                        'content' => 'The book presents ikigai as the intersection of what you love, what you\'re good at, what the world needs, and what you can be paid for.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This book is a gentle guide to living a longer, more fulfilling life. The insights from centenarians in Okinawa are both practical and profound.'
                    ]
                ]
            ],
            'thinking-fast-slow' => [
                'title' => 'Book Review: Thinking, Fast and Slow by Daniel Kahneman',
                'date' => 'February 20, 2024',
                'category' => 'Book Reviews',
                'image' => 'images/thinking-fast-slow.jpg',
                'rating' => 5,
                'overview' => 'Nobel laureate Daniel Kahneman presents decades of research on the two systems that drive the way we think: System 1 (fast, intuitive) and System 2 (slow, deliberate).',
                'sections' => [
                    [
                        'heading' => 'Two Systems of Thinking',
                        'content' => 'Kahneman reveals how our minds are tripped up by error and prejudice (even when we think we are being logical), and gives practical techniques for slower, smarter thinking.'
                    ],
                    [
                        'heading' => 'My Thoughts',
                        'content' => 'This book fundamentally changed how I understand decision-making and cognitive biases. Essential reading for anyone interested in psychology, economics, or simply understanding themselves better.'
                    ]
                ]
            ]
        ];

        $this->blog = $blogs[$this->slug] ?? null;

        if (!$this->blog) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.blog-detail')->layout('components.layouts.app');
    }
}
