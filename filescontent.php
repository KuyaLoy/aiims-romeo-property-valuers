<?php
$srcnp = "assets/images/";

$greviewsdir = $srcnp . "greview/";
$greviewsimages = count(glob($greviewsdir . "*.webp")) !== 0 ? glob($greviewsdir . "*.webp") : glob($greviewsdir . "*.png");
natsort($greviewsimages);


$greviews = [
    [
        "img" => "review_1",
        "name" => "Farhana Memon",
        "desc" => "I highly recommend Vincent Romeo to anyone in need of reliable valuation services. He was recommended to me as one of the best. I’ve dealt with valuers before and hadn’t had a great experience. With this company it was different! Vincent exceeded my expectations with his fountain of knowledge.",
    ],
    // [
    //     "img" => "review_2",
    //     "name" => "Rachel Romano",
    //     "desc" => "The team at Romeo Property Valuers were great to deal with. I first had a phone call with Vincent, he was happy to assist and answer all of my queries. I received my report within my required time frame. Overall, I was very happy with the service and I would highly recommend the team at Romeo Property Valuers.",
    // ],
    // [
    //     "img" => "review_3",
    //     "name" => "Hemanth Kolli",
    //     "desc" => "I had a great experience with Vincent and Romeo Property Valuers. Vincent was very prompt and professional in answering my questions on phone. His team was professional, responsive, and provided a thorough valuation of my property.",
    // ]
];
