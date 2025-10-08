<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
\App\Models\Review::truncate();

class ReviewDataSeeder extends Seeder
{

    public function run()
    {
 Review::updateOrCreate([
    'title' => 'Book Review of The Midnight Library',
], [
    'excerpt' => 'A journey through regrets and parallel lives — this novel explores the choices we didn’t make. Nora Seed finds herself in a library between life and death, where each book is a different version of her life. The story is philosophical, emotional, and deeply human. It asks: what makes life worth living?',
    'image' => 'images/mid.png',
    'link' => '/blog/midnight-library',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Book Review of Hooked by Nir Eyal',
], [
    'excerpt' => 'Why do we keep coming back to the same apps? Hooked explores the psychology of habit-forming products. Eyal breaks down the “Hook Model” — trigger, action, reward, investment — with clarity and real-world examples. It’s essential reading for designers, developers, and entrepreneurs. A sharp look at tech’s addictive design. You’ll never look at notifications the same way again.',
    'image' => 'images/hook.jpg',
    'link' => '/blog/hooked',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Book Review of The Alchemist by Paulo Coelho',
], [
    'excerpt' => 'A timeless fable about following your dreams. Santiago’s journey across the desert is filled with omens, wisdom, and self-discovery. Coelho’s prose is poetic, simple, and spiritually resonant. It reminds us that the treasure we seek is often within.',
    'image' => 'images/alche.jpg',
    'link' => '/blog/alchemist',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Book Review of Deep Work by Cal Newport',
], [
    'excerpt' => 'In a distracted world, focus is a superpower. Newport argues that deep work — focused, undistracted effort — is the key to mastery and success. He offers strategies to cultivate depth and eliminate shallow distractions. The book is both philosophical and practical. Ideal for creatives, coders, and thinkers. A productivity bible for the digital age.',
    'image' => 'images/deep.jpg',
    'link' => '/blog/deep-work',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Book Review of Educated by Tara Westover',
], [
    'excerpt' => 'A memoir of resilience and transformation. Raised in a survivalist family with no formal education, Tara’s journey to Cambridge is both harrowing and inspiring. Her voice is raw, honest, and unforgettable. It’s a story about identity, knowledge, and breaking free.',
    'image' => 'images/edu.png',
    'link' => '/blog/educated',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Book Review of Sapiens by Yuval Noah Harari',
], [
    'excerpt' => 'A sweeping history of humankind — from hunter-gatherers to tech-driven societies. Harari blends anthropology, philosophy, and storytelling with ease. It challenges how we think about religion, capitalism, and progress. Bold, provocative, and deeply engaging. A book that reframes everything. You’ll never see history the same way again.',
    'image' => 'images/sap.jpg',
    'link' => '/blog/sapiens',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Book Review of Ikigai: The Japanese Secret to a Long and Happy Life',
], [
    'excerpt' => 'What gets you out of bed in the morning? Ikigai explores purpose, longevity, and joy through Japanese philosophy. It’s gentle, inspiring, and filled with wisdom from Okinawan centenarians. A blend of lifestyle, mindfulness, and meaning.',
    'image' => 'images/iki.jpg',
    'link' => '/blog/ikigai',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Book Review of Thinking, Fast and Slow by Daniel Kahneman',
], [
    'excerpt' => 'A deep dive into how we think — and how we’re often wrong. Kahneman introduces two systems of thought: fast, intuitive and slow, deliberate. It’s packed with cognitive biases, behavioral insights, and real-world implications. Dense but rewarding. A must-read for decision-makers. It’ll change how you approach choices forever.',
    'image' => 'images/slow.jpg',
    'link' => '/blog/thinking-fast-slow',
    'category' => 'Book Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of The Social Dilemma',
], [
    'excerpt' => 'A chilling look at how tech companies manipulate user behavior through algorithms. The documentary blends interviews with dramatized scenes to show the real-world impact of persuasive design. It’s a wake-up call for anyone who uses social media. Thought-provoking and unsettling.',
    'image' => 'images/soc.jpg',
    'link' => '/blog/social-dilemma',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of Everything Everywhere All At Once',
], [
    'excerpt' => 'A multiverse of madness, meaning, and motherly love — this film defies genre. It’s chaotic, heartfelt, and visually stunning. Michelle Yeoh delivers a career-defining performance. The film explores identity, regret, and connection in wildly imaginative ways. A cinematic experience like no other. It’s a genre mashup that somehow makes perfect emotional sense.',
    'image' => 'images/evr.jpeg',
    'link' => '/blog/everything-everywhere',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of Interstellar',
], [
    'excerpt' => 'A sweeping sci-fi epic that blends emotion, physics, and visual grandeur. Christopher Nolan’s tale of love across dimensions is both cerebral and deeply human. The score by Hans Zimmer elevates every moment. It’s a story about time, sacrifice, and survival.',
    'image' => 'images/inte.jpg',
    'link' => '/blog/interstellar',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of Parasite',
], [
    'excerpt' => 'A genre-bending masterpiece that explores class divide with razor-sharp satire. Bong Joon-ho’s direction is precise, layered, and unpredictable. The film shifts from comedy to thriller to tragedy seamlessly. Every frame is loaded with meaning. A landmark in global cinema. It’s a social commentary wrapped in cinematic brilliance.',
    'image' => 'images/par.jpg',
    'link' => '/blog/parasite',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of The Grand Budapest Hotel',
], [
    'excerpt' => 'Wes Anderson’s whimsical tale of loyalty, legacy, and lavender pastries. The film is a visual feast — symmetrical, pastel, and meticulously crafted. Ralph Fiennes charms as the eccentric concierge. It’s a storybook for adults, filled with humor and heart.',
    'image' => 'images/grd.jpg',
    'link' => '/blog/grand-budapest',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of Her',
], [
    'excerpt' => 'A tender sci-fi romance between a man and his AI. Joaquin Phoenix delivers a vulnerable performance, and Scarlett Johansson’s voice brings warmth and complexity. The film explores loneliness, connection, and the nature of love. Visually poetic and emotionally resonant. A quiet masterpiece. It’s a meditation on intimacy in the digital age.',
    'image' => 'images/her.jpg',
    'link' => '/blog/her',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of Inception',
], [
    'excerpt' => 'Dreams within dreams — Nolan’s mind-bending thriller is a puzzle box of ideas. With stunning visuals and a haunting score, it’s both cerebral and action-packed. The concept of shared dreaming is executed with precision. It’s a film that rewards repeat viewings.',
    'image' => 'images/inception.jpg',
    'link' => '/blog/inception',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of The Pursuit of Happyness',
], [
    'excerpt' => 'Based on a true story, this film is a testament to perseverance. Will Smith’s portrayal of Chris Gardner is heartfelt and inspiring. It’s about chasing dreams against all odds, with dignity and grit. Emotional, uplifting, and deeply human. A story that stays with you. It’s a reminder that resilience can rewrite destiny.',
    'image' => 'images/purs.jpg',
    'link' => '/blog/pursuit-of-happyness',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of The Imitation Game',
], [
    'excerpt' => 'Alan Turing’s story is one of brilliance, tragedy, and legacy. Benedict Cumberbatch captures the complexity of a man who cracked the Enigma code. The film balances historical drama with emotional depth. It’s a tribute to unsung heroes and the cost of genius.',
    'image' => 'images/imi.jpg',
    'link' => '/blog/imitation-game',
    'category' => 'Movie Reviews',
]);

Review::updateOrCreate([
    'title' => 'Movie Review of Whiplash',
], [
    'excerpt' => 'How far would you go for greatness? Whiplash is a brutal, electrifying look at ambition and obsession. The tension between student and mentor is relentless. J.K. Simmons is terrifyingly brilliant. It’s intense, raw, and unforgettable. A symphony of pain and perfection.',
    'image' => 'images/whip.jpg',
    'link' => '/blog/whiplash',
    'category' => 'Movie Reviews',
]);
Review::updateOrCreate([
    'title' => 'TV Series Review of Black Mirror',
], [
    'excerpt' => 'A dystopian anthology that explores the dark side of technology. Each episode is a standalone story, often unsettling and eerily plausible. From social credit scores to digital consciousness, it’s a mirror to our digital anxieties.',
    'image' => 'images/black.jpg',
    'link' => '/blog/black-mirror',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of Stranger Things',
], [
    'excerpt' => 'A nostalgic blend of sci-fi, horror, and 80s charm. The kids of Hawkins face supernatural threats while navigating adolescence. With lovable characters and thrilling plot twists, it’s binge-worthy from start to finish. The Upside Down is as iconic as the soundtrack. A pop culture phenomenon. It’s a love letter to Spielberg and Stephen King.',
    'image' => 'images/stra.jpg',
    'link' => '/blog/stranger-things',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of The Crown',
], [
    'excerpt' => 'A regal drama chronicling the reign of Queen Elizabeth II. Lavish production, stellar performances, and historical depth make it compelling. It humanizes monarchy while exploring power, duty, and sacrifice.',
    'image' => 'images/crown.jpg',
    'link' => '/blog/the-crown',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of Breaking Bad',
], [
    'excerpt' => 'From chemistry teacher to drug kingpin — Walter White’s descent is legendary. The writing, acting, and pacing are near-perfect. It’s a study in moral decay and human complexity. Every season escalates with tension and brilliance. A benchmark in serialized storytelling. It’s television at its most addictive.',
    'image' => 'images/bad.jpg',
    'link' => '/blog/breaking-bad',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of The Office (US)',
], [
    'excerpt' => 'A mockumentary-style comedy that turns mundane office life into pure gold. Michael Scott’s awkward charm, Jim and Pam’s romance, and Dwight’s intensity create endless laughs. It’s relatable, quotable, and endlessly rewatchable.',
    'image' => 'images/the-ofc.jpg',
    'link' => '/blog/the-office',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of Mindhunter',
], [
    'excerpt' => 'A chilling dive into the birth of criminal profiling. Set in the 70s, it follows FBI agents interviewing serial killers to understand their psychology. The pacing is slow, but the tension is constant. It’s cerebral, stylish, and unsettling. A must-watch for true crime fans. It’s a slow burn that rewards patience.',
    'image' => 'images/mind.jpg',
    'link' => '/blog/mindhunter',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of Dark',
], [
    'excerpt' => 'Time travel, family secrets, and existential dread — Dark is a German sci-fi masterpiece. It’s complex, layered, and demands your full attention. The cinematography and soundtrack are haunting.',
    'image' => 'images/dark.jpg',
    'link' => '/blog/dark',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of The Mandalorian',
], [
    'excerpt' => 'A space western that revitalized Star Wars. The Mandalorian blends action, lore, and heart — with Baby Yoda stealing every scene. It’s episodic yet emotional, with stunning visuals and tight storytelling. A treat for fans and newcomers alike. This is the way. It’s Star Wars with soul and swagger.',
    'image' => 'images/manda.jpg',
    'link' => '/blog/mandalorian',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of Chernobyl',
], [
    'excerpt' => 'A harrowing retelling of the 1986 nuclear disaster. The series is bleak, gripping, and meticulously crafted. It explores human error, sacrifice, and the cost of truth.',
    'image' => 'images/cher.jpg',
    'link' => '/blog/chernobyl',
    'category' => 'TV Series Reviews',
]);

Review::updateOrCreate([
    'title' => 'TV Series Review of Fleabag',
], [
    'excerpt' => 'Witty, raw, and devastating — Fleabag is a masterclass in storytelling. Phoebe Waller-Bridge breaks the fourth wall with charm and pain. It’s about grief, love, and messy humanity. Every line is sharp, every silence meaningful. A show that’s as funny as it is profound. It’s heartbreak wrapped in humor.',
    'image' => 'images/flea.jpg',
    'link' => '/blog/fleabag',
    'category' => 'TV Series Reviews',
]);


    }
}
