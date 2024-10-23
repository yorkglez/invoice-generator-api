<?php

namespace App\Http\Controllers;

class SectionCardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getSections()
    {
        $sections = [
            (object)[
                'textColor' => '#FFF',
                'width' => '60%',
                'height' => '384px',
                'padding' => 'px-24',
                'titleContent' => (object)[
                    'title' => 'Invoice Generator',
                    'size' => '48px',
                    'align' => 'center',
                ],
                'logo' => 'images/logos/logo-invoice.svg',
                'logoPosition' => 'top-left',
                'descriptionContent' => (object)[
                    'description' => 'Tired of manually creating invoices? Say hello to HubSpot\'s free online Invoice Generator! Make' .
                        ' professional invoices that showcase your brand and impress your customers. Then, manage your invoice with the HubSpot invoice integration.',
                    'image' => 'invoice',
                    'imagePosition' => 'right',
                ]
            ],
            (object)[
                'textColor' => '#FFF',
                'width' => '40%',
                'titleContent' => (object)[
                    'title' => 'How to Use HubSpot\'s Free Online Invoice Generator',
                    'size' => '32px',
                ],
                'descriptionContent' => (object)[
                    'description' => '<p>Use this free online invoice generator to create your very own professional invoice. Once you\'re done,' .
                        ' upload the invoice to HubSpot to effectively manage it and distribute it to customers. </p>' .
                        '<ul><li>1. Create your professional invoice by filling out each field in the template above.</li>' .
                        '<li>2. Download the PDF or upload your invoice to HubSpot\'s revenue tools.</li>' .
                        '<li>3. Manage this invoice and any future invoices with the HubSpot invoice integration. You can send it to customers, process payments, and analyze your revenue – all within the CRM.</li>' .
                        '</ul>' .
                        '<p>Make full use of HubSpot\'s Commerce Hub to streamline your business billing. Unlock other easy-to-use features such as quotes, billing automation, and revenue reporting, and more. </p>',
                    'icon' => 'invoice',
                    'iconPosition' => 'left',
                    'image' => 'https://www.hubspot.com/hs-fs/hubfs/Copy%20of%20Company%20News%20Blog%20Hero%20(3).png?width=1220&height=686&name=Copy%20of%20Company%20News%20Blog%20Hero%20(3).png',
                    'imagePosition' => 'bottom',
                    'imageSize' => '100%',
                ]
            ],
            (object)[
                'backgroundColor' => '#FFF',
                'textColor' => '#000',
                'width' => '60%',
                'buttons' => (object)[
                    'backgroundColor' => '#FF5C35',
                    'textColor' => '#FFF',
                    'text' => 'Create my invoice',
                    'href' => 'https://www.hubspot.com/products/invoice-generator',
                ],
                'titleContent' => (object)[
                    'title' => 'A custom invoice for your business',
                    'size' => '22px',
                ],
                'descriptionContent' => (object)[
                    'description' => '<p>Customize your invoice by adding your business details, logo, and changing the colors to fit your business branding.' .
                        ' Stand out from the competition with tailored invoices that reflect your professional identity.</p> <br>' .
                        '<p>Whether you\'re a small business owner or an enterprise, Invoice Generator allows you to effortlessly generate professional' .
                        ' invoices to impress your clients. Focus on what you do best and leave the invoicing design to us.</p>',
                    'image' => 'https://www.hubspot.com/hs-fs/hubfs/screenshot_2024-09-09_at_3.40.09___pm.png?width=380&height=399&name=screenshot_2024-09-09_at_3.40.09___pm.png',
                    'imagePosition' => 'left',
                    'imageSize' => '100%',
                ]
            ]
        ];

        return response()->json($sections);
    }

}
