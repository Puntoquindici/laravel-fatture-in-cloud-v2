<?php

namespace OfflineAgency\LaravelFattureInCloudV2\Tests\Fake\IssuedDocument;

use OfflineAgency\LaravelFattureInCloudV2\Tests\Fake\FakeResponse;

class Document extends FakeResponse
{
    public function getIssuedDocumentFakeDetail()
    {
        return (object)[
            'id' => 1,
            'type' => 'invoice',
            'year' => date('Y'),
            'numeration' => 'E',
            'subject' => '',
            'visible_subject' => '',
            'rc_center' => 'ecommerce',
            'amount_rivalsa' => 0,
            'amount_rivalsa_taxable' => 81,
            'amount_global_cassa_taxable' => 81,
            'amount_cassa' => 0,
            'amount_cassa_taxable' => 81,
            'amount_cassa2' => 0,
            'amount_cassa2_taxable' => 81,
            'amount_withholding_tax' => 0,
            'amount_withholding_tax_taxable' => 0,
            'amount_other_withholding_tax' => 0,
            'amount_enasarco_taxable' => 0,
            'amount_other_withholding_tax_taxable' => 81,
            'ei_cassa_type' => null,
            'ei_cassa2_type' => null,
            'ei_withholding_tax_causal' => null,
            'ei_other_withholding_tax_type' => null,
            'ei_other_withholding_tax_causal' => null,
            'stamp_duty' => 0,
            'use_gross_prices' => false,
            'e_invoice' => true,
            'delivery_note' => false,
            'accompanying_invoice' => false,
            'amount_net' => 81,
            'amount_vat' => 0,
            'amount_gross' => 81,
            'amount_due_discount' => 0,
            'h_margins' => 15,
            'v_margins' => 16,
            'show_payment_method' => false,
            'show_payments' => true,
            'show_totals' => 'all',
            'show_paypal_button' => false,
            'show_notification_button' => false,
            'is_marked' => false,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'entity' => (new Entity())->getEntityFake(),
            'date' => date('Y-m-d'),
            'number' => 1,
            'currency' => (new Currency())->getCurrencyFake(),
            'language' => (new Language())->getLanguageFake(),
            'notes' => '',
            'payment_method' => (new PaymentMethod())->getPaymentMethodFake(),
            'use_split_payment' => false,
            'merged_in' => null,
            'original_document' => null,
            'items_list' => [
                (new Item())->getItemFake(),
                (new Item())->getItemFake(),
            ],
            'payments_list' => [
                (new Payment())->getPaymentFake(),
            ],
            'extra_data' => (new ExtraData())->getExtraDataFake(),
            'rivalsa' => 0,
            'rivalsa_taxable' => 100,
            'cassa' => 0,
            'cassa2' => 0,
            'global_cassa_taxable' => 100,
            'cassa_taxable' => 100,
            'cassa2_taxable' => 0,
            'withholding_tax' => 0,
            'withholding_tax_taxable' => 0,
            'other_withholding_tax' => 0,
            'other_withholding_tax_taxable' => 100,
            'seen_date' => null,
            'next_due_date' => null,
            'template' => (new Template())->getTemplateFake(),
            'show_tspay_button' => false,
            'url' => 'https://fake_url.com',
            'attachment_url' => null,
            'ei_data' => (new EiData())->getEiDataFake(),
            'ei_raw' => null,
            'ei_ts_data' => (new EiTsData())->getEiTsDataFake(),
            'ei_status' => 'not_sent',
            'locked' => false,
            'has_ts_pay_pending_payment' => false,
            'is_first_e_invoice' => false
        ];
    }
}
