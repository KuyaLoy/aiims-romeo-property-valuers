<?php
$srcnp = "assets/images/";

$greviewsdir = $srcnp . "greview/";
$greviewsimages = count(glob($greviewsdir . "*.webp")) !== 0 ? glob($greviewsdir . "*.webp") : glob($greviewsdir . "*.png");
natsort($greviewsimages);

$servicesdir = $srcnp . "services/";
$servicesimages = count(glob($servicesdir . "*.webp")) !== 0 ? glob($servicesdir . "*.webp") : glob($servicesdir . "*.png");
natsort($servicesimages);


$greviews = [
    [
        "img" => "review_1",
        "name" => "Farhana Memon",
        "desc" => "I highly recommend Vincent Romeo to anyone in need of reliable valuation services. He was recommended to me as one of the best. I’ve dealt with valuers before and hadn’t had a great experience. With this company it was different! Vincent exceeded my expectations with his fountain of knowledge.",
    ],
    [
        "img" => "review_2",
        "name" => "Rachel Romano",
        "desc" => "The team at Romeo Property Valuers were great to deal with. I first had a phone call with Vincent, he was happy to assist and answer all of my queries. I received my report within my required time frame. Overall, I was very happy with the service and I would highly recommend the team at Romeo Property Valuers.",
    ],
    [
        "img" => "review_3",
        "name" => "Hemanth Kolli",
        "desc" => "I had a great experience with Vincent and Romeo Property Valuers. Vincent was very prompt and professional in answering my questions on phone. His team was professional, responsive, and provided a thorough valuation of my property.",
    ]
];

$services = [
    [
        "img" => "service_1",
        "title" => "Expertise in DHA Properties",
        "titleTags" => "<span>Expertise</span> in DHA Properties",
        "desc" => "Our experience ensures that your valuation reflects these distinct characteristics accurately."
    ],
    [
        "img" => "service_2",
        "title" => "Comprehensive Valuation Services",
        "titleTags" => "<span>Comprehensive</span> Valuation Services",
        "desc" => "Our tailored valuation services include market value assessments, rental appraisals, and investment advice"
    ],
    [
        "img" => "service_3",
        "title" => "Timely and Transparent",
        "titleTags" => "<span>Timely and</span> Transparent",
        "desc" => "We pride ourselves on providing prompt services with clear and transparent communication at every step."
    ],
];

$dhaproperties = [
    [
        "title" => "Landlord Obligations",
        "desc" => "Maintenance of Property Standards Lease Compliance Insurance Requirements Financial Commitments"
    ],
    [
        "title" => "Landlord Rights",
        "desc" => "Guaranteed Rent Professional Property Management End-of-Lease Benefits"
    ],
    [
        "title" => "Landlord Requirements",
        "desc" => "Property Standards for Leasing Ongoing Compliance Communication with DHA"
    ],
];

$faqs = [
    [
        "title" => "What happens at the end of a DHA lease?",
        "content" => "DHA conducts rental appraisals annually to ensure rental rates align with current market values. This helps maintain transparency and fairness for property owners and DHA tenants."
    ],
    [
        "title" => "Why does DHA require rental appraisals by the end of the year?",
        "content" => "DHA conducts rental appraisals annually to ensure rental rates align with current market values. This helps maintain transparency and fairness for property owners and DHA tenants."
    ],
    [
        "title" => "Who conducts the rental appraisals for DHA properties?",
        "content" => "DHA conducts rental appraisals annually to ensure rental rates align with current market values. This helps maintain transparency and fairness for property owners and DHA tenants."
    ],
    [
        "title" => "What factors influence the rental appraisal value?",
        "content" => "DHA conducts rental appraisals annually to ensure rental rates align with current market values. This helps maintain transparency and fairness for property owners and DHA tenants."
    ],
    [
        "title" => "Will I be notified of the rental appraisal results?",
        "content" => "DHA conducts rental appraisals annually to ensure rental rates align with current market values. This helps maintain transparency and fairness for property owners and DHA tenants."
    ],
    [
        "title" => "What happens if I disagree with the rental appraisal outcome?",
        "content" => "DHA conducts rental appraisals annually to ensure rental rates align with current market values. This helps maintain transparency and fairness for property owners and DHA tenants."
    ],
];
