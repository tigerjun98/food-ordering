create table avored_products
(
    id                    int unsigned auto_increment
        primary key,
    type                  enum ('BASIC', 'VARIATION', 'DOWNLOADABLE', 'VARIABLE_PRODUCT') default 'BASIC'  not null,
    name                  varchar(255)                                                                     null,
    slug                  varchar(255)                                                                     null,
    sku                   varchar(255)                                                                     null,
    metric_unit_id        int                                                             default 1        null,
    metric_unit_volume_id int                                                             default 1        null,
    qty_per_unit          decimal(8, 2)                                                   default 1.00     null,
    autocount_itemid      varchar(255)                                                                     null,
    description           text                                                                             null,
    stroke                int                                                             default 1        not null,
    status                tinyint                                                                          null,
    in_stock              tinyint                                                                          null,
    track_stock           tinyint                                                                          null,
    qty                   decimal(10, 6)                                                                   null,
    is_taxable            tinyint                                                                          null,
    company_id            tinyint                                                         default 1        not null,
    product_form_id       tinyint                                                         default 1        null,
    is_discountable       tinyint                                                         default 0        not null,
    price                 decimal(10, 6)                                                                   null,
    cost_price            decimal(10, 6)                                                                   null,
    weight                double(8, 2)                                                                     null,
    width                 double(8, 2)                                                                     null,
    height                double(8, 2)                                                                     null,
    length                double(8, 2)                                                                     null,
    meta_title            varchar(255)                                                                     null,
    meta_description      varchar(255)                                                                     null,
    created_at            timestamp                                                                        null,
    updated_at            timestamp                                                                        null,
    non_tcm_price         decimal(10, 6)                                                  default 0.000000 not null,
    stock                 int                                                             default 0        not null,
    mal_license           varchar(255)                                                                     null,
    show_mal_license      tinyint(1)                                                      default 0        not null
)
    collate = utf8_unicode_ci;

INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (6, 'BASIC', '滋阴地黄合剂', '滋阴地黄合剂', 'K151', 1, 2, 500.00, '{[!SzE1MQ!]}', '功能与主治:
滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。

主要组成:
熟地，淮山，泽泻，丹皮，知母，茯苓，山茱萸，地骨皮。', 12, 1, 1, 0, -535.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '滋阴地黄合剂', '滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。', '2019-04-09 04:45:14', '2022-09-21 04:06:48', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (7, 'BASIC', '滋阴降火合剂', '滋阴降火合剂', 'K086', 1, 2, 500.00, '{[!SzA4Ng!]}', '功能与主治:
阴虚火盛，以及尿浑浊。

主要组成:
生地，白术，天冬，白芍，当归，川芎，知母，陈皮，熟地，甘草，生姜，乾姜，穿心莲。', 12, 1, 1, 0, -343.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '滋阴降火合剂', '阴虚火盛，以及尿浑浊。', '2019-04-09 04:50:32', '2022-09-21 04:06:48', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (8, 'BASIC', '鼻咽合剂', '鼻咽合剂Y', 'K027', 1, 2, 500.00, '{[!SzAyNw!]}', '功能与主治:
清热解毒，消肿通窍，用于急慢性鼻炎。

主要组成:
黄芩，白芷，薄荷，苍耳子，辛夷花，鹅不食草。', 13, 1, 1, 0, -842.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '鼻咽合剂', '功能与主治
清热解毒，消肿通窍，用于急慢性鼻炎。', '2019-04-09 04:52:51', '2022-09-09 09:26:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (9, 'BASIC', '银翘解毒合剂', '银翘解毒合剂', 'K020', 1, 2, 500.00, '{[!SzAyMA!]}', '功能与主治:
疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。

主要组成:
连翘，薄荷，荆芥，桔梗，甘草，金银花，淡豆豉，牛蒡子，淡竹叶。', 11, 1, 1, 0, -9999.999999, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '银翘解毒合剂', '功能与主治
疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。', '2019-04-09 04:58:25', '2022-09-28 01:28:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (10, 'BASIC', '浙贝合剂', '浙贝合剂', 'K193', 1, 2, 500.00, '{[!SzE5Mw!]}', '功能与主治：
清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。

主要组成：
浙贝，杏仁，知母，甘草，款冬花，五味子，桑白皮。', 10, 1, 1, 0, -2042.000000, 0, 1, 1, 0, 28.500000, null, 10, 10, 10, 10, '浙贝合剂', '清热润肺，化痰止咳。 用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。', '2019-04-09 05:01:08', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (11, 'BASIC', '川贝枇杷合剂', '川贝枇杷合剂', 'K178', 1, 2, 500.00, '{[!SzE3OA!]}', '功能与主治:
镇咳祛痰。 用于感冒及支气管炎引起的咳嗽。

主要组成:
川贝，桔梗，薄荷，枇杷叶，制半夏。', 3, 1, 1, 0, -1754.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '川贝枇杷合剂', '功能与主治
镇咳祛痰。 用于感冒及支气管炎引起的咳嗽。', '2019-04-09 05:02:30', '2022-09-28 08:09:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (12, 'BASIC', '一贯煎合剂', '一贯煎合剂', 'K090', 1, 2, 500.00, '{[!SzA5MA!]}', '功能与主治:
滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。

主要组成:
麦冬，当归，生地，枸杞，北沙参，川楝子。', 1, 1, 1, 0, -3395.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '一贯煎合剂', '滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。', '2019-04-24 08:39:50', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (13, 'BASIC', '八正散合剂', '八正散合剂', 'K040', 1, 2, 500.00, '{[!SzA0MA!]}', '功能与主治：
清热泻火，利水通淋。用于湿热下注，小便淋漓，短赤，急痛，尿道灼热涩痛。

主要组成：
通草，瞿麦，滑石，甘草，萹蓄，栀子，大黄，车前子，燈心草。', 2, 1, 1, 0, -1842.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '八正散合剂', '清热泻火，利水通淋。用于湿热下注，小便淋漓，短赤，急痛，尿道灼热涩痛。', '2019-04-24 08:51:16', '2022-09-26 07:55:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (14, 'BASIC', '二陈合剂', '二陈合剂', 'K113', 1, 2, 500.00, '{[!SzExMw!]}', '功能与主治：
燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。

主要组成：
陈皮，茯苓，甘草，生姜，制半夏。', 2, 1, 1, 0, -2695.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '二陈合剂', '燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。', '2019-04-24 09:33:46', '2022-09-28 01:32:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (15, 'BASIC', '二母宁嗽合剂', '二母宁嗽合剂', 'K174', 1, 2, 500.00, '{[!SzE3NA!]}', '功能与主治：
清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。

主要组成：
知母，黄芩，石膏，茯苓，陈皮，生姜，枳实，甘草，栀子，川贝母，桑白皮，瓜蒌皮，五味子。', 2, 1, 1, 0, -3800.000000, 0, 1, 1, 0, 28.500000, null, 10, 10, 10, 10, '二母宁嗽合剂', '清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。', '2019-04-24 09:35:49', '2022-09-26 03:20:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (16, 'BASIC', '二妙散合剂', '二妙散合剂', 'K233', 1, 2, 500.00, '{[!SzIzMw!]}', '功能与主治：
湿热下注引起的腰膝关节痛，湿疮，脚气肿痛。

主要组成：
苍术，穿心莲。', 2, 1, 1, 0, -1561.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '二妙散合剂', '湿热下注引起的腰膝关节痛，湿疮，脚气肿痛。', '2019-04-24 09:36:16', '2022-09-27 03:48:04', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (17, 'BASIC', '九味姜活合剂', '九味姜活合剂', 'K002', 1, 2, 500.00, '{[!SzAwMg!]}', '功能与主治：
发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。

主要组成：
姜活，防风，川芎，桂枝，甘草，苍术，白芷，黄芩，生地。', 2, 1, 1, 0, -9351.000000, 0, 1, 1, 0, 30.500000, null, 10, 10, 10, 10, '九味姜活合剂', '发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。', '2019-04-24 09:36:54', '2022-09-27 01:41:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (18, 'BASIC', '十味温胆合剂', '十味温胆合剂', 'K091', 1, 2, 500.00, '{[!SzA5MQ!]}', '功能与主治:
清胆除痰，和胃止呕。用于心神不安，触事易惊，心悸烦闷，神经衰弱，失眠易醒。

主要组成:
陈皮，甘草，枣仁，枳实，茯苓，党参，远志，熟地黄，五味子，制半夏。', 2, 1, 1, 0, -1312.000000, 0, 1, 1, 0, 33.000000, null, 10, 10, 10, 10, '十味温胆合剂', '清胆除痰，和胃止呕。用于心神不安，触事易惊，心悸烦闷，神经衰弱，失眠易醒。', '2019-04-24 09:37:35', '2022-09-27 01:31:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (19, 'BASIC', '十味甘麦大枣合剂', '十味甘麦大枣合剂', 'K092', 1, 2, 500.00, '{[!SzA5Mg!]}', '功能与主治:
滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。

主要组成:
大枣，淮山，甘草，天冬，玉竹，远志，浮小麦，五味子，酸枣仁，桑椹子。', 2, 1, 1, 0, -4963.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '十味甘麦大枣合剂', '滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。', '2019-04-24 09:38:12', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (20, 'BASIC', '川芎合剂', '川芎合剂', 'K003', 1, 2, 500.00, '{[!SzAwMw!]}', '功能与主治：
疏散风邪。因风热，风寒音起的各种酸痛（偏头痛，巅顶痛，眉梭骨痛等）目眩，关节痹痛，项强诸症。

主要组成：
防风，前胡，桂枝，川芎，菊花，党参，甘草，柴胡，制半夏。', 3, 1, 1, 0, -364.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '川芎合剂', '疏散风邪。因风热，风寒音起的各种酸痛（偏头痛，巅顶痛，眉梭骨痛等）目眩，关节痹痛，项强诸症。', '2019-04-24 09:40:33', '2022-09-14 02:15:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (21, 'BASIC', '川芎茶调合剂', '川芎茶调合剂Y', 'K004', 1, 2, 500.00, '{[!SzAwNA!]}', '功能与主治：
因风寒感胃引起头晕目眩，偏正头痛，发热恶寒等症。

主要组成：
川芎，荆芥，白芷，香附，姜活，防风，甘草，薄荷。', 3, 1, 1, 0, -3065.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '川芎茶调合剂', '因风寒感胃引起头景目眩，偏正头痛，发热恶寒等症。', '2019-04-24 09:41:25', '2022-09-27 07:17:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (23, 'BASIC', '三仁合剂', '三仁合剂', 'K042', 1, 2, 500.00, '{[!SzA0Mg!]}', '功能与主治：
清利湿热。用于治湿热初起的头痛恶寒，身重疼痛，面色淡黄，胸闷不饥，午后潮热，舌白不渴诸症。

主要组成：
杏仁，薏苡仁，滑石，通草，法半夏，淡竹叶，枳殼，白豆蔻。', 3, 1, 1, 0, -2948.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '三仁合剂', '清利湿热。用于治湿热初起的头痛恶寒，身重疼痛，面色淡黄，胸闷不饥，午后潮热，舌白不渴诸症。', '2019-04-24 09:42:13', '2022-09-27 07:17:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (24, 'BASIC', '三消合剂', '三消合剂', 'K118', 1, 2, 500.00, '{[!SzExOA!]}', '功能与主治：
清热润燥，缓解疲劳，滋阴解渴。

主要组成：
黄芪、茯苓、玄参、山药、仓术、白术、葛根、天花粉。', 3, 1, 1, 0, -616.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '三消合剂', '清热润燥，缓解疲劳，滋阴解渴。', '2019-04-24 09:42:34', '2022-08-02 01:36:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (25, 'BASIC', '上中下通用痛风合剂', '上中下通用痛风合剂', 'K152', 1, 2, 500.00, '{[!SzE1Mg!]}', '功能与主治：
燥湿清热，活血止痛。用于治风湿热痹，上下肢关节伸展不舒，周身骨节疼痛。

主要组成：
桂枝，神曲，苍术，姜活，红花，川芎，白芷，桃仁，龙胆草，胆南星。', 3, 1, 1, 0, -1378.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '上中下通用痛风合剂', '燥湿清热，活血止痛。用于治风湿热痹，上下肢关节伸展不舒，周身骨节疼痛。', '2019-04-24 09:43:06', '2022-09-27 01:30:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (26, 'BASIC', '小柴胡合剂', '小柴胡合剂', 'K043', 1, 2, 500.00, '{[!SzA0Mw!]}', '功能与主治：
和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。

主要组成：
柴胡，党参，黄芩，大枣，制半夏，甘草，生薑。', 3, 1, 1, 0, -9999.999999, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '小柴胡合剂', '和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。', '2019-04-24 09:43:30', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (27, 'BASIC', '小建中合剂', '小建中合剂', 'K114', 1, 2, 500.00, '{[!SzExNA!]}', '功能与主治:
温中补虚，和里缓急。主治虚劳发热，心悸，虚烦，腹中时痛等症。

主要组成:
桂枝，白芍，大枣，生姜，饴糖，炙甘草。', 3, 1, 1, 0, -4511.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '小建中合剂', '温中补虚，和里缓急。主治虚劳发热，心悸，虚烦，腹中时痛等症。', '2019-04-24 09:43:54', '2022-09-28 01:32:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (28, 'BASIC', '小儿七星茶合剂', '小儿七星茶合剂', 'K116', 1, 2, 500.00, '{[!SzExNg!]}', '功能与主治：
消热定惊，消衣。用于小儿疳积，蕴热，衣滞，受惊，夜睡不宁，消化不良，咬牙切齿，烦躁哭闹，不思饮食。

主要组成：
谷芽，蝉蜕，甘草，钩藤，山楂，淡竹叶，薏苡仁。', 3, 1, 1, 0, -1232.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '小儿七星茶合剂', '消热定惊，消衣。用于小儿疳积，蕴热，衣滞，受惊，夜睡不宁，消化不良，咬牙切齿，烦躁哭闹，不思饮食。', '2019-04-24 09:44:21', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (29, 'BASIC', '小儿开胃合剂', '小儿开胃合剂', 'K117', 1, 2, 500.00, '{[!SzExNw!]}', '功能与主治：
开胃除积。主治小儿食欲不振，面黄肌瘦，疳积等。

主要组成：
白术、麦芽、党参、茯苓、神曲、陈皮、木香、生姜、使君子。', 3, 1, 1, 0, -686.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '小儿开胃合剂', '开胃除积。主治小儿食欲不振，面黄肌瘦，疳积等。', '2019-04-24 09:44:46', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (30, 'BASIC', '小儿止咳合剂', '小儿止咳合剂', 'K175', 1, 2, 500.00, '{[!SzE3NQ!]}', '功能与主治：
祛痰镇咳。用于小儿外感咳嗽痰多，咽痒喷嚏，鼻塞流涕，支气管炎等症。

主要组成：
桔梗，甘草，陈皮，川贝母。', 3, 1, 1, 0, -1191.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '小儿止咳合剂', '祛痰镇咳。用于小儿外感咳嗽痰多，咽痒喷嚏，鼻塞流涕，支气管炎等症。', '2019-04-24 09:45:12', '2022-09-27 23:56:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (31, 'BASIC', '小青龙合剂', '小青龙合剂', 'K176', 1, 2, 500.00, '{[!SzE3Ng!]}', '功能与主治：
解表散寒，温肺化软。用于支气管炎之咳喘，百日咳，发热，恶寒，头痛等症。

主要组成：
白芍，桂枝，甘草，干姜，生姜，紫苑，制半夏，五味子。', 3, 1, 1, 0, -6369.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '小青龙合剂', '解表散寒，温肺化软。用于支气管炎之咳喘，百日咳，发热，恶寒，头痛等症。', '2019-04-24 09:45:38', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (32, 'BASIC', '千金苇茎合剂', '千金苇茎合剂', 'K177', 1, 2, 500.00, '{[!SzE3Nw!]}', '功能与主治：
清热化痰，活血祛瘀。用于咳嗽胸痛，发热，咳吐脓血臭痰，胸中甲错等。

主要组成：
芦根，桃仁，薏苡仁，冬瓜子。', 3, 1, 1, 0, -2090.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '千金苇茎合剂', '清热化痰，活血祛瘀。用于咳嗽胸痛，发热，咳吐脓血臭痰，胸中甲错等。', '2019-04-24 09:46:07', '2022-09-21 03:35:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (33, 'BASIC', '五苓合剂', '五苓合剂', 'K044', 1, 2, 500.00, '{[!SzA0NA!]}', '功能与主治：
化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。

主要组成：
猪苓，茯苓，泽泻，白术，肉桂。', 4, 1, 1, 0, -5653.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '五苓合剂', null, '2019-04-24 09:46:37', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (34, 'BASIC', '五味消毒合剂', '五味消毒合剂', 'K070', 1, 2, 500.00, '{[!SzA3MA!]}', '功能与主治：
缓解身体热气，轻微肿胀及疼痛。

主要组成：
连翘，野菊花，金银花，蒲公英，紫花地丁。', 4, 1, 1, 0, -5580.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '五味消毒合剂', '缓解身体热气，轻微肿胀及疼痛。', '2019-04-24 09:47:01', '2022-09-28 08:09:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (35, 'BASIC', '五藤合剂', '五藤合剂', 'K153', 1, 2, 500.00, '{[!SzE1Mw!]}', '功能与主治：
活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。

主要组成：
红藤，当归，川芎，赤芍，红花，桃仁，络石藤，鸡血藤，海风藤，伸筋藤。', 3, 1, 1, 0, -1616.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '五藤合剂', '活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。', '2019-04-24 09:47:19', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (36, 'BASIC', '六子衍宗合剂', '六子衍宗合剂', 'K120', 1, 2, 500.00, '{[!SzEyMA!]}', '功能与主治:
补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。

主要组成:
枸杞子，菟丝子，覆盆子，五味子，车前子，补骨脂，羊淫藿。', 4, 1, 1, 0, -1418.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '六子衍宗合剂', '补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。', '2019-04-24 09:47:44', '2022-09-27 01:31:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (37, 'BASIC', '六味地黄合剂', '六味地黄合剂', 'K121', 1, 2, 500.00, '{[!SzEyMQ!]}', '功能与主治:
滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。

主要组成:
熟地黄，山茱萸，丹皮，淮山，茯苓，泽泻。', 4, 1, 1, 0, -7119.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '六味地黄合剂', '滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。', '2019-04-24 09:48:09', '2022-10-03 09:10:01', 65.000000, 100, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (38, 'BASIC', '六君子合剂', '六君子合剂', 'K122', 1, 2, 500.00, '{[!SzEyMg!]}', '功能与主治：
补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。

主要组成：
陈皮，白术，党参，茯苓，甘草，制半夏。', 4, 1, 1, 0, -1771.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '六君子合剂', '补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。', '2019-04-24 09:48:35', '2022-09-27 01:31:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (39, 'BASIC', '木香顺气合剂', '木香顺气合剂', 'K123', 1, 2, 500.00, '{[!SzEyMw!]}', '功能与主治：
气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。

主要组成：
木香，香附，苍术，枳殻，陈皮，甘草。', 4, 1, 1, 0, -1327.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '木香顺气合剂', '气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。', '2019-04-24 09:49:07', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (40, 'BASIC', '丹枝逍遥合剂', '丹枝逍遥合剂', 'K045', 1, 2, 500.00, '{[!SzA0NQ!]}', '功能与主治：
疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。

主要组成：
当归，白术，茯苓，甘草，白芍，丹皮，栀子，柴胡，薄荷，生薑。', 4, 1, 1, 0, -9848.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '丹枝逍遥合剂', '疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。', '2019-04-24 09:49:30', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (41, 'BASIC', '丹参合剂', '丹参合剂', 'K214', 1, 2, 500.00, '{[!SzIxNA!]}', '功能与主治：
理气活血。用于血瘀气滞，心腹胃膈疼痛。

主要组成：
丹参，砂仁，檀香。', 4, 1, 1, 0, -1915.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '丹参合剂', '理气活血。用于血瘀气滞，心腹胃膈疼痛。', '2019-04-24 09:49:54', '2022-09-27 01:31:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (42, 'BASIC', '天王补心合剂', '天王补心合剂', 'K093', 1, 2, 500.00, '{[!SzA5Mw!]}', '功能与主治:
滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。

主要组成:
生地，党参，玄参，丹参，茯苓，桔梗，远志，天冬，当归，麦冬，姜黄，酸枣仁，柏子仁，五味子。', 4, 1, 1, 0, -5446.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '天王补心合剂', '滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。', '2019-04-24 09:50:17', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (43, 'BASIC', '天麻钩藤合剂', '天麻钩藤合剂', 'K094', 1, 2, 500.00, '{[!SzA5NA!]}', '功能与主治：
肝肠上亢功能症，头晕，面色如醉，项强，头痛，肢体不利。

主要组成：
天麻，杜仲，黄芩，钩藤，栀子，茯苓，桑寄生，川牛膝，益母草，石决明，夜交藤。', 4, 1, 1, 0, -4165.000000, 0, 1, 1, 0, 35.000000, null, 10, 10, 10, 10, '天麻钩藤合剂', '肝肠上亢功能症，头晕，面色如醉，项强，头痛，肢体不利。', '2019-04-24 09:50:42', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (44, 'BASIC', '少腹逐瘀合剂', '少腹逐瘀合剂', 'K078', 1, 2, 500.00, '{[!SzA3OA!]}', '功能与主治:
活血祛瘀，温经止痛。主治少腹瘀血积块，少腹满痛，月事不调，崩漏兼少腹痧痛等症。

主要组成：
蒲黄，干姜，没药，当归，赤芍，川芎，肉桂，姜黄，小茴香，五灵脂。', 4, 1, 1, 0, -3810.000000, 0, 1, 1, 0, 31.500000, null, 10, 10, 10, 10, '少腹逐瘀合剂', '活血祛瘀，温经止痛。主治少腹瘀血积块，少腹满痛，月事不调，崩漏兼少腹痧痛等症。', '2019-04-24 09:51:08', '2022-09-27 01:56:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (45, 'BASIC', '开胃消食合剂', '开胃消食合剂', 'K130', 1, 2, 500.00, '{[!SzEzMA!]}', '功能与主治：
开胃消食。小儿厌食症，食欲不振，消化不良。

主要组成：
神曲，泽泻，枳实，陈皮，茯苓，干姜，麦芽，青皮，白术，制半夏。', 4, 1, 1, 0, -913.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '开胃消食合剂', '开胃消食。小儿厌食症，食欲不振，消化不良。', '2019-04-24 09:51:35', '2022-09-23 07:33:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (46, 'BASIC', '风湿止痛合剂', '风湿止痛合剂', 'K159', 1, 2, 500.00, '{[!SzE1OQ!]}', '功能与主治：
祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。

主要组成：
独活，姜活，牛膝，木瓜，黄芩，防风，豨莶草，臭梧桐，粉萆解。', 4, 1, 1, 0, -1516.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '风湿止痛合剂', '祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。', '2019-04-24 09:51:58', '2022-09-09 04:57:45', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (47, 'BASIC', '止咳合剂', '止咳合剂Y', 'K179', 1, 2, 500.00, '{[!SzE3OQ!]}', '功能与主治：
止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。

主要组成：
荆芥，桔梗，紫苑，杏仁，甘草，陈皮，莱菔子。', 4, 1, 1, 0, -3007.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '止咳合剂', '止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。', '2019-04-24 09:53:09', '2022-09-28 06:39:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (48, 'BASIC', '止嗽散合剂', '止嗽散合剂', 'K181', 1, 2, 500.00, '{[!SzE4MQ!]}', '功能与主治：
缓解积痰和咳嗽等症状。

主要组成：
荆芥，百部，紫苑，桔梗，陈皮，白前，甘草。', 4, 1, 1, 0, -2061.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '止嗽散合剂', '缓解积痰和咳嗽等症状。', '2019-04-24 09:53:39', '2022-09-26 19:33:43', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (49, 'BASIC', '化痰定喘合剂', '化痰定喘合剂', 'K183', 1, 2, 500.00, '{[!SzE4Mw!]}', '功能与主治：
降气化痰，止咳平喘。主治脾胃虚弱，食欲不振，胸膈痞满，咳嗽川促，痰多胸闷，上逆呕吐。

主要组成：
茯苓，陈皮，甘草，杏仁，枳殼，紫苏叶，莱菔子，制半夏，白芥子。', 4, 1, 1, 0, -1286.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '化痰定喘合剂', '降气化痰，止咳平喘。主治脾胃虚弱，食欲不振，胸膈痞满，咳嗽川促，痰多胸 闷，上逆呕吐。', '2019-04-24 09:54:04', '2022-09-28 06:31:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (50, 'BASIC', '四物合剂', '四物合剂', 'K058', 1, 2, 500.00, '{[!SzA1OA!]}', '功能与主治：
补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。

主要组成：
当归，熟地，白芍，川芎。', 5, 1, 1, 0, -2314.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '四物合剂', '补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。', '2019-04-26 07:01:45', '2022-09-26 05:01:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (51, 'BASIC', '四君子合剂', '四君子合剂', 'K126', 1, 2, 500.00, '{[!SzEyNg!]}', '功能与主治：
益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。

主要组成：
党参，白术，茯苓，甘草。', 5, 1, 1, 0, -2178.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '四君子合剂', '益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。', '2019-04-26 07:02:31', '2022-09-26 05:01:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (52, 'BASIC', '加味银翘合剂', '加味银翘合剂', 'K006', 1, 2, 500.00, '{[!SzAwNg!]}', '功能与主治:
疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。

主要组成:
连翘，荆芥，甘草，桔梗，黄芩，石膏，金银花，牛蒡子，淡竹叶，淡豆豉。', 5, 0, 1, 0, -6.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '加味银翘合剂', null, '2019-04-26 07:05:54', '2021-11-02 08:48:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (53, 'BASIC', '外感回春合剂', '外感回春合剂', 'K009', 1, 2, 500.00, '{[!SzAwOQ!]}', '功能与主治：
传统上用缓解身体热气。

主要组成：
姜活，黄芩，蒲公英。', 5, 0, 1, 0, null, 0, 1, 1, 0, 30.800000, null, 10, 10, 10, 10, '外感回春合剂', '传统上用缓解身体热气。', '2019-04-26 07:06:22', '2021-11-02 08:49:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (54, 'BASIC', '白虎合剂', '白虎合剂', 'K025', 1, 2, 500.00, '{[!SzAyNQ!]}', '功能与主治：
清热生津。主治阳明经热盛所致的壮热，烦渴，口干舌燥，面赤恶热大汗出等症。

主要组成：
知母，石裔，甘草，殼芽。', 5, 1, 1, 0, -1820.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '白虎合剂', '清热生津。主治阳明经热盛所致的壮热，烦渴，口干舌燥，面赤恶热大汗出等症。', '2019-04-26 07:21:47', '2022-09-21 02:50:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (55, 'BASIC', '白果定喘合剂', '白果定喘合剂', 'K185', 1, 2, 500.00, '{[!SzE4NQ!]}', '功能与主治：
宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。

主要组成：
白果，黄芩，苏子，甘草，杏仁，生姜，款冬花，桑白皮，制半夏，', 5, 1, 1, 0, -4904.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '白果定喘合剂', '宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。', '2019-04-26 07:22:19', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (56, 'BASIC', '石膏合剂', '石膏合剂', 'K026', 1, 2, 500.00, '{[!SzAyNg!]}', '功能与主治:
疏风散寒，解热宣肺。适用于伤风感冒，流行性感冒，头痛鼻塞，外感风寒，项强身痛，咳嗽无汗等症。

主要组成:
石膏，葛根，栀子，白芍，百合，升麻，甘草，川贝母。', 5, 1, 1, 0, -1489.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '石膏合剂', '疏风散寒，解热宣肺。适用于伤风感冒，流行性感冒，头痛鼻塞，外感风寒，项强身痛，咳嗽无汗等症。', '2019-04-26 07:39:58', '2022-09-27 01:58:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (57, 'BASIC', '平瘿合剂', '平瘿合剂', 'K073', 1, 2, 500.00, '{[!SzA3Mw!]}', '功能与主治：
甲状腺肿大。烦躁不安，头晕目眩，少寐多梦，口干咽燥。

主要组成：
玄参，生地，白芍，浙贝，当归，三棱，莪术，茯苓，牡蛎，青皮，黄药子，山茱萸，夏枯草。', 5, 1, 1, 0, -1313.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '平瘿合剂', '甲状腺肿大。烦躁不安，头晕目眩，少寐多梦，口干咽燥。', '2019-04-26 07:40:20', '2022-09-27 07:17:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (58, 'BASIC', '甘露合剂', '甘露合剂', 'K028', 1, 2, 500.00, '{[!SzAyOA!]}', '功能与主治：
舒缓身体热气及口疮。

主要组成：
生地，石斛，黄芩，茵陈，熟地，天冬，麦冬，枳殼，甘草，枇杷叶。', 5, 1, 1, 0, -2425.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '甘露合剂', null, '2019-04-26 07:40:46', '2022-10-31 16:59:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (59, 'BASIC', '甘露消毒合剂', '甘露消毒合剂', 'K048', 1, 2, 500.00, '{[!SzA0OA!]}', '功能与主治：
化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。

主要组成：
连翘，霍香，川贝，通草，茵陈，黄芩，滑石，薄荷，射干，石菖蒲，白豆蔻。', 5, 1, 1, 0, -5699.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '甘露消毒合剂', '化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。', '2019-04-26 07:41:21', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (60, 'BASIC', '生脉饮合剂', '生脉饮合剂', 'K095', 1, 2, 500.00, '{[!SzA5NQ!]}', '功能与主治：
益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。

主要组成：
党参，麦冬，五味子。', 5, 1, 1, 0, -4851.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '生脉饮合剂', '益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。', '2019-04-26 07:43:52', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (61, 'BASIC', '玉屏风合剂', '玉屏风合剂', 'K096', 1, 2, 500.00, '{[!SzA5Ng!]}', '功能与主治：
益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。

主要组成：
黄芪，白术，防风。', 5, 1, 1, 0, -1934.000000, 0, 1, 1, 0, 35.500000, null, 10, 10, 10, 10, '玉屏风合剂', '益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。', '2019-04-26 07:44:38', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (62, 'BASIC', '玉女煎合剂', '玉女煎合剂', 'K125', 1, 2, 500.00, '{[!SzEyNQ!]}', '功能与主治：
清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。

主要组成：
石膏，熟地，麦冬，知母，牛膝。', 5, 1, 1, 0, -2477.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '玉女煎合剂', '清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。', '2019-04-26 07:45:33', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (63, 'BASIC', '归脾合剂', '归脾合剂', 'K059', 1, 2, 500.00, '{[!SzA1OQ!]}', '功能与主治：
健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。

主要组成：
党参，黄芪，白术，茯苓，当归，远志，生薑，大枣，木香，甘草，酸枣仁，桂圆肉。', 5, 1, 1, 0, -6790.000000, 0, 1, 1, 0, 32.000000, null, 10, 10, 10, 10, '归脾合剂', '健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。', '2019-04-26 07:45:55', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (64, 'BASIC', '仙方活命合剂', '仙方活命合剂', 'K071', 1, 2, 500.00, '{[!SzA3MQ!]}', '功能与主治：
清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。

主要组成：
当归，陈皮，防风，甘草，赤芍，白芷，没药，乳香，莪术，金银花，皂角刺，川贝母，天花粉。', 5, 1, 1, 0, -2589.000000, 0, 1, 1, 0, 34.500000, null, 10, 10, 10, 10, '仙方活命合剂', '清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。', '2019-04-26 07:46:20', '2022-09-22 03:43:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (65, 'BASIC', '龙胆泻肝合剂', '龙胆泻肝合剂', 'K097', 1, 2, 500.00, '{[!SzA5Nw!]}', '功能与主治：
泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。

主要组成：
泽泻，生地，柴胡，通草，甘草，黄芩，栀子，当归，龙胆草，车前子。', 5, 1, 1, 0, -6377.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '龙胆泻肝合剂', '泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。', '2019-04-26 07:46:51', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (66, 'BASIC', '平胃合剂', '平胃合剂', 'K128', 1, 2, 500.00, '{[!SzEyOA!]}', '功能与主治：
行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。

主要组成：
苍术，陈皮，枳壳，炙甘草。', 5, 1, 1, 0, -9999.999999, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '平胃合剂', '行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。', '2019-04-26 07:47:27', '2022-09-27 09:06:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (67, 'BASIC', '半夏泻心合剂', '半夏泻心合剂', 'K129', 1, 2, 500.00, '{[!SzEyOQ!]}', '功能与主治：
梅核气，喉肿有物感，胸闷气急，中脘痞满。

主要组成：
黄芩，干姜，党参，甘草，大枣，制半夏，穿心莲。', 5, 1, 1, 0, -4885.000000, 0, 1, 1, 0, 35.000000, null, 10, 10, 10, 10, '半夏泻心合剂', '梅核气，喉肿有物感，胸闷气急，中脘痞满。', '2019-04-26 07:47:52', '2022-09-28 05:18:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (68, 'BASIC', '半夏厚朴合剂', '半夏厚朴合剂', 'K184', 1, 2, 500.00, '{[!SzE4NA!]}', '功能与主治：
梅核气，喉肿有物感，胸闷气急，中脘痞满。

主要组成：
茯苓，生姜，枳殼，制半夏，紫苏叶。', 5, 1, 1, 0, -3120.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '半夏厚朴合剂', '梅核气，喉肿有物感，胸闷气急，中脘痞满。', '2019-04-26 07:48:20', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (69, 'BASIC', '皮肤止痒合剂', '皮肤止痒合剂', 'K211', 1, 2, 500.00, '{[!SzIxMQ!]}', '功能与主治：
清热燥湿，祛风解毒。用于急慢性湿疹，风疹，阴囊炎等症。

主要组成：
菊花，丹皮，茯苓，黄芩，苦参，通草，蝉蜕，防风，栀子，赤芍，地肤子，白疾藜。', 5, 1, 1, 0, -1483.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '皮肤止痒合剂', '清热燥湿，祛风解毒。用于急慢性湿疹，风疹，阴囊炎等症。', '2019-04-26 07:48:52', '2022-09-23 09:37:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (70, 'BASIC', '辛夷合剂', '辛夷合剂', 'K010', 1, 2, 500.00, '{[!SzAxMA!]}', '功能与主治:
清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。

主要组成:
川芎，白芷，菊花，前胡，石膏，生地，白术，薄荷，陈皮，茯苓，幸夷花，炙甘草。', 6, 1, 1, 0, -3373.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '辛夷合剂', '清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。', '2019-04-26 07:51:42', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (71, 'BASIC', '杏苏饮合剂', '杏苏饮合剂Y', 'K011', 1, 2, 500.00, '{[!SzAxMQ!]}', '功能与主治:
疏风解表，清热解毒，宜肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。

主要组成:
甘草，紫苏，陈皮，生薑，杏仁，制半夏，枳殻，前胡，茯苓，大枣，桔梗。', 6, 1, 1, 0, -1693.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '杏苏散合剂', '疏风解表，清热解毒，宜肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。', '2019-06-05 11:20:38', '2022-09-23 09:37:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (72, 'BASIC', '竹叶石膏合剂', '竹叶石膏合剂Y', 'K029', 1, 2, 500.00, '{[!SzAyOQ!]}', '功能与主治：
益气养阴，降逆。用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。

主要组成：
竹叶，生石膏，太子参，麦冬，甘草，制半夏，梗米。', 6, 1, 1, 0, -5572.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '竹叶石膏合剂', '益气养阴，降逆。用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。', '2019-06-05 11:21:46', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (73, 'BASIC', '防风通圣合剂', '防风通圣合剂Y', 'K030', 1, 2, 500.00, '{[!SzAzMA!]}', '功能与主治：
解表通里，清热解毒。用于感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。

主要组成：
防风，川芎，当归，白芍，连翘，石裔，黄芩，桔梗，滑石，荆芥，白术，栀子，甘草，薄荷，大黄，芒硝，生薑。', 6, 1, 1, 0, -2325.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '防风通圣合剂', '解表通里，清热解毒。用于感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。', '2019-06-05 11:22:51', '2022-09-27 07:18:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (74, 'BASIC', '导赤散合剂', '导赤散合剂Y', 'K046', 1, 2, 500.00, '{[!SzA0Ng!]}', '功能与主治：
清心利水。用于心经热盛，面赤心烦，口腔炎，尿道炎，小便淋痛不舒，茎中作痛，口腔糜烂，舌疮。

主要组成：
生地，竹叶，通草，甘草。', 6, 1, 1, 0, -1178.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '导赤散合剂', '清心利水。用于心经热盛，面赤心烦，口腔炎，尿道炎，小便淋痛不舒，茎中作痛，口腔糜烂，舌疮。', '2019-06-05 11:25:50', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (75, 'BASIC', '妇科种子合剂', '妇科种子合剂Y', 'K060', 1, 2, 500.00, '{[!SzA2MA!]}', '功能与主治：
养血调经，调补冲任。主治妇人血虚气滞，赤白带下，子宫虚寒不孕，久服气血调和，有助孕育。

主要组成：
当归，川芎，阿膠，白芍，丹参，杜仲，川断，艾叶，香附，黄芩，熟地，益母草。', 6, 1, 1, 0, -545.000000, 0, 1, 1, 0, 89.000000, null, 10, 10, 10, 10, '妇科种子合剂', '养血调经，调补冲任。主治妇人血虚气滞，赤白带下，子宫虚寒不孕，久服气血调和，有助孕育。', '2019-06-05 11:27:01', '2022-09-26 03:20:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (76, 'BASIC', '血府逐瘀合剂', '血府逐瘀合剂Y', 'K082', 1, 2, 500.00, '{[!SzA4Mg!]}', '功能与主治：
活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。

主要组成：
当归，牛膝，红花，生地，桃仁，枳殼，赤芍，柴胡，甘草，桔梗，川芎。', 6, 1, 1, 0, -8195.000000, 0, 1, 1, 0, 28.500000, null, 10, 10, 10, 10, '血府逐瘀合剂', '活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。', '2019-06-05 11:28:14', '2022-09-27 01:56:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (77, 'BASIC', '血平合剂', '血平合剂', 'K100', 1, 2, 500.00, '{[!SzEwMA!]}', '功能与主治：
促进血液循环，缓解头痛及头晕。

主要组成：
钩藤，槐花，黄芩，升麻，牛藤，黄精，珍珠，连翘，毛冬青，桑寄生，夏枯草，谷精草。', 6, 1, 1, 0, -308.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '血平合剂', '促进血液循环，缓解头痛及头晕。', '2019-06-05 11:29:19', '2022-09-18 09:03:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (78, 'BASIC', '安神合剂', '安神合剂Y', 'K101', 1, 2, 500.00, '{[!SzEwMQ!]}', '功能与主治：
益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。

主要组成：
生地，玄参，丹参，桑椹，女贞子，夜交藤，合欢花，合欢皮。', 6, 1, 1, 0, -1546.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '安神合剂', '益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。', '2019-06-05 11:32:34', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (79, 'BASIC', '芍药甘草合剂', '芍药甘草合剂Y', 'K134', 1, 2, 500.00, '{[!SzEzNA!]}', '功能与主治：
疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。

主要组成：
白芍，甘草。', 6, 1, 1, 0, -3064.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '芍药甘草合剂', '疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。', '2019-06-05 11:33:34', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (80, 'BASIC', '当归拈痛合剂', '当归拈痛合剂Y', 'K155', 1, 2, 500.00, '{[!SzE1NQ!]}', '功能与主治：
祛风燥湿，和血止痛。用于急性关节红脾骨痛，湿热，疮疡，肩背沉重，肢节疼痛，胸胁不利等症。

主要组成：
当归，葛根，泽泻，防风，知母，姜活，升麻，茵陈，白术，甘草，猪苓，黄芩，苦参，苍术，党参。', 6, 1, 1, 0, -1039.000000, 0, 1, 1, 0, 33.000000, null, 10, 10, 10, 10, '当归拈痛合剂', '祛风燥湿，和血止痛。用于急性关节红脾骨痛，湿热，疮疡，肩背沉重，肢节疼痛，胸胁不利等症。', '2019-06-05 11:34:33', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (81, 'BASIC', '当归四逆合剂', '当归四逆合剂Y', 'K156', 1, 2, 500.00, '{[!SzE1Ng!]}', '功能与主治：
用于寒凝经脉，手足厥冷，肢体痹痛等症。

主要组成：
当归，桂枝，白芍，通草，大枣，干姜，炙甘草。', 6, 1, 1, 0, -1932.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '当归四逆合剂', '用于寒凝经脉，手足厥冷，肢体痹痛等症。', '2019-06-05 11:36:32', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (82, 'BASIC', '百合固金合剂', '百合固金合剂', 'K186', 1, 2, 500.00, '{[!SzE4Ng!]}', '功能与主治：
缓解咳嗽，喉咙痛，热气及化痰。

主要组成：
玄参，生地，熟地，贝母，桔梗，麦冬，白芍，百合，当归，甘草。', 6, 1, 1, 0, -959.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '百 合 固 金 合 剂', null, '2019-06-05 11:37:48', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (83, 'BASIC', '失笑散合剂', '失笑散合剂', 'K215', 1, 2, 500.00, '{[!SzIxNQ!]}', '功能与主治：
用于改善血液循环。

主要组成：
蒲黄，五灵脂。', 6, 1, 1, 0, -535.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '失笑散合剂', '用于改善血液循环。', '2019-06-05 11:39:05', '2022-09-27 08:06:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (84, 'BASIC', '阳和合剂', '阳和合剂Y', 'K218', 1, 2, 500.00, '{[!SzIxOA!]}', '功能与主治：
疖疽流注，鹤膝风，脉管炎。

主要组成：
肉桂，干姜，生姜，甘草，熟地黄，鹿角膠，白芥子。', 6, 1, 1, 1, -61.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '阳和合剂', '疖疽流注，鹤膝风，脉管炎。', '2019-06-05 11:40:24', '2022-01-12 06:53:43', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (85, 'BASIC', '壮腰益精合剂', '壮腰益精合剂Y', 'K224', 1, 2, 500.00, '{[!SzIyNA!]}', '功能与主治：
壮腰健肾。 

主要组成：
枸杞子，淫羊藿，巴戟天，肉蓰蓉。', 6, 1, 1, 0, -1560.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '壮 腰 益 精 合 剂', '壮腰健肾。', '2019-06-05 11:41:56', '2022-09-19 03:55:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (86, 'BASIC', '杜仲合剂', '杜仲合剂Y', 'K083', 1, 2, 500.00, '{[!SzA4Mw!]}', '功能与主治：
活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。

主要组成：
杜仲，续断，生地，赤芍，当归，丹皮，桃仁，肉桂，乌药，薑黄。', 7, 1, 1, 0, -5917.000000, 0, 1, 1, 0, 33.000000, null, 10, 10, 10, 10, '杜仲合剂', '活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。', '2019-06-05 11:46:12', '2022-09-26 08:40:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (87, 'BASIC', '补阳还五合剂', '补阳还五合剂Y', 'K089', 1, 2, 500.00, '{[!SzA4OQ!]}', '功能与主治：
补气活血，通络祛瘀。用于治中风后逍症，症见半身不遂，口眼歪科，语言不利，口角流涎，手足麻木等。

主要组成：
黄芪，当归，赤芍，地龙，川芎，桃仁，红花。', 7, 1, 1, 0, -6742.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '补阳还五合剂', '补气活血，通络祛瘀。用于治中风后逍症，症见半身不遂，口眼歪科，语言不利，口角流涎，手足麻木等。', '2019-06-05 11:47:27', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (88, 'BASIC', '补中益气合剂', '补中益气合剂Y', 'K108', 1, 2, 500.00, '{[!SzEwOA!]}', '功能与主治：
补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。

主要组成：
黄芪，党参，甘草，大枣，白术，陈皮，柴胡，当归，干姜，升麻。', 7, 1, 1, 0, -9709.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '补中益气合剂', '补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。', '2019-06-05 11:48:34', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (89, 'BASIC', '杞菊地黄合剂', '杞菊地黄合剂Y', 'K131', 1, 2, 500.00, '{[!SzEzMQ!]}', '功能与主治：
滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。

主要组成：
杞子，菊花，熟地，淮山，丹皮，泽泻，茯苓，山茱萸。', 7, 1, 1, 0, -2431.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '杞 菊 地 黄 合 剂', '滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。', '2019-06-05 11:49:47', '2022-09-27 01:41:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (90, 'BASIC', '芳香化湿合剂', '芳香化湿合剂Y', 'K135', 1, 2, 500.00, '{[!SzEzNQ!]}', '功能与主治：
胃脘痛，慢性胃炎，食积，消化不良。

主要组成：
藿香，陈皮，仓术，茯苓，泽泻，佩兰，地肤子，白鲜皮。', 7, 1, 1, 0, -602.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '芳香化湿合剂', '胃脘痛，慢性胃炎，食积，消化不良。', '2019-06-05 11:52:39', '2022-09-27 07:17:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (91, 'BASIC', '苏子降气合剂', '苏子降气合剂Y', 'K187', 1, 2, 500.00, '{[!SzE4Nw!]}', '功能与主治：
降气平喘，温化寒痰。主治痰延壅盛，咳喘气短，胸膈满闷，咽喉不利等诸症。

主要组成：
苏子，当归，前胡，陈皮，枳殼，沉香，甘草，制半夏。', 7, 1, 1, 0, -1077.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '苏子降气合剂', '降气平喘，温化寒痰。主治痰延壅盛，咳喘气短，胸膈满闷，咽喉不利等诸症。', '2019-06-05 11:53:59', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (92, 'BASIC', '沙参麦冬合剂', '沙参麦冬合剂Y', 'K247', 1, 2, 500.00, '{[!SzI0Nw!]}', '功能与主治：
滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。

主要组成：
玉竹，甘草，桑叶，麦冬，扁豆，北沙参，天花粉。', 7, 1, 1, 0, -1351.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '沙参麦冬合剂', '滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。', '2019-06-05 11:55:12', '2022-09-27 01:31:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (93, 'BASIC', '參苓败毒合剂', '參苓败毒合剂', 'K001', 1, 2, 500.00, '{[!SzAwMQ!]}', '功能与主治：益气解表，散风祛湿。用于感冒头痛，恶寒壮热，身体烦疼，鼻塞声重，风痰头痛，寒壅咳嗽，时气疫痈，湿毒斑疹。


主要组成：柴胡，川芎，姜活，甘草，茯苓，独活，桔梗，枳殼，薄荷，党参，前胡，生薑。', 8, 1, 1, 0, -34.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '參苓败毒合剂', '益气解表，散风祛湿。用于感冒头痛，恶寒壮热，身体烦疼，鼻塞声重，风痰头痛，寒壅咳嗽，时气疫痈，湿毒斑疹。', '2019-06-05 11:56:43', '2022-09-18 02:03:59', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (94, 'BASIC', '参灵五子合剂', '参灵五子合剂Y', 'K140', 1, 2, 500.00, '{[!SzE0MA!]}', '功能与主治：
滋补肝肾，养阴益精。用于下元亏损，未老先衰，肾阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。

主要组成：
党参，枸杞子，菟丝子，车前子，覆盆子，五味子，淫羊藿。', 8, 1, 1, 0, -939.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '参灵五子合剂', '滋补肝肾，养阴益精。用于下元亏损，未老先衰，肾阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。', '2019-06-05 11:58:05', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (95, 'BASIC', '参苓白术合剂', '参苓白术合剂Y', 'K141', 1, 2, 500.00, '{[!SzE0MQ!]}', '功能与主治：
补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。

主要组成：
人参，莲子，桔梗，白术，淮山，砂仁，茯苓，甘草，白扁豆，薏苡仁。', 8, 1, 1, 0, -3174.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '参苓白术合剂', '补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。', '2019-06-05 11:59:46', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (96, 'BASIC', '枝芩合剂', '枝芩合剂Y', 'K031', 1, 2, 500.00, '{[!SzAzMQ!]}', '功能与主治：
疏风清热解毒。用于温病气分热盛之发热，汗出，头痛，面赤唇红，烦躁多渴，口苦咽干，小便短赤等症。

主要组成：
栀子，连翘，黄芩，薄荷，甘草，淡竹叶。', 8, 1, 1, 0, -2110.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '枝 芩 合 剂', null, '2019-06-05 12:01:16', '2022-09-27 01:41:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (97, 'BASIC', '明目地黄合剂', '明目地黄合剂Y', 'K039', 1, 2, 500.00, '{[!SzAzOQ!]}', '功能与主治：
滋肾养肝明目。用于肝肾阳虚，眼目干涩，视物模糊，及阴虚阳亢症候。

主要组成：
菊花，熟地，蒺藜，丹皮，当归，淮山，泽泻，茯苓，枸杞，白芍，石决明，山茱萸。', 8, 1, 1, 0, -586.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '明目地黄合剂', '滋肾养肝明目。用于肝肾阳虚，眼目干涩，视物模糊，及阴虚阳亢症候。', '2019-06-05 12:02:24', '2022-09-13 04:33:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (98, 'BASIC', '软坚合剂', '软坚合剂', 'K068', 1, 2, 500.00, '{[!SzA2OA!]}', '功能与主治：
体疲身倦，头晕目眩，肝区隐痛，右腹肿硬，伴有腹水。

主要组成：
当归，丹参，郁金，丹皮，茯苓，生地，白术，桃仁，山楂，茵陈，白芍，龟甲，川楝子。', 8, 1, 1, 0, -206.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '软坚合剂', '体疲身倦，头晕目眩，肝区隐痛，右腹肿硬，伴有腹水。', '2019-06-05 12:03:38', '2022-08-22 03:00:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (99, 'BASIC', '苦参合剂', '苦参合剂Y', 'K074', 1, 2, 500.00, '{[!SzA3NA!]}', '功能与主治：
祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。

主要组成：
苦参，赤芍，生地，当归，丹参，丹皮，秦艽，蒺藜，浙贝母，牛蒡子，金银花，野菊花，穿心莲。', 8, 1, 1, 0, -1265.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '苦参合剂', '祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。', '2019-06-05 12:04:52', '2022-09-27 01:32:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (100, 'BASIC', '炙甘草合剂', '炙甘草合剂Y', 'K102', 1, 2, 500.00, '{[!SzEwMg!]}', '功能与主治：
益气补血，清热除烦。用于治虚烦不得眠，多梦易惊，虚汗。气虚血少，心动悸，脉结代等症。

主要组成：
大枣，党参，阿膠，生地，桂枝，麦冬，生姜，炙甘草，郁李仁。', 8, 1, 1, 0, -1302.000000, 0, 1, 1, 0, 71.000000, null, 10, 10, 10, 10, '炙甘草合剂', '益气补血，清热除烦。用于治虚烦不得眠，多梦易惊，虚汗。气虚血少，心动悸，脉结代等症。', '2019-06-05 12:06:09', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (101, 'BASIC', '金樱缩泉合剂', '金樱缩泉合剂Y', 'K136', 1, 2, 500.00, '{[!SzEzNg!]}', '功能与主治：
温肾祛寒，缩尿止遗，补肾，固精，止遗。主治下元虚冷引起的小便频数，夜尿多溺，遗尿失禁，早泻及腰膝冷痛诸症。

主要组成：
乌药，山药，金樱子，益智仁，补骨脂，肉蓰蓉，桑螵蛸。', 8, 1, 1, 0, -1924.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '金樱缩泉合剂', '温肾祛寒，缩尿止遗，补肾，固精，止遗。主治下元虚冷引起的小便频数，夜尿多溺，遗尿失禁，早泻及腰膝冷痛诸症。', '2019-06-05 12:07:20', '2022-09-28 08:09:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (102, 'BASIC', '肩痹合剂', '肩痹合剂Y', 'K157', 1, 2, 500.00, '{[!SzE1Nw!]}', '功能与主治：
上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。

主要组成：
姜活，桑枝，赤芍，防风，当归，姜黄，鸡血藤，透骨草，稀签草，鹿衔草。', 8, 1, 1, 0, -4749.000000, 0, 1, 1, 0, 28.500000, null, 10, 10, 10, 10, '肩痹合剂', '上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。', '2019-06-05 12:08:39', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (103, 'BASIC', '狗脊合剂', '狗脊合剂Y', 'K158', 1, 2, 500.00, '{[!SzE1OA!]}', '功能与主治：
减轻关节疼痛及足部肿胀等症状。

主要组成：
狗脊，当归，桂枝，杜仲，木瓜，熟地，桑枝，秦艽，续断，松节，海风藤，川牛藤。', 8, 1, 1, 0, -2772.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '狗脊合剂', '减轻关节疼痛及足部肿胀等症状。', '2019-06-05 13:49:02', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (104, 'BASIC', '泻白散合剂', '泻白散合剂Y', 'K180', 1, 2, 500.00, '{[!SzE4MA!]}', '功能与主治：
肺热咳喘，皮肤蒸热，嗮渐寒热。

主要组成：
梗米，甘草，桑白皮，地骨皮。', 8, 1, 1, 0, -69.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '泻白散合剂', '肺热咳喘，皮肤蒸热，嗮渐寒热。', '2019-06-05 13:57:17', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (105, 'BASIC', '苓桂术甘合剂', '苓桂术甘合剂Y', 'K191', 1, 2, 500.00, '{[!SzE5MQ!]}', '功能与主治：
胸胁胀满，眩景心悸，大便溏，短气肺咳等症。

主要组成：
茯苓，桂枝，白术，甘草。', 8, 1, 1, 0, -4362.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '苓桂术甘合剂', '胸胁胀满，眩景心悸，大便溏，短气肺咳等症。', '2019-06-05 14:09:58', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (106, 'BASIC', '驱虫合剂', '驱虫合剂Y', 'K266', 1, 2, 500.00, '{[!SzI2Ng!]}', '功能与主治：
改善小孩的食欲。

主要组成：
鹤虱，槟榔，芜荑，百部，苦楝皮，使君子。', 8, 0, 1, 0, null, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '驱虫合剂', '改善小孩的食欲。

​', '2019-06-05 14:13:40', '2021-11-02 08:52:42', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (107, 'BASIC', '咽炎合剂', '咽炎合剂Y', 'K014', 1, 2, 500.00, '{[!SzAxNA!]}', '功能与主治:
清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。

主要组成:
马勃，玄参，桔梗，薄荷，连翘，射干，麦冬，甘草，金银花，牛蒡子，山豆根。', 9, 1, 1, 0, -1817.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '咽炎合剂', '清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。', '2019-06-05 14:22:44', '2022-09-23 01:46:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (108, 'BASIC', '荆防败毒合剂', '荆防败毒合剂Y', 'K015', 1, 2, 500.00, '{[!SzAxNQ!]}', '功能与主治：
发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。

主要组成：
荆芥，防风，茯苓，川芎，独活，生薑，姜活，枳殼，柴胡，桔梗，甘草。', 9, 1, 1, 0, -5827.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '荆防败毒合剂', '发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。', '2019-06-05 14:25:59', '2022-09-27 07:18:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (109, 'BASIC', '香薷饮合剂', '香薷饮合剂Y', 'K016', 1, 2, 500.00, '{[!SzAxNg!]}', '功能与主治:
祛暑解表，化湿和中。用于外感于寒，内伤于湿，头痛头重，发热，恶寒烦躁，口渴，心腹疼痛，吐泻等。

主要组成:
香薷，枳殼，白扁豆。', 9, 1, 1, 0, -912.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '香薷饮合剂', '祛暑解表，化湿和中。用于外感于寒，内伤于湿，头痛头重，发热，恶寒烦躁，口渴，心腹疼痛，吐泻等。', '2019-06-05 14:28:22', '2022-09-19 04:55:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (111, 'BASIC', '香砂六君子合剂', '香砂六君子合剂YL', 'K138', 1, 2, 500.00, '{[!SzEzOA!]}', '功能与主治：
理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。

主要组成：
砂仁，党参，白术，茯苓，陈皮，大枣，生姜，甘草，川木香，制半夏。', 9, 1, 1, 0, -5223.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '香砂六君子合剂', '理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。', '2019-06-05 14:33:46', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (112, 'BASIC', '养血熄风合剂', '养血熄风合剂Y', 'K076', 1, 2, 500.00, '{[!SzA3Ng!]}', '功能与主治：
养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。

主要组成：
当归，玄参，川芎，红花，黄芪，甘草，荆芥，白芍，刺疾藜。', 9, 1, 1, 0, -1436.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '养血熄风合剂', '养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。', '2019-06-05 14:35:23', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (113, 'BASIC', '养阴清肺合剂', '养阴清肺合剂Y', 'K195', 1, 2, 500.00, '{[!SzE5NQ!]}', '功能与主治：
养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。

主要组成：
生地，麦冬，白芍，玄参，甘草，薄荷，浙贝母，牡丹皮。', 9, 1, 1, 0, -8647.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '养阴清肺合剂', '养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。', '2019-06-05 14:36:41', '2022-09-25 23:30:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (114, 'BASIC', '复元活血合剂', '复元活血合剂Y', 'K088', 1, 2, 500.00, '{[!SzA4OA!]}', '功能与主治：
活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。

主要组成：
柴胡，当归，甘草，大黄，红花，桃仁，乳香，瓜蒌仁。', 9, 1, 1, 0, -1327.000000, 0, 1, 1, 0, 31.500000, null, 10, 10, 10, 10, '复元活血合剂', '活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。', '2019-06-05 14:38:11', '2022-09-27 01:33:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (115, 'BASIC', '济生肾气合剂', '济生肾气合剂Y', 'K139', 1, 2, 500.00, '{[!SzEzOQ!]}', '功能与主治：
温补壮阳，化气行血。用治体虚，肾阳不足，腰重脚踵水肿，腰酸腿软，小便不利，尿频量少，痰多喘咳等症。

主要组成：
桂枝，熟地，淮山，茯苓，泽泻，丹皮，牛膝，干姜，山茱萸，车前子。', 9, 1, 1, 0, -4224.000000, 0, 1, 1, 0, 28.500000, null, 10, 10, 10, 10, '济生肾气合剂', '温补壮阳，化气行血。用治体虚，肾阳不足，腰重脚踵水肿，腰酸腿软，小便不利，尿频量少，痰多喘咳等症。', '2019-06-05 14:39:59', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (116, 'BASIC', '保和合剂', '保和合剂Y', 'K143', 1, 2, 500.00, '{[!SzE0Mw!]}', '功能与主治：
消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。

主要组成：
山楂，陈皮，神曲，连翘，麦芽，茯苓，莱菔子，制半夏。', 9, 1, 1, 0, -2018.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '保和合剂', '消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。', '2019-06-05 15:00:46', '2022-09-26 07:53:31', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (117, 'BASIC', '独活寄生合剂', '独活寄生合剂Y', 'K160', 1, 2, 500.00, '{[!SzE2MA!]}', '功能与主治：
祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。

主要组成：
独活，杜仲，秦艽，白芍，茯苓，肉桂，川芎，党参，防风，熟地，当归，桂枝，甘草，桑寄生，川牛藤。', 9, 1, 1, 0, -9999.999999, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '独活寄生合剂', '祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。', '2019-06-05 15:03:11', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (118, 'BASIC', '姜活胜湿合剂', '姜活胜湿合剂Y', 'K161', 1, 2, 500.00, '{[!SzE2MQ!]}', '功能与主治：
发汗祛风胜湿。用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。

主要组成：
姜活，独活，防风，甘草，川芎，蒿本，蔓荆子。', 9, 1, 1, 0, -1742.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '姜活胜湿合剂', '发汗祛风胜湿。用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。', '2019-06-05 15:04:50', '2022-09-27 01:32:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (119, 'BASIC', '活络效灵合剂', '活络效灵合剂Y', 'K162', 1, 2, 500.00, '{[!SzE2Mg!]}', '功能与主治：
活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。

主要组成：
丹参，当归，乳香，没药。', 9, 1, 1, 0, -3089.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '活络效灵合剂', '活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。', '2019-06-05 15:06:29', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (120, 'BASIC', '胆汁川贝合剂', '胆汁川贝合剂', 'K192', 1, 2, 500.00, '{[!SzE5Mg!]}', '功能与主治：
缓解咳嗽和痰等症状。

主要组成：
杏仁，黄芩，陈皮，甘草，连翘，茯苓，蛇胆，川贝母，制半夏，桑白皮，紫苏子，款冬花，白芥子，莱菔子，浙贝母。', 9, 1, 1, 0, -654.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '胆汁川贝合剂', '缓解咳嗽和痰等症状', '2019-06-05 15:08:05', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (121, 'BASIC', '胃舒宁合剂', '胃舒宁合剂Y', 'K265', 1, 2, 500.00, '{[!SzI2NQ!]}', '功能与主治：
胃气痛，胃酸过多，消化不良，胃下垂，食欲不振，呕吐酸水，胃溃疡及十二指肠溃疡后之腹胸闷疼痛。

主要组成：
党参，茯苓，陈皮，肉桂，木香，白术，甘草，砂仁，小茴香，制半夏。', 9, 1, 1, 0, -8693.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '胃舒宁合剂', '胃气痛，胃酸过多，消化不良，胃下垂，食欲不振，呕吐酸水，胃溃疡及十二指肠溃疡后之腹胸闷疼痛。', '2019-06-05 15:09:56', '2022-09-27 09:06:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (122, 'BASIC', '桑菊合剂', '桑菊合剂Y', 'K017', 1, 2, 500.00, '{[!SzAxNw!]}', '功能与主治:
疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。

主要组成:
桑叶，连翘，甘草，桔梗，菊花，杏仁，芦根，薄荷。', 10, 1, 1, 0, -7691.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '桑菊饮合剂', '疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。', '2019-06-05 15:11:28', '2022-09-27 04:01:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (123, 'BASIC', '桂枝合剂', '桂枝合剂Y', 'K018', 1, 2, 500.00, '{[!SzAxOA!]}', '功能与主治：
疏风解表，调和营卫。主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。

主要组成：
桂枝，白芍，大枣，生姜，炙甘草。', 10, 1, 1, 0, -7747.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '桂枝合剂', '疏风解表，调和营卫。主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。', '2019-06-05 15:13:10', '2022-09-27 01:41:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (124, 'BASIC', '凉膈合剂', '凉膈合剂Y', 'K034', 1, 2, 500.00, '{[!SzAzNA!]}', '功能与主治：
凉膈通便。用于烦躁口渴，面赤唇焦，口舌生疮，胸膈积热，便秘尿赤。

主要组成：
芒硝，甘草，黄芩，栀子，连翘，薄荷，大黄，淡竹叶。', 10, 1, 1, 0, -1770.000000, 0, 1, 1, 0, 32.000000, null, 10, 10, 10, 10, '凉膈合剂', '凉膈通便。用于烦躁口渴，面赤唇焦，口舌生疮，胸膈积热，便秘尿赤。', '2019-06-05 15:14:47', '2022-09-27 01:41:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (125, 'BASIC', '逍遥合剂', '逍遥合剂Y', 'K051', 1, 2, 500.00, '{[!SzA1MQ!]}', '功能与主治：
疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。

主要组成：
当归，白术，茯苓，白芍，柴胡，生薑，甘草，薄荷。', 10, 1, 1, 0, -3954.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '逍遥合剂', '疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。', '2019-06-05 15:16:06', '2022-09-27 07:17:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (126, 'BASIC', '桃红四物合剂', '桃红四物合剂Y', 'K063', 1, 2, 500.00, '{[!SzA2Mw!]}', '功能与主治：
活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。

主要组成：
桃仁，当归，白芍，红花，川芎，熟地。', 10, 1, 1, 0, -2462.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '桃红四物合剂', '活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。', '2019-06-05 15:17:24', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (127, 'BASIC', '消风散合剂', '消风散合剂Y', 'K075', 1, 2, 500.00, '{[!SzA3NQ!]}', '功能与主治：
疏风养血，清热除湿。主治风疹，湿疹症见肤症出红，色红，瘙痒，抓破后渗水等症。

主要组成：
荆芥，防风，当归，生地，苦参，苍术，知母，石膏，通草，甘草，蝉蜕，牛蒡子，黑芝麻。', 1, 1, 1, 0, -5152.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '消风散合剂', '疏风养血，清热除湿。主治风疹，湿疹症见肤症出红，色红，瘙痒，抓破后渗水等症。', '2019-06-05 15:24:26', '2022-09-27 02:17:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (128, 'BASIC', '消肿活血合剂', '消肿活血合剂Y', 'K085', 1, 2, 500.00, '{[!SzA4NQ!]}', '功能与主治：
活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。

主要组成：
续断，赤芍，当归，泽兰，桂枝，牛膝，大驳骨，韩信草。', 10, 1, 1, 0, -1803.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '消肿活血合剂', '活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。', '2019-06-05 15:25:57', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (129, 'BASIC', '真武合剂', '真武合剂', 'K142', 1, 2, 500.00, '{[!SzE0Mg!]}', '功能与主治：
缓解头晕及改善排尿。

主要组成：
茯苓，白术，白芍，干姜，生姜。', 10, 1, 1, 0, -4575.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '真武合剂', '缓解头晕及改善排尿。', '2019-06-05 15:27:23', '2022-09-28 01:32:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (130, 'BASIC', '柴胡疏肝合剂', '柴胡疏肝合剂Y', 'K052', 1, 2, 500.00, '{[!SzA1Mg!]}', '功能与主治：
疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。

主要组成：
柴胡，白芍，枳壳，香附，陈皮，川芎，甘草。', 10, 1, 1, 0, -7183.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '柴胡疏肝合剂', '疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。', '2019-06-05 15:29:12', '2022-09-28 06:31:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (131, 'BASIC', '健脾补血合剂', '健脾补血合剂', 'K065', 1, 2, 500.00, '{[!SzA2NQ!]}', '功能与主治：
用于保健与强身壮体。

主要组成：
党参，茯苓，神曲，陈皮，白术，绿攀，炙甘草，淡豆鼓。', 10, 0, 1, 0, -75.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '健脾补血合剂', '用于保健与强身壮体。', '2019-06-05 15:30:27', '2021-11-02 08:50:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (132, 'BASIC', '健心合剂', '健心合剂', 'K106', 1, 2, 500.00, '{[!SzEwNg!]}', '功能与主治：
促进血液循环及缓解痰。

主要组成：
丹参，泽泻，赤芍，郁金，槐花，姜黄，桑寄生，决明子，瓜篓子，瓜娄皮。', 10, 1, 1, 0, -402.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '健心合剂', '促进血液循环及缓解痰。', '2019-06-05 15:31:49', '2022-08-06 02:39:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (133, 'BASIC', '桑枝虎杖合剂', '桑枝虎杖合剂Y', 'K164', 1, 2, 500.00, '{[!SzE2NA!]}', '功能与主治：
祛风除湿，舒筋活络。用于四肢酸痛，肢体伸展不利，游走性骨节痹痛。

主要组成：
桑枝，虎杖，姜活，当归，稀签草，臭梧桐，伸筋草。', 10, 1, 1, 0, -3826.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '桑枝虎杖合剂', '祛风除湿，舒筋活络。用于四肢酸痛，肢体伸展不利，游走性骨节痹痛。', '2019-06-05 15:33:03', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (134, 'BASIC', '桑杏合剂', '桑杏合剂Y', 'K189', 1, 2, 500.00, '{[!SzE4OQ!]}', '功能与主治：
轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。

主要组成：
桑叶，梨皮，栀子，杏仁，浙贝母，淡豆豉，南沙参。', 10, 1, 1, 0, -3524.000000, 0, 1, 1, 0, 27.000000, null, 10, 10, 10, 10, '桑杏合剂', '轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。', '2019-06-05 15:34:42', '2022-09-28 01:34:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (135, 'BASIC', '通络化痹合剂', '通络化痹合剂', 'K166', 1, 2, 500.00, '{[!SzE2Ng!]}', '功能与主治：
缓解关节与肌肉疼痛。

主要组成：
木瓜，陈皮，香附，郁金，钩藤，川穹，柴胡，没药，木香，白芷，乌药，乳香，鸡血藤。', 10, 1, 1, 0, -1620.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '通络化痹合剂', '缓解关节与肌肉疼痛。', '2019-06-05 15:35:51', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (136, 'BASIC', '通窍活血合剂', '通窍活血合剂Y', 'K239', 1, 2, 500.00, '{[!SzIzOQ!]}', '功能与主治：
血络瘀阻引起的头痛，脱发，鼻窍不通，酒糟鼻，白癫风。

主要组成：
赤芍，桃仁，红花，红枣，生姜，葱白，川芎，石菖蒲。', 10, 1, 1, 0, -1413.000000, 0, 1, 1, 0, 33.000000, null, 10, 10, 10, 10, '通窍活血合剂', '血络瘀阻引起的头痛，脱发，鼻窍不通，酒糟鼻，白癫风。', '2019-06-05 15:37:13', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (138, 'BASIC', '铁笛合剂', '铁笛合剂Y', 'K202', 1, 2, 500.00, '{[!SzIwMg!]}', '功能与主治：
急慢性咽喉炎。用于咽干喉瘠，声嘶失音，声带发炎，久咳失声。

主要组成：
诃子，玄参，桔梗，茯苓，麦冬，青果，甘草，凤凰衣，瓜蒌皮，川贝母。', 10, 1, 1, 0, -894.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '铁笛合剂', '急慢性咽喉炎。用于咽干喉瘠，声嘶失音，声带发炎，久咳失声。', '2019-06-05 15:39:44', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (139, 'BASIC', '眩晕合剂', '眩晕合剂', 'K210', 1, 2, 500.00, '{[!SzIxMA!]}', '功能与主治:
养血祛风。用治眩晕症

主要组成：
生地，当归，川芎，丹参，陈皮，蒿本，麦冬，升麻。', 10, 1, 1, 0, -1160.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '眩晕合剂', '缓解咳嗽，减少粘痰。', '2019-06-05 15:40:50', '2022-11-02 11:16:45', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (140, 'BASIC', '调胃承气合剂', '调胃承气合剂', 'K213', 1, 2, 500.00, '{[!SzIxMw!]}', '功能与主治：
用于喉咙痛，口疮。

主要组成：
大黄，甘草，芒硝。', 10, 1, 1, 0, -2090.000000, 0, 1, 1, 0, 31.500000, null, 10, 10, 10, 10, '调 胃 承 气 合 剂', null, '2019-06-05 15:42:01', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (141, 'BASIC', '咳喘灵合剂', '咳喘灵合剂Y', 'K230', 1, 2, 500.00, '{[!SzIzMA!]}', '功能与主治：
降气化痰，止咳平喘。用于痰多作喘，肺气不畅。

主要组成：
桔梗，杏仁，黄芩，陈皮，枳殼，茯苓，苏子，甘草，胆南星，川贝母，瓜蒌仁，莱服子，板蓝根，款冬花，石菖蒲。', 10, 1, 1, 0, -1212.000000, 0, 1, 1, 0, 28.500000, null, 10, 10, 10, 10, '咳喘灵合剂', '降气化痰，止咳平喘。用于痰多作喘，肺气不畅。', '2019-06-05 15:43:15', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (142, 'BASIC', '除湿合剂', '除湿合剂Y', 'K236', 1, 2, 500.00, '{[!SzIzNg!]}', '功能与主治：
治湿脚气，胸闷嚏气，身重纳呆，以及湿郁偏重症候。

主要组成：
藿香，苍术，甘草，茯苓，枳殼，白术，陈皮，生姜，干姜，制半夏。', 10, 0, 1, 0, -24.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '除湿合剂', '治湿脚气，胸闷嚏气，身重纳呆，以及湿郁偏重症候。', '2019-06-05 15:44:37', '2021-11-02 08:52:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (143, 'BASIC', '清热透表合剂', '清热透表合剂', 'K019', 1, 2, 500.00, '{[!SzAxOQ!]}', '功能与主治:
用于缓解感冒，身体热气，头痛，喉咙疼痛，口渴及咳嗽。

主要组成：
连翘，杏仁，葛根，石膏，甘草，薄荷，柴胡，知母，金银花，板蓝根，野菊花，牛蒡子。', 11, 1, 1, 0, -289.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '清 热 透 表 合 剂', null, '2019-06-05 15:45:49', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (144, 'BASIC', '清燥救肺合剂', '清燥救肺合剂Y', 'K199', 1, 2, 500.00, '{[!SzE5OQ!]}', '功能与主治：
清燥润肺。适用于燥热伤肺，气短，干咳无痰或少痰，口鼻咽喉干燥。

主要组成：
桑叶，阿膠，石膏，麦冬，杏仁，甘草，党参，黑芝麻，枇杷叶。', 11, 1, 1, 0, -740.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '清燥救肺合剂', '清燥润肺。适用于燥热伤肺，气短，干咳无痰或少痰，口鼻咽喉干燥。', '2019-06-05 15:47:01', '2022-09-22 07:44:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (145, 'BASIC', '清肺平喘合剂', '清肺平喘合剂', 'K205', 1, 2, 500.00, '{[!SzIwNQ!]}', '功能与主治:
缓解咳嗽，减少粘痰。

主要组成：
杏仁，茯苓，枳殼，橘红，钟乳石，制半夏，瓜篓子，桑白皮。', 11, 0, 1, 0, -24.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '清肺平喘合剂', '缓解咳嗽，减少粘痰。', '2019-06-05 15:48:12', '2021-11-02 08:51:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (147, 'BASIC', '牵正解语合剂', '牵正解语合剂Y', 'K105', 1, 2, 500.00, '{[!SzEwNQ!]}', '功能与主治：
祛风镇痉，化痰通络。适用于中风面瘫，口眼嗝斜，口角流涎，语言蹇涩，头痛眩晕。

主要组成：
天麻，甘草，远志，姜活，防风，肉桂，川芎，陈皮，当归，白芷，党参，石菖蒲，胆南星，酸枣仁，羚羊角。', 11, 1, 1, 0, -1789.000000, 0, 1, 1, 0, 38.500000, null, 10, 10, 10, 10, '牵正解语合剂', '祛风镇痉，化痰通络。适用于中风面瘫，口眼嗝斜，口角流涎，语言蹇涩，头痛眩晕。', '2019-06-05 15:50:29', '2022-09-27 01:31:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (148, 'BASIC', '旋覆代赭合剂', '旋覆代赭合剂Y', 'K147', 5, 2, 500.00, '{[!SzE0Nw!]}', '功能与主治：
胃虚痰阻，胃气上逆，嚏气呕恶，慢性胃炎。

主要组成：
党参，陈皮，大枣，甘草，生姜，，制半夏，旋覆花。', 11, 1, 1, 0, -1376.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '旋覆代赭合剂', '胃虚痰阻，胃气上逆，嚏气呕恶，慢性胃炎。', '2019-06-05 15:53:22', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (149, 'BASIC', '麻杏石甘合剂', '麻杏石甘合剂Y', 'K200', 1, 2, 500.00, '{[!SzIwMA!]}', '功能与主治：
宣泻郁气，淸肺平喘。用于治外感风邪，身热不解(有汗，无汗均可用），殻逆气急，鼻煽口渴等诸症。

主要组成：
杏仁，石膏，生姜，炙甘草。', 11, 1, 1, 0, -4318.000000, 0, 1, 1, 0, 27.500000, null, 10, 10, 10, 10, '麻杏石甘合剂', '宣泻郁气，淸肺平喘。用于治外感风邪，身热不解(有汗，无汗均可用），殻逆气急，鼻煽口渴等诸症。', '2019-06-05 15:54:57', '2022-09-28 01:28:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (150, 'BASIC', '普济消毒合剂', '普济消毒合剂Y', 'K037', 1, 2, 500.00, '{[!SzAzNw!]}', '功能与主治：
清热解毒，疏风散邪。用于痄腮，头面肿大，咽喉肿痛，口渴舌燥，以及传染性疫毒，颜面丹毒。

主要组成：
黄芩，玄参，陈皮，甘草，桔梗，连翘，柴胡，升麻，薄荷，僵蚕，马勃，牛蒡子，板蓝根，穿心莲。', 12, 1, 1, 0, -9018.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '普济消毒合剂', '清热解毒，疏风散邪。用于痄腮，头面肿大，咽喉肿痛，口渴舌燥，以及传染性疫毒，颜面丹毒。', '2019-06-05 15:56:18', '2022-09-27 01:41:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (151, 'BASIC', '温经合剂', '温经合剂Y', 'K066', 1, 2, 500.00, '{[!SzA2Ng!]}', '功能与主治：
温经散寒，活血祛瘀。用于妇人虚弱不调，夜间发热，小腹冷痛，日久不清，冲任虚寒，腰酸膝痛等症。

主要组成：
当归，川芎，党参，桂枝，阿膠，丹皮，麦冬，白芍，生薑，制半夏，吴茱萸，炙甘草。', 12, 1, 1, 0, -636.000000, 0, 1, 1, 0, 61.000000, null, 10, 10, 10, 10, '温经合剂', '温经散寒，活血祛瘀。用于妇人虚弱不调，夜间发热，小腹冷痛，日久不清，冲任虚寒，腰酸膝痛等症。', '2019-06-05 15:58:02', '2022-09-27 01:32:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (152, 'BASIC', '温胆合剂', '温胆合剂Y', 'K107', 1, 2, 500.00, '{[!SzEwNw!]}', '功能与主治：
清胆除痰，和胃止呕。用于虚痰热上抚，虚烦不得眠。

主要组成：
茯苓，生姜，陈皮，枳实，竹茹，制半夏，炙甘草。', 12, 1, 1, 0, -2826.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '温胆合剂', '清胆除痰，和胃止呕。用于虚痰热上抚，虚烦不得眠。', '2019-06-05 15:59:44', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (155, 'BASIC', '疏肝和胃合剂', '疏肝和胃合剂', 'K149', 1, 2, 500.00, '{[!SzE0OQ!]}', '功能与主治：
促活身体的活力，缓解疼痛，呕吐和胃气。

主要组成：
香附，砂仁，白芍，枳殼，柴胡，玄参，陈皮，白芨，炙甘草，蒲公英。', 12, 1, 1, 0, -3904.000000, 0, 1, 1, 0, 33.500000, null, 10, 10, 10, 10, '疏肝和胃合剂', '促活身体的活力，缓解疼痛，呕吐和胃气。', '2019-06-05 16:04:33', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (156, 'BASIC', '舒筋合剂', '舒筋合剂Y', 'K168', 1, 2, 500.00, '{[!SzE2OA!]}', '功能与主治：
舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。

主要组成：
姜黄，甘草，姜活，白术，当归，赤芍，海桐皮。', 12, 1, 1, 0, -4962.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '舒筋合剂', '舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。', '2019-06-05 16:05:43', '2022-09-27 01:32:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (157, 'BASIC', '舒筋活络合剂', '舒筋活络合剂', 'K170', 1, 2, 500.00, '{[!SzE3MA!]}', '功能与主治：
舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。

主要组成：
续断，仓术，牛膝，防风，秦艽，木瓜，独活，桂枝，姜活，当归，陈皮，薏苡仁。', 12, 1, 1, 0, -4513.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '舒筋活络合剂', '舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。', '2019-06-05 16:07:10', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (158, 'BASIC', '舒颈合剂', '舒颈合剂', 'K171', 1, 2, 500.00, '{[!SzE3MQ!]}', '功能与主治:
舒筋活络，颈项转折不灵，颈项强硬，颈椎综合症。

主要组成:
桂枝，葛根，白芍，桃仁，黄芩，白芷，干姜，甘草，地龙，制半夏，白芥子，鸡血藤，稀签草。', 12, 1, 1, 0, -45.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '舒颈合剂', '舒筋活络，颈项转折不灵，颈项强硬，颈椎综合症。', '2019-06-05 16:08:23', '2022-08-19 01:13:50', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (159, 'BASIC', '舒颈葛根合剂', '舒颈葛根合剂', 'K212', 1, 2, 500.00, '{[!SzIxMg!]}', '功能与主治:
舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。

主要组成:
葛根，白芷，丹参，姜活，桂枝，地龙，赤芍，大枣，白芍，当归，甘草，鸡血藤。', 12, 1, 1, 0, -6213.000000, 0, 1, 1, 0, 29.000000, null, 10, 10, 10, 10, '舒颈葛根合剂', '舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。', '2019-06-05 16:09:35', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (160, 'BASIC', '舒筋立安合剂', '舒筋立安合剂', 'K235', 1, 2, 500.00, '{[!SzIzNQ!]}', '功能与主治:
急慢性四肢关节炎，麻痹不仁周身骨痛，鹤膝风等症。

主要组成:
防风，独活，牛膝，白芷，生地，茯苓，苍术，姜活，木瓜，白芍，桃仁，秦艽，红花，杜仲，腧南星。', 12, 1, 1, 0, -1895.000000, 0, 1, 1, 0, 30.000000, null, 10, 10, 10, 10, '舒筋立安合剂', '急慢性四肢关节炎，麻痹不仁周身骨痛，鹤膝风等症。', '2019-06-05 16:11:10', '2022-09-21 04:16:28', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (161, 'BASIC', '感冒合剂', '感冒合剂', 'K013', 1, 2, 500.00, '{[!SzAxMw!]}', '功能与主治:
疏风清热。用于伤风感冒，身热恶寒，头痛鼻塞。

主要组成:
桔梗，荆芥，薄荷，连翘，桑叶，钩藤，甘草，金银花，牛蒡子，淡豆豉，淡竹叶，白菊花。', 13, 1, 1, 0, -269.000000, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '感冒合剂', '疏风清热。用于伤风感冒，身热恶寒，头痛鼻塞。', '2019-06-05 16:12:22', '2022-09-13 03:15:50', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (162, 'BASIC', '鼻通灵合剂', '鼻通灵合剂', 'K023', 1, 2, 500.00, '{[!SzAyMw!]}', '功能与主治:
清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。

主要组成:
幸夷，白芷，薄荷，连翘，防风，藿香，苍耳子，金银花，鹅不食草。', 13, 1, 1, 0, -2793.000000, 0, 1, 1, 0, 26.000000, null, 10, 10, 10, 10, '鼻通灵合剂', '清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。', '2019-06-05 16:13:36', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (164, 'BASIC', '鼻通合剂', '鼻通合剂Y', 'K272', 1, 2, 500.00, '{[!SzI3Mg!]}', '功能与主治：
用于身体热气和鼻塞。

主要组成：
辛夷，白芷，薄荷，桔梗，防风，蒿本，丹皮，苍耳子，侧柏叶。', 13, 1, 1, 0, -1139.000000, 0, 1, 1, 0, 29.500000, null, 10, 10, 10, 10, '鼻通合剂', '用于身体热气和鼻塞。', '2019-06-05 16:15:58', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (165, 'BASIC', '腰腿痛合剂', '腰腿痛合剂', 'K172', 1, 2, 500.00, '{[!SzE3Mg!]}', '功能与主治：
缓解腰酸痛，关节和肌肉疼痛。

主要组成：
黄芪，当归，木瓜，牛膝，白芍，桂枝，赤芍，白芷，甘草，生地，独活。', 13, 1, 1, 0, -1941.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '腰腿痛合剂', '缓解腰酸痛，关节和肌肉疼痛。', '2019-06-05 16:17:04', '2022-09-26 08:40:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (166, 'BASIC', '新柴胡疏肝合剂', '新柴胡疏肝合剂', 'K271', 1, 2, 500.00, '{[!SzI3MQ!]}', '功能与主治：
疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。

主要组成：
柴胡，白芍，枳殼，香附，郁金，青皮，甘草。', 13, 1, 1, 0, -83.000000, 0, 1, 1, 0, 31.000000, null, 10, 10, 10, 10, '新柴胡疏肝合剂', '疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。', '2019-06-05 16:21:58', '2022-09-01 08:49:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (167, 'BASIC', '酸枣仁合剂', '酸枣仁合剂', 'K109', 1, 2, 500.00, '{[!SzEwOQ!]}', '功能与主治：
替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。

主要组成：
知母，川芎，甘草，茯苓，酸枣仁。', 14, 1, 1, 0, -4234.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '酸枣仁合剂', '替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。', '2019-06-05 16:23:46', '2022-09-28 08:09:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (168, 'BASIC', '镇肝熄风合剂', '镇肝熄风合剂', 'K110', 1, 2, 500.00, '{[!SzExMA!]}', '功能与主治:
镇肝熄风。用于肝阳上亢，肝风内动，眩晕头痛，面赤，肌体暂觉不利。

主要组成:
牛膝，龙骨，麦芽，玄参，天冬，龟甲，牡蛎，甘草，白芍，石决明，川楝子，茵陈蒿。', 15, 1, 1, 0, -1534.000000, 0, 1, 1, 0, 34.000000, null, 10, 10, 10, 10, '镇肝熄风合剂', '镇肝熄风。用于肝阳上亢，肝风内动，眩晕头痛，面赤，肌体暂觉不利。', '2019-06-05 16:24:50', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (169, 'BASIC', '十全大补片', '十全大补片', 'A022', 1, 3, 800.00, '{[!QTAyMg!]}', '功能与主治:
温补气血。用于气血两虚，面色苍白气短心悸，体倦乏力，四肢不温。

主要组成:
人参，茯苓，当归，川芎，黄芪，白术，甘草，白芍，熟地，肉桂，生姜，大枣。', 2, 1, 1, 0, -456.000000, 0, 1, 1, 0, 66.000000, null, 10, 10, 10, 10, '十全大补片', '温补气血。用于气血两虚，面色苍白气短心悸，体倦乏力，四肢不温。', '2019-06-05 16:26:10', '2022-09-27 01:39:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (170, 'BASIC', '大黄片', '大黄片', 'A134', 1, 3, 800.00, '{[!QTEzNA!]}', '功能与主治：
攻积导滞，湿热，排毒。

主要组成：
大黄。', 3, 1, 1, 0, -2181.000000, 0, 1, 1, 0, 66.000000, null, 10, 10, 10, 10, '大黄片', '攻积导滞，湿热，排毒。', '2019-06-05 16:27:30', '2022-09-28 02:16:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (171, 'BASIC', '小柴胡片', '小柴胡片', 'A169', 1, 3, 800.00, '{[!QTE2OQ!]}', '功能与主治：
伤寒，恶风，恶寒往来，胸胁苦满，食欲不振，咳嗽，发热等症。

主要组成：
柴胡，黄芩，党参，甘草，生姜，大枣，制半夏。', 3, 1, 1, 0, -931.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '小柴胡片', '伤寒，恶风，恶寒往来，胸胁苦满，食欲不振，咳嗽，发热等症。', '2019-06-05 16:28:42', '2022-09-28 01:33:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (172, 'BASIC', '上清片', '上清片', 'A183', 1, 3, 800.00, '{[!QTE4Mw!]}', '功能与主治：
清热散风，解毒通便。用于头晕耳鸣，目赤，鼻窦炎，口舌生疮，牙龈肿痛，大便秘结。

主要组成：
菊花，川芎，荆芥，桔梗，栀子，白芷，防风，连翘，黄芩，大黄，薄荷，龙胆草。', 3, 1, 1, 0, -5.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '上清片', '清热散风，解毒通便。用于头晕耳鸣，目赤，鼻窦炎，口舌生疮，牙龈肿痛，大便秘结。', '2019-06-05 16:33:50', '2021-11-02 06:56:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (173, 'BASIC', '乌须黑发片', '乌须黑发片', 'A215', 1, 3, 800.00, '{[!QTIxNQ!]}', '功能与主治：
滋阴补肾，养血固精。用于肾水亏损，气血不足，须发早白。

主要组成：
当归，牛膝，茯苓，何首乌，菟丝子，枸杞子，补骨脂。', 3, 1, 1, 0, -171.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '乌须黑发片', '滋阴补肾，养血固精。用于肾水亏损，气血不足，须发早白.', '2019-06-05 16:35:08', '2022-09-02 09:12:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (174, 'BASIC', '丹枝逍遥片', '丹枝逍遥片', 'A016', 1, 3, 800.00, '{[!QTAxNg!]}', '功能与主治：
疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。

主要组成：
陈皮，当归，白术，茯苓，甘草，白芍，丹皮，栀子，柴胡，薄荷，生姜。', 4, 1, 1, 0, -3240.000000, 0, 1, 1, 0, 68.000000, null, 10, 10, 10, 10, '丹枝逍遥片', '疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。', '2019-06-05 16:36:30', '2022-09-28 06:40:50', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (175, 'BASIC', '女科八珍片', '女科八珍片', 'A023', 1, 3, 800.00, '{[!QTAyMw!]}', '功能与主治:
温补气血。用于气血两虚，面色苍白气短心悸，体倦乏力，四肢不温。

主要组成:
党参，白术，茯苓，甘草，当归，白芍，川芎，熟地。', 4, 1, 1, 0, -683.000000, 0, 1, 1, 0, 66.000000, null, 10, 10, 10, 10, '女科八珍片', '温补气血。用于气血两虚，面 色苍白气短心悸，体倦乏力， 四肢不温。', '2019-06-05 16:37:34', '2022-09-27 01:56:10', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (176, 'BASIC', '天麻田七片', '天麻田七片', 'A025', 1, 3, 800.00, '{[!QTAyNQ!]}', '功能与主治：
祛风，通血脉。眩晕眼黑，头风头痛，肢体麻木。

主要组成：
天麻，田七，首乌，女贞子，五味子。', 4, 1, 1, 0, -196.000000, 0, 1, 1, 0, 89.000000, null, 10, 10, 10, 10, '天麻田七片', '祛风，通血脉。眩晕眼黑，头风头痛，肢体麻木。', '2019-06-05 16:38:40', '2022-09-21 02:50:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (177, 'BASIC', '天王补心片', '天王补心片', 'A034', 1, 3, 800.00, '{[!QTAzNA!]}', '功能与主治:
滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。

主要组成:
丹参，当归，党参，茯苓，麦冬，天冬，地黄，玄参，远志，桔梗，甘草，石菖蒲，五味子，酸枣仁，柏子仁。', 4, 1, 1, 0, -1586.000000, 0, 1, 1, 0, 71.000000, null, 10, 10, 10, 10, '天王补心片', '滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。', '2019-06-05 16:39:47', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (178, 'BASIC', '六味地黄片', '六味地黄片', 'A049', 1, 3, 800.00, '{[!QTA0OQ!]}', '功能与主治:
滋阴降火。身体虚弱，肝肾阴虚，头目晕眩，耳鸣耳聋，舌燥喉痛，腰膝酸痛。

主要组成:
熟地，丹皮，淮山，茯苓，泽泻，山茱萸。', 4, 1, 1, 0, -2230.000000, 0, 1, 1, 0, 68.000000, null, 10, 10, 10, 10, '六味地黄片', '滋阴降火。身体虚弱，肝肾阴虚，头目晕眩，耳鸣耳聋，舌燥喉痛，腰膝酸痛。', '2019-06-05 16:40:53', '2022-09-27 01:22:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (179, 'BASIC', '六君子片', '六君子片', 'A060', 1, 3, 800.00, '{[!QTA2MA!]}', '功能与主治：
胃肠衰弱，营养障碍，体力不足，排痰困难。

主要组成：
党参，白术，茯苓，陈皮，甘草，制半夏。', 4, 1, 1, 0, -734.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '六君子片', '胃肠衰弱，营养障碍，体力不足，排痰困难。', '2019-06-05 16:42:06', '2022-09-26 03:19:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (180, 'BASIC', '风疹止痒片', '风疹止痒片', 'A064', 1, 3, 800.00, '{[!QTA2NA!]}', '功能与主治：
养血熄风，祛湿止痒，急慢性麻疹，湿疹阴瘠，血虚血热以致之皮肤搔痒症性皮肤病等症。

主要组成：
生地，当归，赤芍，丹皮，白术，紫草，苦参，蝉蜕，荆芥穗，蛇床子，苍耳子，地虏子，土茯苓。', 4, 1, 1, 0, -671.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '风疹止痒片', '养血熄风，祛湿止痒，急慢性麻疹，湿疹阴瘠，血虚血热以致之皮肤搔痒症性皮肤病等症。', '2019-06-05 16:43:18', '2022-09-26 03:24:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (181, 'BASIC', '乌梢止痒片', '乌梢止痒片', 'A063', 1, 3, 800.00, '{[!QTA2Mw!]}', '功能与主治：
清热凉血，祛风除湿止痒。用于急慢性湿疹，风疹，皮肤瘙痒症。

主要组成：
防风，苍术，丹皮，苦参，当归，人参，乌梢蛇，蛇床子。', 4, 1, 1, 0, -727.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '乌梢止痒片', '清热凉血，祛风除湿止痒。用于急慢性湿疹，风疹，皮肤瘙痒症。', '2019-06-05 16:44:48', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (182, 'BASIC', '止咳化痰片', '止咳化痰片', 'A096', 1, 3, 800.00, '{[!QTA5Ng!]}', '功能与主治：
滋阴清肺，化痰止咳，平喘。急慢性支气管炎，肺炎，痰多气喘，久咳不愈，有肺热者，也适用於诸般咳嗽。

主要组成：
苏子，知母，陈皮，白芨，黄芩，百合，制半夏，五味子，葶苈子。', 4, 1, 1, 0, -594.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '止咳化痰片', '滋阴清肺，化痰止咳，平喘。急慢性支气管炎，肺炎，痰多气喘，久咳不愈，有肺热者，也适用於诸般咳嗽。', '2019-06-05 16:45:58', '2022-09-23 09:27:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (183, 'BASIC', '气管炎咳喘片', '气管炎咳喘片', 'A095', 1, 3, 800.00, '{[!QTA5NQ!]}', '功能与主治：
散风缜咳，祛痰定喘。感冒风邪，气管炎，肺热咳嗽，气促气喘不能躺卧，喉中作痒，痰涎壅盛，胸腹满闷，老年痰喘，支气管扩张，支气管缩萎等症。

主要组成：
前胡，远志，大枣，桑叶，生姜，陈皮，贝母，杏仁，党参，款冬花，枇杷叶，五味子等。', 4, 1, 1, 0, -554.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '气管炎咳喘片', '散风缜咳，祛痰定喘。感冒风邪，气管炎，肺热咳嗽，气促气喘不能躺卧，喉中作痒，痰涎壅盛，胸腹满闷，老年痰喘，支气管扩张，支气管缩萎等症。', '2019-06-05 16:47:08', '2022-09-22 07:46:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (184, 'BASIC', '牛黄解毒片', '牛黄解毒片', 'A107', 1, 3, 800.00, '{[!QTEwNw!]}', '功能与主治：
头痛眩景，咽喉脾痛，胃火口疮，牙根出血，暴发火眼，咽肿发颐，耳痛鼻腺，风火牙痛，小儿内热，停食停乳，呕吐结滞。

主要组成：
牛黄，桔梗，薄荷，白芷，黄芩，黄连，大黄，栀子，金银花。', 4, 1, 1, 0, -893.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '牛黄解毒片', '头痛眩景，咽喉脾痛，胃火口疮，牙根出血，暴发火眼，咽肿发颐，耳痛鼻腺，风火牙痛，小儿内热，停食停乳，呕吐结滞。', '2019-06-05 16:48:19', '2022-09-27 01:29:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (185, 'BASIC', '五苓散片', '五苓散片', 'A138', 1, 3, 800.00, '{[!QTEzOA!]}', '功能与主治：
化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。

主要组成：
茯苓，猪苓，泽泻，白术，桂枝。', 4, 1, 1, 0, -1035.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '五苓散片', '化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。', '2019-06-05 16:49:33', '2022-09-20 08:38:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (186, 'BASIC', '丹田降脂片', '丹田降脂片', 'A188', 1, 3, 800.00, '{[!QTE4OA!]}', '功能与主治：
降低血清脂质，改善微循环，活血化瘀。用于髙脂血症以及伴有脑动脉硬化，冠心病。

主要组成：
丹参，党参，川芎，泽泻，田七，首乌，当归，黄精，肉桂，淫羊藿，五加皮。', 4, 1, 1, 0, -24.000000, 0, 1, 1, 0, 84.000000, null, 10, 10, 10, 10, '丹田降脂片', '降低血清脂质，改善微循环，活血化瘀。用于髙脂血症以及伴有脑动脉硬化，冠心病。', '2019-06-05 16:50:38', '2022-09-20 13:40:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (187, 'BASIC', '天麻钩藤片', '天麻钩藤片', 'A207', 1, 3, 800.00, '{[!QTIwNw!]}', '功能与主治：
肝肠上亢功能症，头景，面色如醉，项强，头痛，肢体不利。

主要组成：
天麻，钩藤，杜仲，牛膝，栀子，黄芩，茯苓，桑寄生，益母草，夜交藤，石决明。', 4, 1, 1, 0, -1044.000000, 0, 1, 1, 0, 84.000000, null, 10, 10, 10, 10, '天麻钩藤片', '肝肠上亢功能症，头景，面色如醉，项强，头痛，肢体不利。', '2019-06-05 16:52:05', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (188, 'BASIC', '心可宁片', '心可宁片', 'A224', 1, 3, 800.00, '{[!QTIyNA!]}', '功能与主治：
活血散瘀，开窍止痛。用于冠心病，心纹痛，胸闷，心摔，眩晕。

主要组成：
丹参，田七，红花，牛黄，人参须，石菖蒲，苏合香，水牛角浓缩粉。', 4, 1, 1, 0, -442.000000, 0, 1, 1, 0, 83.000000, null, 10, 10, 10, 10, '心可宁片', '活血散瘀，开窍止痛。用于冠心病，心纹痛，胸闷，心摔，眩晕。', '2019-06-05 16:53:22', '2022-09-22 01:16:59', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (189, 'BASIC', '毛冬青片', '毛冬青片', 'A255', 1, 3, 800.00, '{[!QTI1NQ!]}', '功能与主治：
促进血液循环，缓解咳嗽及身体热气。

主要组成：
毛冬青', 4, 1, 1, 0, -353.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '毛冬青片', '促进血液循环，缓解咳嗽及身体热气。', '2019-06-05 16:54:27', '2022-09-28 01:28:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (190, 'BASIC', '目疾灵片', '目疾灵片Y', 'A001', 1, 3, 800.00, '{[!QTAwMQ!]}', '功能与主治：
疏风清热，消炎退翳。眼痛羞明，流泪烟眼，红眼症等。

主要组成：
黄芩，梔子，菊花，桑叶，防风，荆芥，薄荷，板蓝根，金银花，密蒙花，蒲公英，龙胆草，紫花地丁。', 5, 1, 1, 0, -419.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '目 疾 灵 片', null, '2019-06-05 16:55:37', '2022-09-27 01:33:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (191, 'BASIC', '头痛片', '头痛片', 'A002', 1, 3, 800.00, '{[!QTAwMg!]}', '功能与主治：
风袭头面，郁结作痛。祛风开郁，散结止痛。头痛发作日久不愈，恶风心烦，恶心，脉弦，舌苔薄白。

主要组成：
川芎，柴胡，香附，白芷，蒿本，甘草，薄荷，郁李仁，白芥子。', 5, 1, 1, 0, -565.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '头痛片', '祛风止痛。用于两额头痛，巅顶痛，头痛兼有表症者。', '2019-06-05 16:56:57', '2022-09-26 03:21:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (192, 'BASIC', '甘露清热片', '甘露清热片', 'A017', 1, 3, 800.00, '{[!QTAxNw!]}', '功能与主治:
用于夏日肠胃性发热，黄疽，喉炎，耳下腺炎及胸闷，溺赤等症。

主要组成:
茵陈，通草，连翘，薄荷，射干，黄芩，滑石，石菖蒲，广藿香，川贝母，白豆蔻', 5, 1, 1, 0, -1219.000000, 0, 1, 1, 0, 69.000000, null, 10, 10, 10, 10, '甘露清热片', '用于夏日肠胃性发热，黄疽，喉炎，耳下腺炎及胸闷，溺赤等症。', '2019-06-05 16:58:34', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (193, 'BASIC', '生田七片', '生田七片', 'A026', 1, 3, 800.00, '{[!QTAyNg!]}', '功能与主治：
促进血脉循环，降低静脉血压，大补元气，强壮机能。便血，产後血瘀腹痛，跌打内外伤，预防及治疗冠心病与心纹痛，胆固醇过髙及减肥有效。

主要组成：
生田七', 5, 1, 1, 0, -654.000000, 0, 1, 1, 0, 188.000000, null, 10, 10, 10, 10, '生田七片', '促进血脉循环，降低静脉血压，大补元气，强壮机能。便血，产後血瘀腹痛，跌打内外伤，预防及治疗冠心病与心纹痛，胆固醇过髙及减肥有效。', '2019-06-05 17:00:01', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (194, 'BASIC', '生脉饮片', '生脉饮片', 'A035', 1, 3, 800.00, '{[!QTAzNQ!]}', '功能与主治：
益气生津，敛阴止汗。主治气阴不足，症见多汗口渴，气短体倦，脉细弱以久咳伤肺，气阴两伤之自汗气短者。

主要组成：
人参，麦冬，五味子。', 5, 1, 1, 0, -1708.000000, 0, 1, 1, 0, 71.000000, null, 10, 10, 10, 10, '生脉饮片', '益气生津，敛阴止汗。主治气阴不足，症见多汗口渴，气短体倦，脉细弱以久咳伤肺，气阴两伤之自汗气短者。', '2019-06-05 17:01:19', '2022-09-28 08:12:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (195, 'BASIC', '龙胆泻肝片', '龙胆泻肝片', 'A036', 1, 3, 800.00, '{[!QTAzNg!]}', '功能与主治：
泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。

主要组成：
泽泻，生地，柴胡，通草，甘草，黄芩，栀子，当归，龙胆草，车前子。', 5, 1, 1, 0, -2435.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '龙胆泻肝片', '泻肝胆实火，清三焦湿热。主治肝胆实火上升之头痛胁，口苦目赤，耳聋，以及肝胆湿热下注之小便淋浊。', '2019-06-05 17:02:59', '2022-09-28 02:14:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (196, 'BASIC', '平胃片', '平胃片', 'A051', 1, 3, 800.00, '{[!QTA1MQ!]}', '功能与主治：
消化不良，食欲不振及神经性之胃痛。健胃，整肠，适用於消化障碍，呕吐，腹痛，胃酸过多，腹气胀等。

主要组成：
苍术，枳壳，陈皮，甘草。', 5, 1, 1, 0, -3090.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '平胃片', '消化不良，食欲不振及神经性之胃痛。健胃，整肠，适用於消化障碍，呕吐，腹痛，胃酸过多，腹气胀等。', '2019-06-05 17:04:26', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (197, 'BASIC', '归脾片', '归脾片', 'A052', 1, 3, 800.00, '{[!QTA1Mg!]}', '功能与主治：
健脾养心，益气补血。用于治心力衰弱，神经衰弱，脾臓不运，食少倦怠及因贫血引起的失眠心悸，精神性头痛及月事不调。

主要组成：
当归，黄芪，白术，茯苓，党参，生姜，远志，大枣，木香，甘草，酸枣仁，桂元肉。', 5, 1, 1, 0, -2825.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '归脾片', '健脾养心，益气补血。用于治心力衰弱，神经衰弱，脾臓不运，食少倦怠及因贫血引起的失眠心悸，精神性头痛及月事不调。', '2019-06-05 17:05:52', '2022-10-04 15:04:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (198, 'BASIC', '四藤片', '四藤片', 'A070', 1, 3, 800.00, '{[!QTA3MA!]}', '功能与主治：
镇痛袪风，适用於风湿性关节炎。

主要组成：
石楠藤，宽筋藤，忍冬藤，异型南，五味子。', 5, 1, 1, 0, -384.000000, 0, 1, 1, 0, 71.000000, null, 10, 10, 10, 10, '四藤片', '镇痛袪风，适用於风湿性关节炎。', '2019-06-05 17:07:35', '2022-09-24 02:28:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (199, 'BASIC', '田七杜仲片', '田七杜仲片', 'A071', 1, 3, 800.00, '{[!QTA3MQ!]}', '功能与主治：
舒筋活络，祛瘀止痛，活血驱风，强壮筋骨。用于风湿性关节炎，肥大性腰椎炎，胸椎炎，颈椎炎，坐骨神经痛，三冬神经痛，神经性头痛，腰肌劳损等症。

主要组成：
田七，杜仲，独活，首乌，当归，丹参，牛膝，泽泻，秦艽，骨碎补。', 5, 1, 1, 0, -660.000000, 0, 1, 1, 0, 92.000000, null, 10, 10, 10, 10, '田七杜仲片', '舒筋活络，祛瘀止痛，活血驱风，强壮筋骨。用于风湿性关节炎，肥大性腰椎炎，胸椎炎，颈椎炎，坐骨神经痛，三冬神经痛，神经性头痛，腰肌劳损等症。', '2019-06-05 17:09:02', '2022-09-28 06:32:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (200, 'BASIC', '左归片', '左归片', 'A101', 1, 3, 800.00, '{[!QTEwMQ!]}', '功能与主治：
真阳肾水不足，精髄内亏。证见头晕目花，腰酸腿软，自汗盗汗，遗精，滑泄，口干咽燥，渴欲饮水，舌光少苔，脉细数。

主要组成：
牛膝，阿膠，山药，熟地黄，菟丝子，龟板膠，山茱萸，枸杞子。', 5, 1, 1, 0, -1658.000000, 0, 1, 1, 0, 106.000000, null, 10, 10, 10, 10, '左归片', '真阳肾水不足，精髄内亏。证见头晕目花，腰酸腿软，自汗盗汗，遗精，滑泄，口干咽燥，渴欲饮水，舌光少苔，脉细数。', '2019-06-05 17:10:32', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (201, 'BASIC', '右归片', '右归片', 'A102', 1, 3, 800.00, '{[!QTEwMg!]}', '功能与主治：
元阳不足，命门虚冷。证见久病气怯神疲，畏寒肢冷；或阳痿遗精，或阳衰无子；或小便自遗；或腰膝软弱，下肢浮肿；或饮食少进，大便不实。

主要组成：
熟地，山药，杜仲，当归，肉桂，干姜，枸杞子，菟丝子，鹿角膠，山茱萸。', 5, 1, 1, 0, -454.000000, 0, 1, 1, 0, 106.000000, null, 10, 10, 10, 10, '右归片', '元阳不足，命门虚冷。证见久病气怯神疲，畏寒肢冷；或阳痿遗精，或阳衰无子；或小便自遗；或腰膝软弱，下肢浮肿；或饮食少进，大便不实。', '2019-06-05 17:12:19', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (202, 'BASIC', '百咳片', '百咳片', 'A131', 1, 3, 800.00, '{[!QTEzMQ!]}', '功能与主治：
疏风解热，止咳化痰。用于感冒热咳，痰多气促。

主要组成：
竹茹，藿香，石膏，杏仁，沉香，枇杷叶，制半夏，葶苈子，石菖蒲，款冬花，紫苏子，桑白皮，。', 5, 1, 1, 0, -34.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '百咳片', '疏风解热，止咳化痰。用于感冒热咳，痰多气促。', '2019-06-05 17:21:04', '2022-09-26 02:14:42', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (203, 'BASIC', '正骨紫金片', '正骨紫金片', 'A175', 1, 3, 800.00, '{[!QTE3NQ!]}', '功能与主治：
促进血液循环及缓解轻微肿胀。

主要组成：
丁香，莲子，儿茶，白芍，血竭，丹皮，当归，木香，茯苓，红花，甘草，大黄。', 5, 1, 1, 0, -748.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '正骨紫金片', '促进血液循环及缓解轻微肿胀。', '2019-06-05 17:22:10', '2022-09-20 08:38:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (204, 'BASIC', '安睡枕中片', '安睡枕中片', 'A038', 1, 3, 800.00, '{[!QTAzOA!]}', '功能与主治：
补益气血，滋阴降火，镇心安神，增强记忆。阴虚火旺所致之心悸怔仲，多梦，头痛耳鸣，并治神经分裂症。

主要组成：
知母，丹参，远志，麦冬，白术，酸枣仁，石菖蒲，五味子。', 6, 1, 1, 0, -1156.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '安睡枕中片', '补益气血，滋阴降火，镇心安神，增强记忆。阴虚火旺所致之心悸怔仲，多梦，头痛耳鸣，并治神经分裂症。', '2019-06-05 17:23:25', '2022-09-27 01:58:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (205, 'BASIC', '安神补心片', '安神补心片', 'A246', 1, 3, 800.00, '{[!QTI0Ng!]}', '功能与主治：
养心安神。用于阴血不足引起的心悸失眠，头晕耳鸣。

主要组成：
丹参，生地，墨旱莲，石菖蒲，五味子，珍珠母，女贞子，菟丝子，合欢皮，夜交藤。', 6, 1, 1, 0, -366.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '安神补心片', '养心安神。用于阴血不足引起的心悸失眠，头晕耳鸣。', '2019-06-05 17:24:49', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (206, 'BASIC', '关节骨痛片', '关节骨痛片', 'A073', 1, 3, 800.00, '{[!QTA3Mw!]}', '功能与主治：
驱风怯湿，通络止痛。风湿骨痛，腰膝酸痛，四肢痹痛及关节炎等。

主要组成：
桑枝，独活，姜活，石膏，防风，桂枝，丁公藤，豨签草。', 6, 1, 1, 0, -374.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '关节骨痛片', '驱风怯湿，通络止痛。风湿骨痛，腰膝酸痛，四肢痹痛及关节炎等。', '2019-06-05 17:26:00', '2022-09-21 04:05:48', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (207, 'BASIC', '红花跌打片', '红花跌打片', 'A179', 1, 3, 800.00, '{[!QTE3OQ!]}', '功能与主治：
活血散瘀，消肿止痛。用于跌打损伤，积瘀肿痛。

主要组成：
大黄，当归，香附，郁金，丹皮，防风，乌药，陈皮，白芨，三棱，赤芍，蒲黄，枳实，青皮，红花，续断，莪術，独活，木香，三七，砂仁，五灵脂，骨碎补。', 6, 1, 1, 0, -1074.000000, 0, 1, 1, 0, 86.000000, null, 10, 10, 10, 10, '红花跌打片', '活血散瘀，消肿止痛。用于跌打损伤，积瘀肿痛。', '2019-06-05 17:27:12', '2022-09-26 08:39:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (208, 'BASIC', '防风通圣片', '防风通圣片', 'A105', 1, 3, 800.00, '{[!QTEwNQ!]}', '功能与主治：
感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。

主要组成：
防风，荆芥，薄荷，桂枝，大黄，芒硝，栀子，滑石，桔梗，石膏，川芎，当归，白芍，黄芩，连翘，甘草，白术。', 6, 1, 1, 0, -844.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '防风通圣片', '感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。', '2019-06-05 17:28:43', '2022-09-21 02:50:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (209, 'BASIC', '导赤片', '导赤片', 'A114', 1, 3, 800.00, '{[!QTExNA!]}', '功能与主治：
疏散风热，宣肺气，止咳嗽。适用于胃肠积热，口舌生疮，咽喉脾痛，牙根出血，腮颊肿痛，大便不适。

主要组成：
生地，茯苓，通草，栀子，赤芍，滑石，大黄。', 6, 1, 1, 0, -413.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '导赤片', '疏散风热，宣肺气，止咳嗽。适用于胃肠积热，口舌生疮，咽喉脾痛，牙根出血，腮颊肿痛，大便不适。', '2019-06-05 17:30:01', '2022-09-15 07:39:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (210, 'BASIC', '防芷鼻炎片', '防芷鼻炎片', 'A180', 1, 3, 800.00, '{[!QTE4MA!]}', '功能与主治:
清热消炎，祛风通络。用于治疗慢性鼻炎引起的喷嚏，鼻塞，头痛，过敏性鼻炎，慢性鼻窦炎。

主要组成:
白芷，防风，白芍，甘草，蒺藜，苍耳子，野菊花，墨旱莲，胆南星，鹅不食草。', 6, 1, 1, 0, -850.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '防芷鼻炎片', '清热消炎，祛风通络。用于治疗慢性鼻炎引起的喷嚏，鼻塞，头痛，过敏性鼻炎，慢性鼻窦炎。', '2019-06-05 17:35:22', '2022-09-26 08:48:15', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (211, 'BASIC', '回春再造片', '回春再造片', 'A191', 1, 3, 800.00, '{[!QTE5MQ!]}', '功能与主治：
活血化瘀，舒筋通络。

主要组成：
当归，川芎，红花，桃仁，丹参，地龙，蜈蚣，全蝎，僵蚕，木瓜，鸡血藤，忍冬藤，络石藤，土鳖虫，伸筋草，川牛膝，茺蔚子，千年健，金钱白花蛇。', 6, 1, 1, 0, -18.000000, 0, 1, 1, 0, 90.000000, null, 10, 10, 10, 10, '回春再造片', '活血化瘀，舒筋通络。', '2019-06-05 17:37:06', '2022-09-06 06:59:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (212, 'BASIC', '补中益气片', '补中益气片', 'A042', 1, 3, 800.00, '{[!QTA0Mg!]}', '功能与主治：
补中益气，升清降浊。中气不足，肠胃衰弱，食欲不振，精神倦怠，头痛懒言，阳虚自汗。

主要组成：
黄芪，党参，当归，陈皮，白术，甘草，升麻，柴胡，大枣，生姜。', 7, 1, 1, 0, -1795.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '补中益气片', '补中益气，升清降浊。中气不足，肠胃衰弱，食欲不振，精神倦怠，头痛懒言，阳虚自汗。', '2019-06-05 17:38:46', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (213, 'BASIC', '芳香化湿片', '芳香化湿片', 'A053', 1, 3, 800.00, '{[!QTA1Mw!]}', '功能与主治：
芳香化湿，理气和中，清热化痰。外感风寒，湿热内阻，痰浊上扰。症见发热恶寒，不思饮食，胸膈满闷，呕吐痰延，或脘腹胀痛，肠鸣泄泻，舌苔厚腻等。

主要组成：
藿香，陈皮，仓术，茯苓，泽泻，佩兰，地肤子，白鲜皮。', 7, 1, 1, 0, -345.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '芳香化湿片', '芳香化湿，理气和中，清热化痰。外感风寒，湿热内阻，痰浊上扰。症见发热恶寒，不思饮食，胸膈满闷，呕吐痰延，或脘腹胀痛，肠鸣泄泻，舌苔厚腻等。', '2019-06-05 17:40:06', '2022-09-14 01:58:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (214, 'BASIC', '足跟痛片', '足跟痛片', 'A075', 1, 3, 800.00, '{[!QTA3NQ!]}', '功能与主治：
益肝壮腰，补筋强骨。用于足跟痛，腰腿酸痛，肝肾虚弱等症。

主要组成：
黄芪，地龙，白芍，熟地，杞子，当归，赤芍，生地，山药，牛膝，车前子，五味子。', 7, 1, 1, 0, -672.000000, 0, 1, 1, 0, 81.000000, null, 10, 10, 10, 10, '足跟痛片', '益肝壮腰，补筋强骨。用于足跟痛，腰腿酸痛，肝肾虚弱等症。', '2019-06-05 17:42:09', '2022-09-28 02:15:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (215, 'BASIC', '鸡血藤片', '鸡血藤片', 'A085', 1, 3, 800.00, '{[!QTA4NQ!]}', '功能与主治：
补血，活血，舒筋活筋。用於血虚，腰膝酸痛，关节不利，风湿痹痛及妇身不调等症。

主要组成：
鸡血藤', 7, 1, 1, 0, -426.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '鸡血藤片', '补血，活血，舒筋活筋。用於血虚，腰膝酸痛，关节不利，风湿痹痛及妇身不调等症。', '2019-06-05 17:43:33', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (216, 'BASIC', '抗骨增生片', '抗骨增生片', 'A093', 1, 3, 800.00, '{[!QTA5Mw!]}', '功能与主治：
壮腰键肾，强壮筋骨，养血止痛。用於增生性脊椎炎肥大性胸椎炎，颈椎综合症，骨刺等骨质增生症。

主要组成：
狗脊，牛膝，熟地黄，淫羊藿，鸡血藤，肉蓰蓉，莱菔子，骨碎补，女贞子。', 7, 1, 1, 0, -507.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '抗骨增生片', '壮腰键肾，强壮筋骨，养血止痛。用於增生性脊椎炎肥大性胸椎炎，颈椎综合症，骨刺等骨质增生症。', '2019-06-05 17:44:54', '2022-09-28 08:11:10', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (217, 'BASIC', '坐骨神经片', '坐骨神经片', 'A135', 1, 3, 800.00, '{[!QTEzNQ!]}', '功能与主治：
坐骨神经痛，骨质增生性，骨关节炎，风湿性骨关节炎，腰腿疼痛，四肢麻木，筋骨酸痛。

主要组成：
乳香，狗脊，川芎，千斤拔，豨莶草，鸡血藤，板蓝根，金樱子，桑寄生。', 7, 1, 1, 0, -1236.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '坐骨神经片', '坐骨神经痛，骨质增生性，骨关节炎，风湿性骨关节炎，腰腿疼痛，四肢麻木，筋骨酸痛。', '2019-06-05 17:46:06', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (218, 'BASIC', '杞菊地黄片', '杞菊地黄片', 'A170', 1, 3, 800.00, '{[!QTE3MA!]}', '功能与主治：
养肝，明目，滋阴补腰，肝肾阴虚，头晕目眩，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。

主要组成：
杞子，熟地，淮山，泽泻，菊花，丹皮，茯苓，山茱萸。', 7, 1, 1, 0, -1092.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '杞 菊 地 黄 片', '养肝，明目，滋阴补腰，肝肾阴虚，头晕目眩，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。', '2019-06-05 17:47:27', '2022-09-28 01:33:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (219, 'BASIC', '身痛逐瘀片', '身痛逐瘀片', 'A202', 1, 3, 800.00, '{[!QTIwMg!]}', '功能与主治：
肢体疼痛，肩胛，腰背酸痛，跌打损伤瘀痛，多发性周围神经炎，坐骨神经炎，中风后遗症，类风湿性关结炎，组织病 变，神经性偏头痛，三叉神经痛，痛风。

主要组成：
秦艽，川芎，桃仁，红花，甘草，姜活，没药，当归，香附，牛膝，地龙，五灵脂。', 7, 1, 1, 0, -1083.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '身痛逐瘀片', '肢体疼痛，肩胛，腰背酸痛，跌打损伤瘀痛，多发性周围神 经炎，坐骨神经炎，中风后遗症，类风湿性关结炎，组织病变，神经性偏头痛，三叉神经痛，痛风。', '2019-06-05 17:48:45', '2022-10-04 15:04:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (220, 'BASIC', '参苓白术片', '参苓白术片', 'A054', 1, 3, 800.00, '{[!QTA1NA!]}', '功能与主治：
补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷诸症。

主要组成：
人参，莲子，桔梗，山药，甘草，白术，茯苓，砂仁，薏苡仁，白扁豆，。', 8, 1, 1, 0, -1541.000000, 0, 1, 1, 0, 68.000000, null, 10, 10, 10, 10, '参苓白术片', '补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷诸症。', '2019-06-05 17:49:59', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (221, 'BASIC', '苦参片', '苦参片', 'A066', 1, 3, 800.00, '{[!QTA2Ng!]}', '功能与主治：
祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。

主要组成：
苦参，白芷，蛇床子，金银花，野菊花，地肤子，石菖蒲。', 8, 1, 1, 0, -378.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '苦参片', '祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。', '2019-06-05 17:51:11', '2022-09-23 07:34:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (222, 'BASIC', '枝子清火片', '枝子清火片', 'A110', 1, 3, 800.00, '{[!QTExMA!]}', '功能与主治：
清火解毒，凉血消肺，用于咽喉脯痛，牙痛自赤，身热懊恼，虚烦不眠等症。

主要组成：
栀子，麦冬，穿心莲。', 8, 1, 1, 0, -26.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '枝子清火片', '清火解毒，凉血消肺，用于咽喉脯痛，牙痛自赤，身热懊恼，虚烦不眠等症。', '2019-06-05 17:52:29', '2022-09-20 08:38:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (223, 'BASIC', '金佛止痛片', '金佛止痛片', 'A111', 1, 3, 800.00, '{[!QTExMQ!]}', '功能与主治：
缓解疼痛及促进血液循环。

主要组成：
郁香，佛手，白芍，甘草，田七，川芎。', 8, 1, 1, 0, -508.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '金佛止痛片', '缓解疼痛及促进血液循环。', '2019-06-05 17:53:34', '2022-09-26 07:55:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (224, 'BASIC', '金匮肾气片', '金匮肾气片', 'A221', 1, 3, 800.00, '{[!QTIyMQ!]}', '功能与主治：
温补肾阳，化气行水。用于肾虚水肿，腰酸腿软。

主要组成：
地黄，山药，茯苓，泽泻，丹皮，肉桂，桂枝，山茱萸。', 8, 1, 1, 0, -2512.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '金匮肾气片', '温补肾阳，化气行水。用于肾虚水肿，腰酸腿软。', '2019-06-05 17:54:39', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (225, 'BASIC', '降脂片', '降脂片', 'A129', 1, 3, 800.00, '{[!QTEyOQ!]}', '功能与主治：
髙血脂，冠心痛，髙血压，肥胖等症。

主要组成：
山楂，首乌，黄精，木香，泽泻，决明子，桑寄生，金樱子。', 8, 1, 1, 0, -124.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '降脂片', '髙血脂，冠心痛，髙血压，肥胖等症。', '2019-06-05 17:55:56', '2022-09-06 08:39:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (226, 'BASIC', '降脂化瘀片', '降脂化瘀片', 'A196', 1, 3, 800.00, '{[!QTE5Ng!]}', '功能与主治：
健脾利水，降脂，活血化瘀。用于肥胖症，髙血脂症。

主要组成：
茯苓，丹参，麦芽，首乌，山楂，白術，当归，赤芍，柴胡，黄芩，丹皮，青皮，陈皮，甘草，玉米须。', 8, 1, 1, 0, -131.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '降脂化瘀片', '健脾利水，降脂，活血化瘀。用于肥胖症，髙血脂症。', '2019-06-05 17:57:09', '2022-09-20 08:38:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (227, 'BASIC', '肺热喘咳片', '肺热喘咳片', 'A154', 1, 3, 800.00, '{[!QTE1NA!]}', '功能与主治：
清肺热，止咳，化痰。用于肺热咳嗽，痰多粘稠。

主要组成：
芦根，甘草，桔梗，石膏，连翘，桃仁，杏仁，淡豆鼓，淡竹叶，白花蛇舌，板蓝根，冬瓜子，鱼腥草，牛蒡子，生薏仁，金银花。', 8, 1, 1, 0, -250.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '肺热喘咳片', '清肺热，止咳，化痰。用于肺热咳嗽，痰多粘稠。', '2019-06-05 17:58:23', '2022-09-19 02:28:38', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (228, 'BASIC', '知柏地黄片', '知柏地黄片', 'A178', 1, 3, 800.00, '{[!QTE3OA!]}', '功能与主治：
滋阴降火。用于阴虚火旺，潮热盗汗，口干咽痛，耳鸣遗精，小便短赤。

主要组成：
知母，茯苓，黄芩，山药，熟地，丹皮，泽泻，山茱萸。', 8, 1, 1, 0, -1755.000000, 0, 1, 1, 0, 68.000000, null, 10, 10, 10, 10, '知柏地黄片', '滋阴降火。用于阴虚火旺，潮热盗汗，口干咽痛，耳鸣遗精，小便短赤。', '2019-06-05 17:59:38', '2022-09-26 03:19:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (229, 'BASIC', '固精补肾片', '固精补肾片', 'A216', 1, 3, 800.00, '{[!QTIxNg!]}', '功能与主治：
温补脾肾虚实，食减神疲，腰酸体倦，早泄梦遗.

主要组成：
熟地，牛膝，杜仲，山药，茯苓，远志，甘草，枸杞子，覆盆子，楮实子，金樱子，肉苁蓉，菟丝子，山茱萸，五味子，石菖蒲，小茴香，巴戟天。', 8, 1, 1, 0, -1048.000000, 0, 1, 1, 0, 87.000000, null, 10, 10, 10, 10, '固精补肾片', '温补脾肾虚实，食减神疲，腰酸体倦，早泄梦遗.', '2019-06-05 18:00:47', '2022-09-28 01:33:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (230, 'BASIC', '固本强身片', '固本强身片', 'A262', 1, 3, 800.00, '{[!QTI2Mg!]}', '功能与主治：
用于强壮身体。

主要组成：
人参，乌鸡，花粉，淫羊藿，枸杞子，何首乌，冬虫夏草。', 8, 0, 1, 0, -16.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '固本强身片', '用于强壮身体。', '2019-06-05 18:01:52', '2021-11-02 08:48:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (231, 'BASIC', '复方山豆根片', '复方山豆根片', 'A003', 1, 3, 800.00, '{[!QTAwMw!]}', '功能与主治：
肺热咳嗽，疮疡肿毒，感冒发烧，急慢性咽喉炎，扁桃腺炎。

主要组成：
射干，黄芩，山豆根，穿心莲，金银花。', 9, 1, 1, 0, -132.000000, 0, 1, 1, 0, 68.000000, null, 10, 10, 10, 10, '复 方 山 豆 根 片', null, '2019-06-05 18:03:51', '2022-09-09 05:03:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (232, 'BASIC', '复方板兰根片', '复方板兰根片', 'A004', 1, 3, 800.00, '{[!QTAwNA!]}', '功能与主治：
消炎解毒。用于各急性炎症，发热，化脓性感症（如耳，鼻，喉科炎症，腮腺炎，咽喉炎以及乳腺炎，疮疖肿痛等。

主要组成：
板蓝根，蒲公英，紫花地丁。', 9, 1, 1, 0, -465.000000, 0, 1, 1, 0, 69.000000, null, 10, 10, 10, 10, '复 方 板 兰 根 片', null, '2019-06-05 18:15:37', '2022-09-27 01:33:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (233, 'BASIC', '复方藿胆片', '复方藿胆片', 'A005', 1, 3, 800.00, '{[!QTAwNQ!]}', '功能与主治:
驱风，缓解热气及鼻塞。

主要组成:
霍香，蛇胆，金银花，鱼腥草', 9, 1, 1, 0, -24.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '复 方 藿 胆 片', null, '2019-06-05 18:16:53', '2022-09-06 06:59:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (234, 'BASIC', '复方丹参片', '复方丹参片', 'A040', 1, 3, 800.00, '{[!QTA0MA!]}', '功能与主治：
活血化瘀，芳香开窍，理气止痛，强心生脉。本品为治疗冠心病药，适用於胸闷及心绞痛。

主要组成：
丹参，三七，人参，麦冬，苏合香。', 9, 1, 1, 0, -2548.000000, 0, 1, 1, 0, 86.000000, null, 10, 10, 10, 10, '复方丹参片', '活血化瘀，芳香开窍，理气止痛，强心生脉。本品为治疗冠心病药，适用於胸闷及心绞痛。', '2019-06-05 18:18:54', '2022-10-04 15:04:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (235, 'BASIC', '复方山楂降脂片', '复方山楂降脂片', 'A044', 1, 3, 800.00, '{[!QTA0NA!]}', '功能与主治：
活血化瘀，降脂减肥。用於高血压，伴有脑动脉硬化，冠心病，肥胖等症。

主要组成：
山楂，田七，丹参，泽泻，川芎，党参，首乌，当归，黄精。', 9, 1, 1, 0, -1053.000000, 0, 1, 1, 0, 83.000000, null, 10, 10, 10, 10, '复方山楂降脂片', '活血化瘀，降脂减肥。用於高血压，伴有脑动脉硬化，冠心病，肥胖等症。', '2019-06-05 18:20:04', '2022-09-28 02:14:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (236, 'BASIC', '复方白芷片', '复方白芷片', 'A080', 1, 3, 800.00, '{[!QTA4MA!]}', '功能与主治：
促进血液循环和纾解疼痛。

主要组成：
白芷，三七，白芍，川芎。', 9, 1, 1, 0, -469.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '复方白芷片', '促进血液循环和纾解疼痛。', '2019-06-05 18:21:36', '2022-09-26 08:39:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (237, 'BASIC', '复方鸡血藤片', '复方鸡血藤片', 'A081', 1, 3, 800.00, '{[!QTA4MQ!]}', '功能与主治：
补血行血，袪风除湿，舒筋活络，补肝壮骨。筋骨酸软，四肢麻木，腰膝酸痛，筋脉拘挛等症。

主要组成：
当归，牛膝，鸡血藤，豆鼓姜，海风藤，半枫荷叶，枫香寄生。', 9, 1, 1, 0, -600.000000, 0, 1, 1, 0, 75.000000, null, 10, 10, 10, 10, '复方鸡血藤片', '补血行血，袪风除湿，舒筋活络，补肝壮骨。筋骨酸软，四肢麻木，腰膝酸痛，筋脉拘挛等症。', '2019-06-05 18:22:43', '2022-09-23 09:27:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (238, 'BASIC', '复方四藤祛风片', '复方四藤祛风片', 'A092', 1, 3, 800.00, '{[!QTA5Mg!]}', '功能与主治：
袪风除湿，舒筋活络，通血壮骨。风湿性关节炎，腰腿酸痛，以及气血不通引起的四肢麻木痹痛等症。

主要组成：
当归，甘草，石楠藤，穿根藤，忍冬藤，海风藤，饭团藤，淫羊藿，千年健，毛冬青。', 9, 1, 1, 0, -692.000000, 0, 1, 1, 0, 81.000000, null, 10, 10, 10, 10, '复方四藤祛风片', '袪风除湿，舒筋活络，通血壮骨。风湿性关节炎，腰腿酸痛，以及气血不通引起的四肢麻木痹痛等症。', '2019-06-05 18:24:40', '2022-09-27 01:32:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (239, 'BASIC', '复方罗布麻片', '复方罗布麻片', 'A100', 1, 3, 800.00, '{[!QTEwMA!]}', '功能与主治：
降压药，清热，平肝，安神。用于髙血压，神经衰弱引起的头晕，心悸，失眠等症。

主要组成：
山楂，牛膝，钩藤，泽泻，菊花，杜仲，罗布麻，夏枯草，珍珠母，龙胆草。', 9, 1, 1, 0, -437.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '复方罗布麻片', '降压药，清热，平肝，安神。用于髙血压，神经衰弱引起的头晕，心悸，失眠等症。', '2019-06-05 18:25:54', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (240, 'BASIC', '复方活络片', '复方活络片', 'A118', 1, 3, 800.00, '{[!QTExOA!]}', '功能与主治：
强化肌肉和骨骼，改善血液循环，驱风和感冒。

主要组成：
杜仲，肉桂，白术，白芍，防风，狗脊，川断，党参，当归，独活，菟丝子，熟地黄，怀牛膝，千年健，徐长脚，豨薟草。', 9, 1, 1, 0, -46.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '复方活络片', '强化肌肉和骨骼，改善血液循环，驱风和感冒。', '2019-06-05 18:27:09', '2022-06-06 09:40:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (241, 'BASIC', '复方感冒灵片', '复方感冒灵片', 'A120', 1, 3, 800.00, '{[!QTEyMA!]}', '功能与主治：
各类型之感冒，防治流行性感冒。

主要组成：
崗梅，佛手，金银花，野菊花，板蓝根，三丫苦叶。', 9, 1, 1, 0, -80.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '复方感冒灵片', '各类型之感冒，防治流行性感冒。', '2019-06-06 03:03:31', '2022-09-28 02:15:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (242, 'BASIC', '复方穿心莲片', '复方穿心莲片', 'A139', 1, 3, 800.00, '{[!QTEzOQ!]}', '功能与主治：
用于各种急性炎症，发热，化脓性感染。(如耳，鼻，喉科炎症，腮腺炎，疮疖肿痛等。）

主要组成：
穿心莲，板兰根，蒲公英，紫花地丁。', 9, 1, 1, 0, -387.000000, 0, 1, 1, 0, 66.000000, null, 10, 10, 10, 10, '复方穿心莲片', '用于各种急性炎症，发热，化脓性感染。(如耳，鼻，喉科炎症，腮腺炎，疮疖肿痛等。）', '2019-06-06 03:05:07', '2022-09-22 07:46:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (243, 'BASIC', '复方野木瓜片', '复方野木瓜片', 'A142', 1, 3, 800.00, '{[!QTE0Mg!]}', '功能与主治：
治风湿痹痛，三冬神经痛，坐骨神经痛，神经性头痛。

主要组成：
木瓜，骨碎补。', 9, 1, 1, 0, -39.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '复方野木瓜片', '治风湿痹痛，三冬神经痛，坐骨神经痛，神经性头痛。', '2019-06-06 03:06:38', '2022-09-14 06:43:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (244, 'BASIC', '复方川贝片', '复方川贝片', 'A166', 1, 3, 800.00, '{[!QTE2Ng!]}', '功能与主治：
止咳，化痰，平喘，润肺。用于咳嗽，痰喘，急慢性支气管炎，风寒感冒咳嗽。

主要组成：
桔梗，陈皮，远志，甘草，生姜，川贝母，制半夏，五味子。', 9, 1, 1, 0, -166.000000, 0, 1, 1, 0, 77.000000, null, 10, 10, 10, 10, '复方川贝片', '止咳，化痰，平喘，润肺。用于咳嗽，痰喘，急慢性支气管炎，风寒感冒咳嗽。', '2019-06-06 03:07:59', '2022-09-09 04:54:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (245, 'BASIC', '复方杜仲片', '复方杜仲片', 'A194', 1, 3, 800.00, '{[!QTE5NA!]}', '功能与主治：
补肾，平肝，清热。用于肾虚肝旺之髙血压症。

主要组成：
杜仲，钩藤，黄芩，当归，川芎，黄芪，生地，元肉，藁本，愧花，夏枯草，益母草。', 9, 1, 1, 0, -284.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '复方杜仲片', '补肾，平肝，清热。用于肾虚肝旺之髙血压症。', '2019-06-06 03:10:19', '2022-09-06 07:40:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (246, 'BASIC', '复方桔梗镇咳片', '复方桔梗镇咳片', 'A184', 1, 3, 800.00, '{[!QTE4NA!]}', '功能与主治：
祛痰镇咳。用于一般咳嗽，祛痰，镇咳作用。

主要组成：
桔梗，甘草，远志，款冬花。', 9, 1, 1, 0, -128.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '复方桔梗镇咳片', '祛痰镇咳。用于一般咳嗽，祛痰，镇咳作用。', '2019-06-06 03:11:34', '2022-09-17 04:48:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (247, 'BASIC', '复方鱼腥草片', '复方鱼腥草片', 'A210', 1, 3, 800.00, '{[!QTIxMA!]}', '功能与主治：
清热解毒。用于外感风热引起的咽喉疼痛桃腺炎。急性喉炎，扁桃腺炎。

主要组成：
连翘，黄苓，鱼腥草，板蓝根，金银花。', 9, 1, 1, 0, -587.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '复方鱼腥草片', '清热解毒。用于外感风热引起的咽喉疼痛桃腺炎。急性喉炎，扁桃腺炎。', '2019-06-06 03:13:17', '2022-09-26 04:00:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (248, 'BASIC', '穿心莲片', '穿心莲片', 'A007', 1, 3, 800.00, '{[!QTAwNw!]}', '功能与主治：
清热解毒，消炎止痛。急性扁桃体炎，咽喉炎，急性肠胃炎，尿道炎，膀胱炎，细菌性痢痰及脓肿痕瘠。

主要组成：
穿心莲。', 9, 1, 1, 0, -857.000000, 0, 1, 1, 0, 56.000000, null, 10, 10, 10, 10, '穿心莲片', '清热解毒，消炎止痛。急性扁桃体炎，咽喉炎，急性肠胃炎，尿道炎，膀胱炎，细菌性痢痰及脓肿痕瘠。', '2019-06-06 03:14:20', '2022-09-19 04:51:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (249, 'BASIC', '祛湿清热片', '祛湿清热片', 'A020', 1, 3, 800.00, '{[!QTAyMA!]}', '祛 湿 清 热 片', 9, 1, 1, 0, -1736.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '祛湿清热片', '去湿利水，清热解毒，清心火。适用于喉痛，牙痛，耳痛，头痛，发热，不思饮食。口鼻生疮，面生暗疮，大便燥结，肠胃湿热，舌苔粗厚，痰多咳嗽，胃湿口臭，烟酒过多，小便赤黄，大便不通，眼起红根，喉乾鼻热。', '2019-06-06 03:16:05', '2022-09-28 04:02:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (250, 'BASIC', '保和片', '保和片', 'A055', 1, 3, 800.00, '{[!QTA1NQ!]}', '功能与主治：
消食和胃。食积停滞，胸脘痞滞，腹胀时痛，嗳腐吞酸，厌食呕恶，或大便稀烂，苔厚脉滑者。

主要组成：
山楂，茯苓，连翘，神曲，麦芽，陈皮，莱菔子，制半夏。', 9, 1, 1, 0, -2566.000000, 0, 1, 1, 0, 68.000000, null, 10, 10, 10, 10, '保和片', '消食和胃。食积停滞，胸脘痞滞，腹胀时痛，嗳腐吞酸，厌食呕恶，或大便稀烂，苔厚脉滑者。', '2019-06-06 03:18:38', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (251, 'BASIC', '香砂六君子片', '香砂六君子片', 'A056', 1, 3, 800.00, '{[!QTA1Ng!]}', '功能与主治：
消化不良，胸脘满闷，恶呕腹痛，肠鸣泄泻。

主要组成：
木香，砂仁，党参，白术，茯苓，甘草，陈皮，生姜，大枣，制法夏。', 9, 1, 1, 0, -1136.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '香砂六君子片', '消化不良，胸脘满闷，恶呕腹痛，肠鸣泄泻。', '2019-06-06 03:25:32', '2022-09-27 01:58:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (252, 'BASIC', '香砂养胃片', '香砂养胃片', 'A057', 1, 3, 800.00, '{[!QTA1Nw!]}', '功能与主治：
健胃消食，助气止痛。用於胃肠衰弱，消化不良，胸腹痛，呕吐，肠鸣泄泻。

主要组成：
陈皮、甘草、木香、白术、藿香、香附、茯苓、苍术、砂仁、枳实、豆蔻、生姜、大枣、制半夏。', 9, 1, 1, 0, -1455.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '香砂养胃片', '健胃消食，助气止痛。用於胃肠衰弱，消化不良，胸腹痛，呕吐，肠鸣泄泻。', '2019-06-06 03:30:58', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (253, 'BASIC', '独活寄生片', '独活寄生片', 'A079', 1, 3, 800.00, '{[!QTA3OQ!]}', '功能与主治：
祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。

主要组成：
独活，牛膝，桂枝，秦艽，茯苓，肉桂，防风，川芎，党参，甘草，当归，白芍，杜仲，桑寄生，熟地黄。', 9, 1, 1, 0, -2838.000000, 0, 1, 1, 0, 74.000000, null, 10, 10, 10, 10, '独活寄生片', '祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。', '2019-06-06 03:32:32', '2022-10-04 15:04:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (254, 'BASIC', '顺气化痰止咳片', '顺气化痰止咳片', 'A097', 1, 3, 800.00, '{[!QTA5Nw!]}', '功能与主治：
顺气化痰止咳。慢性支气管疾病，老中性支气管疾病，感冒咳嗽。

主要组成：
桂枝，白芍，甘草，五味子，制半夏。', 9, 1, 1, 0, -20.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '顺气化痰止咳片', '顺气化痰止咳。慢性支气管疾病，老中性支气管疾病，感冒咳嗽。', '2019-06-06 03:34:40', '2022-09-05 01:41:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (255, 'BASIC', '顺气止咳片', '顺气止咳片', 'A263', 1, 3, 800.00, '{[!QTI2Mw!]}', '功能与主治：
缓解痰和咳嗽。

主要组成：
甘草，陈皮，薄荷，苦杏仁，紫苏叶，胆南星，川贝母，紫苏子，枇杷叶，制半夏。', 9, 0, 1, 0, -4.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '顺气止咳片', '缓解痰和咳嗽。', '2019-06-06 03:35:56', '2021-11-02 08:48:18', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (256, 'BASIC', '胃乃安片', '胃乃安片', 'A104', 1, 3, 800.00, '{[!QTEwNA!]}', '功能与主治：
胃及十二指肠溃疡，急慢性胃炎，消化不良，胃肠功能紊乱等。

主要组成：
党参，黄芩，三七，牛黄，珍珠。', 9, 1, 1, 0, -323.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '胃乃安片', '胃及十二指肠溃疡，急慢性胃炎，消化不良，胃肠功能紊乱等。', '2019-06-06 03:37:30', '2022-09-13 04:36:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (257, 'BASIC', '胃痛定片', '胃痛定片', 'A182', 1, 3, 800.00, '{[!QTE4Mg!]}', '功能与主治：
舒气，化郁，逐寒止痛。用于胃寒痛，胃气痛，食积痛。

主要组成：
肉桂，人参，丁香，木香，红花，枳殻，沉香，芫花，蜂房，高姜良，肉豆蔻，白胡椒，五灵脂。', 9, 1, 1, 0, -110.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '胃痛定片', '舒气，化郁，逐寒止痛。用于胃寒痛，胃气痛，食积痛。', '2019-06-06 03:39:43', '2022-09-07 02:52:11', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (258, 'BASIC', '胃得安片', '胃得安片', 'A229', 1, 3, 800.00, '{[!QTIyOQ!]}', '功能与主治：
健脾消稍，和胃止痛。用于胃溃疡，十二指肠溃疡，慢性胃炎等病。

主要组成：
白术，黄芩，麦芽，川芎，砂仁，泽泻，神曲，香附，苍术，甘草，谷芽，积壳，莱菔子，瓜蒌仁。', 9, 1, 1, 0, -1250.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '胃得安片', '健脾消稍，和胃止痛。用于胃溃疡，十二指肠溃疡，慢性胃炎等病。', '2019-06-06 03:40:57', '2022-09-28 06:40:50', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (259, 'BASIC', '养阴清肺片', '养阴清肺片', 'A128', 1, 3, 800.00, '{[!QTEyOA!]}', '功能与主治：
养阴清肺，凉血解毒。主治白喉，症见喉间起白斑点如腐，不易拭去，呼吸有声，或咳或不咳，发热，鼻乾唇燥，舌红苔白薄。

主要组成：
生地，麦冬，玄参，丹皮，白芍，甘草，薄荷，浙贝母。', 9, 1, 1, 0, -486.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '养阴清肺片', '养阴清肺，凉血解毒。主治白喉，症见喉间起白斑点如腐，不易拭去，呼吸有声，或咳或不咳，发热，鼻乾唇燥，舌红苔白薄。', '2019-06-06 03:42:05', '2022-09-15 07:39:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (260, 'BASIC', '前列通片', '前列通片', 'A146', 1, 3, 800.00, '{[!QTE0Ng!]}', '功能与主治：
纾解身体热气及促进血液循环。

主要组成：
黄芪，黄芩，泽兰，薛荔，琥珀，肉桂，蒲公英，车前子，小茴香，竹节香附。', 9, 1, 1, 0, -895.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '前列通片', '纾解身体热气及促进血液循环。', '2019-06-06 03:43:49', '2022-09-28 06:28:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (261, 'BASIC', '活血解毒片', '活血解毒片', 'A186', 1, 3, 800.00, '{[!QTE4Ng!]}', '功能与主治：
解毒消肿，活血止痛。用于肺腑毒热，气血凝结引起的痈毒初起，乳痈乳炎，坚硬疼痛，结核，疔痛恶疮，无名肿毒。

主要组成：
乳香，没药，蜈蚣，稷米，石菖蒲，蛇床子。', 9, 1, 1, 0, -34.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '活血解毒片', '解毒消肿，活血止痛。用于肺腑毒热，气血凝结引起的痈毒初起，乳痈乳炎，坚硬疼痛，结核，疔痛恶疮，无名肿毒。', '2019-06-06 03:47:01', '2022-09-20 08:38:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (262, 'BASIC', '咳嗽定喘片', '咳嗽定喘片', 'A226', 1, 3, 800.00, '{[!QTIyNg!]}', '功能与主治：
降气定喘，除痰止咳。用于慢性支气管炎，咳嗽气促等症。

主要组成：
苏子，黄芩，桂枝，甘草，杏仁，白果，桑白皮，款冬花，制半夏。', 9, 1, 1, 0, -22.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '咳嗽定喘片', '降气定喘，除痰止咳。用于慢性支气管炎，咳嗽气促等症。', '2019-06-06 03:48:15', '2022-08-04 06:20:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (263, 'BASIC', '结石通片', '结石通片', 'A249', 1, 3, 800.00, '{[!QTI0OQ!]}', '功能与主治：
清热利湿，通淋排石，镇痛止血。用于泌尿系统感染，膀胱炎，淋沥混浊，尿道灼痛。

主要组成：
石韦，茯苓，鸡骨草，海金砂，玉米须，车前草，白茅根，广金钱草。', 9, 1, 1, 0, -745.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '结石通片', '清热利湿，通淋排石，镇痛止血。用于泌尿系统感染，膀胱炎，淋沥混浊，尿道灼痛。', '2019-06-06 03:50:18', '2022-09-26 03:23:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (264, 'BASIC', '桑菊饮片', '桑菊饮片', 'A006', 1, 3, 800.00, '{[!QTAwNg!]}', '功能与主治:
疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。

主要组成:
桑叶，连翘，甘草，桔梗，菊花，杏仁，芦根，薄荷。', 10, 1, 1, 0, -907.000000, 0, 1, 1, 0, 65.000000, null, 10, 10, 10, 10, '桑菊饮片', '疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。', '2019-06-06 04:24:33', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (265, 'BASIC', '消肿活血片', '消肿活血片', 'A027', 1, 3, 800.00, '{[!QTAyNw!]}', '功能与主治：
活血消肿，舒筋接骨。跌打刀伤，脱臼，骨折裂，跌打肿痛，扭伤挫伤，关节扭伤之屈伸障碍等。

主要组成：
续断，赤芍，泽兰，桂枝，牛膝，当归，两面针，大丁香。', 10, 1, 1, 0, -1270.000000, 0, 1, 1, 0, 89.000000, null, 10, 10, 10, 10, '消肿活血片', '活血消肿，舒筋接骨。跌打刀伤，脱臼，骨折裂，跌打肿痛，扭伤挫伤，关节扭伤之屈伸障碍等。', '2019-06-06 04:39:12', '2022-09-26 07:55:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (266, 'BASIC', '桂枝茯苓片', '桂枝茯苓片', 'A024', 1, 3, 800.00, '{[!QTAyNA!]}', '功能与主治：
活血化瘀，消症。妇女小腹有积块按痛，腹孪急心及妇身困难或闭腹痛或产后恶露不尽，腹热炽等症。

主要组成：
桂枝，桃仁，赤芍，茯苓，丹皮。', 10, 1, 1, 0, -909.000000, 0, 1, 1, 0, 69.000000, null, 10, 10, 10, 10, '桂枝茯苓片', '活血化瘀，消症。妇女小腹有积块按痛，腹孪急心及妇身困难或闭腹痛或产后恶露不尽，腹热炽等症。', '2019-06-06 04:50:17', '2022-09-15 07:39:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (267, 'BASIC', '益氣缩泉片', '益氣缩泉片', 'A058', 1, 3, 800.00, '{[!QTA1OA!]}', '功能与主治：
开窍益智，缩尿益气。日夜小便频数，遗滴不固，腰酸腿软，各种遗尿症。
​
主要组成：
党参，巴戟，益智仁，石菖蒲，五味子，菟丝子，肉蓰蓉，桑螵蛸，枸杞子，补骨脂。', 10, 1, 1, 0, -850.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '益 氣 缩 泉 片', null, '2019-06-06 05:04:00', '2022-09-21 02:14:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (268, 'BASIC', '热毒消肿片', '热毒消肿片', 'A019', 1, 3, 800.00, '{[!QTAxOQ!]}', '功能与主治：
缓解身体热气及轻度肿胀。

主要组成：
金银花，野菊花，鱼腥草，蒲公英，穿心莲，板蓝根，紫花地丁。', 10, 1, 1, 0, -768.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '热毒消肿片', '缓解身体热气及轻度肿胀。', '2019-06-06 05:08:34', '2022-09-20 08:38:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (269, 'BASIC', '热痹片', '热痹片', 'A077', 1, 3, 800.00, '{[!QTA3Nw!]}', '功能与主治：
用于祛风，缓解热气和加强肌肉。

主要组成：
桑枝，木瓜，丹参，荆芥，姜活，独活，忍冬藤，透骨草，伸筋草，络石藤。', 10, 1, 1, 0, -492.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '热痹片', '用于祛风，缓解热气和加强肌肉。', '2019-06-06 05:09:38', '2022-09-13 04:38:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (270, 'BASIC', '通血活络片', '通血活络片', 'A084', 1, 3, 800.00, '{[!QTA4NA!]}', '功能与主治：
活血祛瘀，袪风通络，利关节。关节骨痛，四肢麻痹，风湿性关节炎等症。

主要组成：
乳香，丹参，秦艽，杜仲，黄芪，没药，桑枝，石楠藤，海风藤，忍冬藤。', 10, 1, 1, 0, -771.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '通血活络片', '活血祛瘀，袪风通络，利关节。关节骨痛，四肢麻痹，风湿性关节炎等症。', '2019-06-06 05:13:29', '2022-09-19 04:05:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (271, 'BASIC', '通络化痹片', '通络化痹片', 'A140', 1, 3, 800.00, '{[!QTE0MA!]}', '功能与主治：
痹症（坐骨神经痛，风温关节炎等）。用于肢体骨节酸楚，麻木，疼痛。

主要组成：
木瓜，陈皮，香附，郁金，钩藤，川芎，柴胡，乳香，没药，木香，蜂房，白芷，鸡血藤，丝瓜络。', 10, 1, 1, 0, -1098.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '通络化痹片', '痹症（坐骨神经痛，风温关节炎等）。用于肢体骨节酸楚，麻木，疼痛。', '2019-06-06 05:14:56', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (272, 'BASIC', '通宣理肺片', '通宣理肺片', 'A181', 1, 3, 800.00, '{[!QTE4MQ!]}', '功能与主治：
解毒散寒，宣肺止嗽。用于感冒咳嗽，发热恶寒，鼻塞流涕，头痛无汗，肢体酸痛。

主要组成：
前胡，桔梗，陈皮，茯苓，黄芩，杏仁，甘草，枳殻，紫苏叶，制半夏。', 10, 1, 1, 0, -24.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '通宣理肺片', '解毒散寒，宣肺止嗽。用于感冒咳嗽，发热恶寒，鼻塞流涕，头痛无汗，肢体酸痛。', '2019-06-06 05:16:30', '2022-09-05 01:41:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (273, 'BASIC', '桔红片', '桔红片', 'A125', 1, 3, 800.00, '{[!QTEyNQ!]}', '功能与主治：
用于咳嗽痰多，痰不易出，胸闷口干。

主要组成：
茯苓，生地，紫菀，陈皮，石膏，麦冬，甘草，杏仁，苏子，桔梗，制半夏，瓜蔞皮，浙贝母，款冬花，化橘红。', 10, 1, 1, 0, -48.000000, 0, 1, 1, 0, 88.000000, null, 10, 10, 10, 10, '桔红片', '用于咳嗽痰多，痰不易出，胸闷口干。', '2019-06-06 05:17:40', '2022-09-14 02:16:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (274, 'BASIC', '骨松宝片', '骨松宝片', 'A193', 1, 3, 800.00, '{[!QTE5Mw!]}', '功能与主治：
补肾活血，强筋壮骨。用于骨痿（骨质疏松）引起骨折，骨痛，骨关节炎，以及预防更年期骨质疏松。

主要组成：
川芎，三棱，续断，知母，生地，赤芍，莪术，杜蛎，淫羊藿。', 10, 1, 1, 0, -428.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '骨松宝片', '补肾活血，强筋壮骨。用于骨痿（骨质疏松）引起骨折，骨痛，骨关节炎，以及预防更年期骨质疏松。', '2019-06-06 05:19:03', '2022-09-20 08:38:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (275, 'BASIC', '骨刺片', '骨刺片', 'A264', 1, 3, 800.00, '{[!QTI2NA!]}', '功能与主治：
强化腰部，促进血液循环，缓解关节疼痛。

主要组成：
杜仲，狗脊，牛膝，淫羊藿，熟地黄，肉苁蓉，骨碎补，鸡血藤，女贞子，炒莱菔子。', 10, 1, 1, 0, -49.000000, 0, 1, 1, 0, 81.000000, null, 10, 10, 10, 10, '骨刺片', '强化腰部，促进血液循环，缓解关节疼痛。', '2019-06-06 05:20:15', '2022-09-19 14:33:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (276, 'BASIC', '柴葛解肌片', '柴葛解肌片', 'A205', 1, 3, 800.00, '{[!QTIwNQ!]}', '功能与主治：
解肌退热，兼清里热。主治感冒风寒，症见恶寒渐轻，身热增盛，头痛肢楚，眼眶痛，苔薄黄，脉浮稍洪者。

主要组成：
柴胡，葛根，石膏，黄芩，白芍，姜活，白芷，甘草，桔梗，生姜，大枣。', 10, 1, 1, 0, -555.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '柴葛解肌片', '解肌退热，兼清里热。主治感冒风寒，症见恶寒渐轻，身热增盛，头痛肢楚，眼眶痛，苔薄黄，脉浮稍洪者。', '2019-06-06 05:21:29', '2022-09-19 04:53:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (277, 'BASIC', '凉膈散片', '凉膈散片', 'A208', 1, 3, 800.00, '{[!QTIwOA!]}', '功能与主治：
清上，泻下。主治上，中二焦盛，症见身热烦渴，胸膈灼热如焚，口舌生疮，便秘溲赤，或胃热发斑，发狂，舌红，苔黄或白，脉数等。

主要组成：
连翘，栀子，黄芩，大黄，甘草，薄荷，淡竹叶，玄明粉。', 10, 1, 1, 0, -425.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '凉膈散片', '凉膈通便。用于烦躁口渴，面赤唇焦，口舌生疮，胸膈积热，便秘尿赤。', '2019-06-06 05:23:02', '2022-09-22 01:15:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (278, 'BASIC', '逍遙片', '逍遙片', 'A227', 1, 3, 800.00, '{[!QTIyNw!]}', '功能与主治：
用于血虚火旺，头痛目眩，烦赤苦，寒热咳嗽。

主要组成：
当归，白术，茯苓，白芍，柴胡，生姜，甘草，薄荷。', 10, 1, 1, 0, -944.000000, 0, 1, 1, 0, 71.000000, null, 10, 10, 10, 10, '逍遙片', '用于血虚火旺，头痛目眩，烦赤苦，寒热咳嗽。', '2019-06-06 05:24:19', '2022-09-27 01:22:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (279, 'BASIC', '清火口糜片', '清火口糜片', 'A009', 1, 3, 800.00, '{[!QTAwOQ!]}', '功能与主治：
滋阴降火，清热解毒。用于虚火上升牙龈肿烂，口舌生疮，小便短赤等症。

主要组成：
竹叶，生地，黄精，洋参，通草，丹皮，玄参，金银花，车前子，板兰根。', 11, 1, 1, 0, -438.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '清火口糜片', '滋阴降火，清热解毒。用于虚火上升牙龈肿烂，口舌生疮，小便短赤等症。', '2019-06-06 05:25:35', '2022-09-19 02:28:57', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (280, 'BASIC', '脱痔片', '脱痔片', 'A061', 1, 3, 800.00, '{[!QTA2MQ!]}', '功能与主治：
清热润肠，止疼止血，消瘀散结，消肿生肌。用于外痔，内痨，脱肛痨，凸肠头痔，血痔，血栓痔，久痔以及上述诸痔的便后出血。

主要组成：
田七，槐角，槐花，地榆，紫珠，甘草，当归，金银花，盐霜柏。', 11, 1, 1, 0, -448.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '脱痔片', '清热润肠，止疼止血，消瘀散结，消肿生肌。用于外痔，内痨，脱肛痨，凸肠头痔，血痔，血栓痔，久痔以及上述诸痔的便后出血。', '2019-06-06 05:27:28', '2022-09-22 01:17:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (281, 'BASIC', '野木瓜片', '野木瓜片', 'A086', 1, 3, 800.00, '{[!QTA4Ng!]}', '功能与主治：
袪风止痛，舒筋活筋。三叉神经痛，坐骨神经痛，神经性头痛，风湿性关节痛。

主要组成：
野木瓜', 11, 1, 1, 0, -680.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '野木瓜片', '袪风止痛，舒筋活筋。三叉神经痛，坐骨神经痛，神经性头痛，风湿性关节痛。', '2019-06-06 05:32:00', '2022-09-23 09:30:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (282, 'BASIC', '清肺抑火片', '清肺抑火片', 'A106', 1, 3, 800.00, '{[!QTEwNg!]}', '功能与主治：
清肺止咳，降火生津。肺热咳嗽，痰涎壅盛，咽喉脾痛，口鼻生疮，牙齿疼痛，牙根出血，大便乾燥，小便赤黄。

主要组成：
黄芩，枝子，大黄，苦参，知母，桔梗，前胡，穿心莲，天花粉，浙贝母。', 11, 1, 1, 0, -892.000000, 0, 1, 1, 0, 71.000000, null, 10, 10, 10, 10, '清肺抑火片', '清肺止咳，降火生津。肺热咳嗽，痰涎壅盛，咽喉脾痛，口鼻生疮，牙齿疼痛，牙根出血，大便乾燥，小便赤黄。', '2019-06-06 05:34:50', '2022-09-12 08:14:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (283, 'BASIC', '清热润肠片', '清热润肠片', 'A112', 1, 3, 800.00, '{[!QTExMg!]}', '功能与主治：
用于肠热，积滞，便秘。

主要组成：
大黄，黄芩，枳实，甘草。', 11, 1, 1, 0, -1419.000000, 0, 1, 1, 0, 74.000000, null, 10, 10, 10, 10, '清热润肠片', '用于肠热，积滞，便秘。', '2019-06-06 05:37:15', '2022-09-19 04:55:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (284, 'BASIC', '清气化痰片', '清气化痰片', 'A251', 1, 3, 800.00, '{[!QTI1MQ!]}', '功能与主治：
缓解咳嗽和痰。

主要组成：
黄芩，陈皮，生姜，杏仁，积实，茯苓，瓜蒌仁，制半夏，胆南星。', 11, 1, 1, 0, -718.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '清气化痰片', '缓解咳嗽和痰。', '2019-06-06 05:38:39', '2022-09-14 06:36:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (285, 'BASIC', '清热止咳平喘片', '清热止咳平喘片', 'A260', 1, 3, 800.00, '{[!QTI2MA!]}', '功能与主治：
缓解咳嗽和热气。

主要组成：
连翘，桔梗，百部，杏仁，甘草，石膏，金银花。', 11, 1, 1, 0, -6.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '清热止咳平喘片', '缓解咳嗽和热气。', '2019-06-06 05:39:54', '2022-06-16 08:51:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (286, 'BASIC', '黄莲上清片', '黄莲上清片', 'A113', 1, 3, 800.00, '{[!QTExMw!]}', '功能与主治：
头昏耳鸣，牙根肿痛，口舌生疮，咽喉红脾，暴发火眼，大便燥结，小便赤黄。

主要组成：
黄莲，川芎，荆芥，防风，黄芩，桔梗，石膏，菊花，白芷，甘草，大黄，梔子，莲翘，黄柏，薄荷，蔓荆子，旋覆花。', 11, 1, 1, 0, -1681.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '黄莲上清片', '头昏耳鸣，牙根肿痛，口舌生疮，咽喉红脾，暴发火眼，大便燥结，小便赤黄。', '2019-06-06 05:46:03', '2022-09-26 03:23:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (287, 'BASIC', '黄芩上清片', '黄芩上清片', 'A245', 1, 3, 800.00, '{[!QTI0NQ!]}', '功能与主治：
清热解毒。用于发火眼，大便燥结，小便赤黄，消炎，解毒，消火，散风。

主要组成：
桑叶，川芎，荆芥，防风，黄芩，桔梗，石膏，菊花，白芷，甘草，蔓荆子。', 11, 1, 1, 0, -43.000000, 0, 1, 1, 0, 71.000000, null, 10, 10, 10, 10, '黄芩上清片', '清热解毒。用于发火眼，大便燥结，小便赤黄，消炎，解毒，消火，散风。', '2019-06-06 05:48:33', '2022-08-17 07:18:18', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (288, 'BASIC', '颈肩痛片', '颈肩痛片', 'A149', 1, 3, 800.00, '{[!QTE0OQ!]}', '功能与主治：
促进血液循环，强化肌肉。

主要组成：
葛根，桂枝，当归，乳香，秦艽，地龙，独活，海风藤。', 11, 1, 1, 0, -1136.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '颈肩痛片', '促进血液循环，强化肌肉。', '2019-06-06 05:49:43', '2022-09-27 01:58:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (289, 'BASIC', '银黄片', '银黄片', 'A165', 1, 3, 800.00, '{[!QTE2NQ!]}', '功能与主治：
纾解身体热气。

主要组成：
黄芩，金银花。', 11, 0, 1, 0, -3.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '银黄片', '纾解身体热气。', '2019-06-06 05:50:52', '2021-11-02 08:44:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (290, 'BASIC', '羚羊感冒片', '羚羊感冒片', 'A198', 1, 3, 800.00, '{[!QTE5OA!]}', '功能与主治：
清热解毒。用于流行感冒，伤风咳嗽，头晕发热，咽喉肿痛。

主要组成：
	荆芥，莲翘，桔梗，甘草，薄荷，淡豆鼓，淡竹叶，牛蒡子，金银花，羚羊角。', 11, 1, 1, 0, -93.000000, 0, 1, 1, 0, 73.000000, null, 10, 10, 10, 10, '羚羊感冒片', '清热解毒。用于流行感冒，伤风咳嗽，头晕发热，咽喉肿痛。', '2019-06-06 05:52:04', '2022-09-09 07:00:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (291, 'BASIC', '羚翘解毒片', '羚翘解毒片', 'A230', 1, 3, 800.00, '{[!QTIzMA!]}', '功能与主治：
疏风清热，解毒。用于风热感冒，恶寒发热，头景目眩，咳嗽，咽痛，两腮赤肿等症。

主要组成：
甘草，荆芥，桔梗，连翘，芦根，薄荷，牛蒡子，金银花，淡豆豉，淡竹叶，羚羊角。', 11, 1, 1, 0, -38.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '羚翘解毒片', '疏风清热，解毒。用于风热感冒，恶寒发热，头景目眩，咳嗽，咽痛，两腮赤肿等症。', '2019-06-06 05:53:38', '2022-05-21 03:08:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (292, 'BASIC', '盘龙追风片', '盘龙追风片', 'A199', 1, 3, 800.00, '{[!QTE5OQ!]}', '功能与主治：
舒筋活血，散风化瘀。用于筋骨软弱，手足麻木，腰背疼痛，行步艰难。

主要组成：
三七，红花，杜仲，牛膝，陆英，重楼，盘龙七，银线草。', 11, 1, 1, 0, -110.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '盘龙追风片', '舒筋活血，散风化瘀。用于筋骨软弱，手足麻木，腰背疼痛，行步艰难。', '2019-06-06 05:54:59', '2022-09-19 01:58:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (293, 'BASIC', '减肥降脂片', '减肥降脂片', 'A218', 1, 3, 800.00, '{[!QTIxOA!]}', '功能与主治：
活血化瘀，降脂减肥。用于各型髙血脂症，心脑血管硬化，肥胖等症。

主要组成：
丹参，田七，川芎，泽泻，山楂，党参，当归，黄精。', 11, 1, 1, 0, -79.000000, 0, 1, 1, 0, 82.000000, null, 10, 10, 10, 10, '减肥降脂片', '活血化瘀，降脂减肥。用于各型髙血脂症，心脑血管硬化，肥胖等症。', '2019-06-06 05:58:06', '2022-09-06 06:59:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (294, 'BASIC', '强力银翘片', '强力银翘片', 'A011', 1, 3, 800.00, '{[!QTAxMQ!]}', '功能与主治：
温病引起咳嗽，咽痛。治感冒有头痛发热，自汗，口渴诸症，扁桃腺炎及上呼吸道的一般感染发炎。

主要组成：
连翘，薄荷，荆芥，桔梗，甘草，金银花，淡豆豉，牛蒡子，淡竹叶。', 12, 1, 1, 0, -2448.000000, 0, 1, 1, 0, 68.000000, null, 10, 10, 10, 10, '强力银翘片', '温病引起咳嗽，咽痛。治感冒有头痛发热，自汗，口渴诸症，扁桃腺炎及上呼吸道的一般感染发炎。', '2019-06-06 05:59:18', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (295, 'BASIC', '筋骨跌伤片', '筋骨跌伤片', 'A030', 1, 3, 800.00, '{[!QTAzMA!]}', '功能与主治：
舒筋活络，散瘀止痛。跌打损伤，瘀血疼痛，扭伤，挫伤，风湿关节痛。

主要组成：
当归，首乌，姜黄，砂仁，郁金，田七，红花，青皮，蒲黄，骨碎补。', 12, 1, 1, 0, -1041.000000, 0, 1, 1, 0, 85.000000, null, 10, 10, 10, 10, '筋骨跌伤片', '舒筋活络，散瘀止痛。跌打损伤，瘀血疼痛，扭伤，挫伤，风湿关节痛。', '2019-06-06 06:02:24', '2022-09-26 05:02:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (296, 'BASIC', '舒筋活络片', '舒筋活络片', 'A088', 1, 3, 800.00, '{[!QTA4OA!]}', '功能与主治：
养血补血，强壮筋骨，活血袪风，通络止痛。急慢性风湿关节炎，腰腿酸痛。对平素气血虚弱而患有慢性风湿的老人和妇女，疗效尤为可靠。

主要组成：
田七，牛膝，独活，当归，鸡血藤，海风藤，石楠藤，枫香寄生，半枫荷叶。', 12, 1, 1, 0, -2320.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '舒筋活络片', '养血补血，强壮筋骨，活血袪风，通络止痛。急慢性风湿关节炎，腰腿酸痛。对平素气血虚弱而患有慢性风湿的老人和妇女，疗效尤为可靠。', '2019-06-06 06:05:41', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (297, 'BASIC', '舒脊灵片', '舒脊灵片', 'A089', 1, 3, 800.00, '{[!QTA4OQ!]}', '功能与主治：
通络活血，利湿强筋骨。项强，颈肩臂痛，用於脊柱病等症。

主要组成：
丹参，熟地，当归，白芍，川芎，独活，葛根，鹿衔草，薏苡仁。', 12, 1, 1, 0, -401.000000, 0, 1, 1, 0, 81.000000, null, 10, 10, 10, 10, '舒脊灵片', '通络活血，利湿强筋骨。项强，颈肩臂痛，用於脊柱病等症.', '2019-06-06 06:09:11', '2022-09-27 01:38:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (298, 'BASIC', '舒颈葛根片', '舒颈葛根片', 'A152', 1, 3, 800.00, '{[!QTE1Mg!]}', '功能与主治：
舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。

主要组成：
葛根，白芷，丹参，姜活，桂枝，地龙，赤芍，大枣，白芍，当归，甘草，鸡血藤。', 12, 1, 1, 0, -2600.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '舒颈葛根片', '舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。', '2019-06-06 06:10:46', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (299, 'BASIC', '舒筋祛风片', '舒筋祛风片', 'A201', 1, 3, 800.00, '{[!QTIwMQ!]}', '功能与主治：
祛风除湿，化瘀通络，行气消肿。

主要组成：
独活，木瓜，红花，续断，树寄生，海风藤，老鹤草。', 12, 1, 1, 0, -118.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '舒筋祛风片', '祛风除湿，化瘀通络，行气消肿。', '2019-06-06 06:11:55', '2022-09-12 08:14:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (300, 'BASIC', '舒肝片', '舒肝片', 'A212', 1, 3, 800.00, '{[!QTIxMg!]}', '功能与主治：
舒气开胃，助消化，消积滞，止痛除烦。用于肝郁气滞，两肋刺痛，饮食无味，消化不良，呕吐酸水，周身串痛。

主要组成：
苍术，川芎，姜黄，香附，豆蔻，积实，沉香，甘草，丹皮，郁香，木香。', 12, 1, 1, 0, -883.000000, 0, 1, 1, 0, 74.000000, null, 10, 10, 10, 10, '舒肝片', '舒气开胃，助消化，消积滞，止痛除烦。用于肝郁气滞，两肋刺痛，饮食无味，消化不良，呕吐酸水，周身串痛。', '2019-06-06 06:20:39', '2022-09-28 06:40:50', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (301, 'BASIC', '蛤蚧顺气片', '蛤蚧顺气片', 'A098', 1, 3, 800.00, '{[!QTA5OA!]}', '功能与主治：
滋阴清肺，化痰止咳，益肾顺气。慢性支气管疾病，支气管哮喘，肺气肿等咳症。

主要组成：
龟甲，石膏，紫苑，蛤蚧，龙胆，黄芩，麦冬，百合，甘草，龙骨，瓜蒌仁，煅石膏，紫苏子。', 12, 1, 1, 0, -21.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '蛤蚧顺气片', '滋阴清肺，化痰止咳，益肾顺气。慢性支气管疾病，支气管哮喘，肺气肿等咳症。', '2019-06-06 06:25:00', '2022-09-19 02:28:57', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (302, 'BASIC', '越鞠保和片', '越鞠保和片', 'A187', 1, 3, 800.00, '{[!QTE4Nw!]}', '功能与主治：
疏肝解郁，开胃消食。用于气郁停滞，倒饱嘈杂，胸腹胀痛，消化不良。

主要组成：
栀子，香附，苍术，神曲，槟榔，川芎，木香。', 12, 1, 1, 0, -531.000000, 0, 1, 1, 0, 72.000000, null, 10, 10, 10, 10, '越鞠保和片', '疏肝解郁，开胃消食。用于气郁停滞，倒饱嘈杂，胸腹胀痛，消化不良。', '2019-06-06 06:30:18', '2022-09-20 08:38:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (303, 'BASIC', '喉痛解毒片', '喉痛解毒片', 'A189', 1, 3, 800.00, '{[!QTE4OQ!]}', '功能与主治：
清热解毒，消炎止痛。用于喉痹乳蛾，疔疖肿痛，以及口舌生疮。

主要组成：
青果，玄参，黄芩，麦冬，连翘，大黄，板蓝根，山豆根。', 12, 1, 1, 0, -26.000000, 0, 1, 1, 0, 74.000000, null, 10, 10, 10, 10, '喉痛解毒片', '清热解毒，消炎止痛。用于喉痹乳蛾，疔疖肿痛，以及口舌生疮。', '2019-06-06 06:33:13', '2022-09-06 06:59:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (304, 'BASIC', '痛风尿酸清片', '痛风尿酸清片', 'A192', 1, 3, 800.00, '{[!QTE5Mg!]}', '功能与主治：
热痹，关节肿痛，一般服用一个疗程後，关节肿痛均可得到不同程度的改善，核査血尿酸也有明显降低。

主要组成：
生地，丹参，通草，苍术，赤芍，桑枝，黄芪，甘草，茯苓，防风，秦艽，桂枝，丹皮，石决明，桑寄生，海桐皮，豨签草，粉萆解，珍珠母，忍冬藤，薏苡仁。', 12, 1, 1, 0, -2791.000000, 0, 1, 1, 0, 87.000000, null, 10, 10, 10, 10, '痛风尿酸清片', '热痹，关节肿痛，一般服用一个疗程後，关节肿痛均可得到不同程度的改善，核査血尿酸也有明显降低。', '2019-06-06 06:34:48', '2022-09-23 09:31:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (305, 'BASIC', '滋补生发片', '滋补生发片', 'A214', 1, 3, 800.00, '{[!QTIxNA!]}', '功能与主治：
滋补肝肾，益气养容，活络生发。用于脱发症。

主要组成：
当归，川芎，党参，木瓜，姜活，丹参，熟地，桑椹，女贞子，枸杞子，黑芝麻，何首乌。', 12, 1, 1, 0, -570.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '滋补生发片', '滋补肝肾，益气养容，活络生发。用于脱发症。', '2019-06-06 06:36:35', '2022-09-28 06:28:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (306, 'BASIC', '滋肾宁神片', '滋肾宁神片', 'A248', 1, 3, 800.00, '{[!QTI0OA!]}', '功能与主治：
用于宁心安神，头晕耳鸣，失眠多梦，腰酸逍泄，治疗肝肾亏损，神经衰弱等症。

主要组成：
熟地，茯苓，白芍，山药，丹参，黄精，金樱子，夜交藤，菟丝子，五味子，何首乌，酸枣仁，女贞子，牛蒡子，珍珠母，五指毛桃根。', 12, 1, 1, 0, -261.000000, 0, 1, 1, 0, 85.000000, null, 10, 10, 10, 10, '滋肾宁神片', '用于宁心安神，头晕耳鸣，失眠多梦，腰酸逍泄，治疗肝肾亏损，神经衰弱等症。', '2019-06-06 06:37:36', '2022-09-22 01:14:31', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (307, 'BASIC', '鼻咽金丹片', '鼻咽金丹片', 'A012', 1, 3, 800.00, '{[!QTAxMg!]}', '功能与主治:
消炎，解毒，镇痛。鼻咽炎，鼻咽过敏。

主要组成:
麦冬，玄参，菊花，党参，石上柏，山豆根，白花蛇舌草。', 13, 1, 1, 0, -187.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '鼻咽金丹片', '消炎，解毒，镇痛。鼻咽炎，鼻咽过敏。', '2019-06-06 06:40:00', '2022-09-19 09:01:24', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (308, 'BASIC', '鼻舒适片', '鼻舒适片', 'A147', 1, 3, 800.00, '{[!QTE0Nw!]}', '功能与主治:
清热消炎，去风通窍。用于治疗慢性鼻炎引起之喷嚏，流塞，头痛过敏性鼻炎，慢性鼻窦炎症。

主要组成:
防风，白芍，蒺藜，菊花，白芷，甘草，苍耳子，墨旱莲，鹅不食草。', 13, 1, 1, 0, -776.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '鼻舒适片', '清热消炎，去风通窍。用于治疗慢性鼻炎引起之喷嚏，流塞，头痛过敏性鼻炎，慢性鼻窦炎症。', '2019-06-06 06:43:13', '2022-09-22 07:46:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (309, 'BASIC', '腰腿痛片', '腰腿痛片', 'A090', 1, 3, 800.00, '{[!QTA5MA!]}', '功能与主治：
捕益肝肾。强筋状骨。肝肾虚弱，腰膝酸痛，足跟痛等症。

主要组成：
北芪，牛膝，桂枝，当归，白芍，赤芍，生地，白芷，独活，木瓜， 炙甘草。', 13, 1, 1, 0, -602.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '腰腿痛片', '捕益肝肾。强筋状骨。肝肾虚弱，腰膝酸痛，足跟痛等症。', '2019-06-06 06:47:43', '2022-09-26 03:24:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (310, 'BASIC', '腰息痛片', '腰息痛片', 'A094', 1, 3, 800.00, '{[!QTA5NA!]}', '功能与主治:
纾解祛风，促进血液循环，和纾解疼痛，加强肌肉和筋骨。

主要组成：
牛七，独活，红花，首乌，当归，杜仲，赤芍，田七，防风，桂枝，续断，桑枝，萆薢，白芷，秦艽，狗脊，骨碎补，海风藤，五加皮，桑寄生，千年健，丝瓜络。', 13, 1, 1, 0, -477.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '腰息痛片', '纾解祛风，促进血液循环，和纾解疼痛，加强肌肉和筋骨。', '2019-06-06 07:33:50', '2022-09-21 02:14:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (311, 'BASIC', '腰痛膝酸片', '腰痛膝酸片', 'A177', 1, 3, 800.00, '{[!QTE3Nw!]}', '功能与主治:
祛风通络，壮筋骨止痛。用于腰痛，关节酸痛。

主要组成:
牛膝，续断，甘草，杜仲，狗脊，豨签草，穿山龙，桑寄生。', 13, 1, 1, 0, -1091.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '腰痛膝酸片', '祛风通络，壮筋骨止痛。用于腰痛，关节酸痛。', '2019-06-06 07:58:30', '2022-09-28 01:33:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (312, 'BASIC', '腰椎痹痛片', '腰椎痹痛片', 'A222', 1, 3, 800.00, '{[!QTIyMg!]}', '功能与主治:
祛风湿，补精壮髄，壮筋健骨，通络止痛。用于骨质增生症，肥大性腰椎炎，风湿关节炎及腰肌劳损等症。

主要组成:
桂枝，防风，萆解，红花，白芷，当归，桃仁，赤芍，独活，秦艽，续断，五加皮，骨碎补，桑寄生，千年健，海风藤。', 13, 1, 1, 0, -985.000000, 0, 1, 1, 0, 81.000000, null, 10, 10, 10, 10, '腰椎痹痛片', '祛风湿，补精壮髄，壮筋健骨，通络止痛。用于骨质增生症，肥大性腰椎炎，风湿关节炎及腰肌劳损等症。', '2019-06-06 08:03:42', '2022-09-28 01:33:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (313, 'BASIC', '腰痛片', '腰痛片', 'A254', 1, 3, 800.00, '{[!QTI1NA!]}', '功能与主治：
缓解腰痛，身体虚弱及促进血液循环。

主要组成：
杜仲，续断，当归，白术，牛膝，肉桂，乳香，狗脊，赤芍，泽泻，补骨脂，土鳖虫。', 13, 1, 1, 0, -437.000000, 0, 1, 1, 0, 78.000000, null, 10, 10, 10, 10, '腰痛片', '缓解腰痛，身体虚弱及促进血液循环。', '2019-06-06 08:04:50', '2022-09-27 01:58:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (314, 'BASIC', '障眼明片', '障眼明片', 'A145', 1, 3, 800.00, '{[!QTE0NQ!]}', '功能与主治:
补益肝肾，健脾调中，升阳利窍，明目。用于初期及中期老年白内障，肝肾气血不足之白内障。

主要组成:
升麻，党参，川芎，菊花，黄芪，蕤仁，山萸肉，肉苁蓉，蔓荆子，枸杞子，密蒙花，石菖蒲。', 13, 1, 1, 0, -380.000000, 0, 1, 1, 0, 76.000000, null, 10, 10, 10, 10, '障眼明片', '补益肝肾，健脾调中，升阳利窍，明目。用于初期及中期老年白内障，肝肾气血不足之白内障。', '2019-06-06 08:06:29', '2022-09-15 07:34:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (315, 'BASIC', '酸枣仁汤片', '酸枣仁汤片', 'A141', 1, 3, 800.00, '{[!QTE0MQ!]}', '功能与主治:
治心烦，烦躁不眠，惊悸怔忡，健忘等神经衰弱症。

主要组成:
川芎，茯苓，知母，甘草，酸枣仁。', 14, 1, 1, 0, -936.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '酸枣仁汤片', '治心烦，烦躁不眠，惊悸怔忡，健忘等神经衰弱症。', '2019-06-06 08:08:33', '2022-09-28 02:24:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (316, 'BASIC', '膝痹灵片', '膝痹灵片', 'A091', 1, 3, 800.00, '{[!QTA5MQ!]}', '功能与主治:
温通经络，祛风利湿。腰膝酸痛无力，风寒湿痹，双膝关节不利。慢性与风寒湿较实用。

主要组成:
木瓜，生姜，陈片，牛膝，桔梗，槟榔，桑枝，杜仲，独活，紫苏叶，吳茱萸。', 15, 1, 1, 0, -371.000000, 0, 1, 1, 0, 79.000000, null, 10, 10, 10, 10, '膝痹灵片', '温通经络，祛风利湿。腰膝酸痛无力，风寒湿痹，双膝关节不利。慢性与风寒湿较实用。', '2019-06-06 08:09:38', '2022-09-19 01:57:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (317, 'BASIC', '藿香正气片', '藿香正气片', 'A021', 1, 3, 800.00, '{[!QTAyMQ!]}', '功能与主治:
解表化湿，理气和中。外感风寒，内伤湿滞所至的恶寒发热。脘腹胀痛，恶寒呕吐，肠鸣泄泻，苔白腻等。

主要组成:
霍香，陈皮，白术，枳壳，茯苓，桔梗，白芷，生姜，大枣，甘草，紫苏叶，制半夏，大腹皮。', 19, 1, 1, 0, -2480.000000, 0, 1, 1, 0, 70.000000, null, 10, 10, 10, 10, '藿香正气片', '解表化湿，理气和中。外感风寒，内伤湿滞所至的恶寒发热。脘腹胀痛，恶寒呕吐，肠鸣泄泻，苔白腻等。', '2019-06-06 08:10:46', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (318, 'BASIC', '藿香正气合剂', '藿香正气合剂', 'K053', 1, 2, 500.00, '{[!SzA1Mw!]}', '功能与主治:
解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。

主要组成:
霍香，陈皮，白术，枳殼，茯苓，桔梗，白芷，生薑，大枣，紫苏叶，制半夏，大腹皮，炙甘草。', 19, 1, 1, 0, -9999.999999, 0, 1, 1, 0, 26.500000, null, 10, 10, 10, 10, '藿香正气合剂', '解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。', '2019-06-06 08:49:57', '2022-09-28 06:41:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (319, 'BASIC', '藿朴夏苓合剂', '藿朴夏苓合剂Y', 'K055', 1, 2, 500.00, '{[!SzA1NQ!]}', '功能与主治:
身热不渴，肢体怠倦，胸闷口腻。

主要组成:
藿香，枳殼，杏仁，茯苓，泽泻，猪苓，法半夏，白豆蔻，淡豆豉，薏苡仁。', 19, 1, 1, 0, -1555.000000, 0, 1, 1, 0, 28.000000, null, 10, 10, 10, 10, '藿朴夏苓合剂', '身热不渴，肢体怠倦，胸闷口腻。', '2019-06-06 08:51:20', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (320, 'BASIC', '一贯煎颗粒', '一贯煎颗粒', 'B035', 5, 4, 100.00, '{[!QjAzNQ!]}', '功能与主治:
滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。

主要组成:
麦冬，当归，生地，枸杞，北沙参，川楝子。', 1, 1, 1, 0, -19.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '一贯煎颗粒', '滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。', '2019-06-06 08:52:45', '2022-09-21 04:01:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (321, 'BASIC', '九味姜活颗粒', '九味姜活颗粒', 'B018', 5, 4, 100.00, '{[!QjAxOA!]}', '功能与主治：
发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。

主要组成：
姜活，防风，川芎，桂枝，甘草，苍术，白芷，黄芩，生地。', 2, 1, 1, 0, -12.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '九味姜活颗粒', '发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。', '2019-06-06 09:15:15', '2021-11-02 07:33:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (322, 'BASIC', '十味甘麦大枣颗粒', '十味甘麦大枣颗粒', 'B022', 5, 4, 100.00, '{[!QjAyMg!]}', '功能与主治:
滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。

主要组成:
大枣，淮山，甘草，天冬，玉竹，远志，浮小麦，五味子，酸枣仁，桑椹子。', 2, 1, 1, 0, -62.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '十味甘麦大枣颗粒', '滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。', '2019-06-06 09:18:16', '2022-08-26 06:50:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (323, 'BASIC', '十味化饮颗粒', '十味化饮颗粒', 'B060', 5, 4, 100.00, '{[!QjA2MA!]}', '十 味 化 饮 颗 粒', 2, 1, 1, 0, null, 0, 1, 1, 0, 42.000000, null, 10, 10, 10, 10, '十味化饮颗粒', null, '2019-06-06 09:22:25', '2021-11-02 07:49:24', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (324, 'BASIC', '二陈颗粒', '二陈颗粒', 'B023', 5, 4, 100.00, '{[!QjAyMw!]}', '功能与主治：
燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。

主要组成：
陈皮，茯苓，甘草，生姜，制半夏。', 2, 1, 1, 0, -69.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '二陈颗粒', '燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。', '2019-06-06 09:24:56', '2022-07-14 03:48:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (325, 'BASIC', '二母宁嗽颗粒', '二母宁嗽颗粒', 'B027', 5, 4, 100.00, '{[!QjAyNw!]}', '功能与主治：
清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。

主要组成：
知母，黄芩，石膏，茯苓，陈皮，生姜，枳实，甘草，栀子，川贝母，桑白皮，瓜蒌皮，五味子。', 2, 1, 1, 0, -12.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '二母宁嗽颗粒', '清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。', '2019-06-06 09:29:49', '2022-09-02 07:34:43', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (326, 'BASIC', '小柴胡颗粒', '小柴胡颗粒', 'B005', 5, 4, 100.00, '{[!QjAwNQ!]}', '功能与主治：
和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。

主要组成：
柴胡，党参，黄芩，大枣，甘草，生姜，制半夏。', 3, 1, 1, 0, -37.000000, 0, 1, 1, 0, 41.000000, null, 10, 10, 10, 10, '小柴胡颗粒', '和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。', '2019-06-06 09:33:24', '2022-07-23 04:38:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (327, 'BASIC', '六味地黄颗粒', '六味地黄颗粒', 'B013', 5, 4, 100.00, '{[!QjAxMw!]}', '功能与主治:
滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。

主要组成:
熟地，丹皮，淮山，茯苓，泽泻，山茱萸。', 3, 1, 1, 0, -106.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '六味地黄颗粒', '滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。', '2019-06-06 09:34:53', '2022-08-15 06:10:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (328, 'BASIC', '木香顺气颗粒', '木香顺气颗粒', 'B016', 5, 4, 100.00, '{[!QjAxNg!]}', '功能与主治：
气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。

主要组成：
木香，香附，苍术，枳殻，陈皮，甘草。', 3, 1, 1, 0, -70.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '木香顺气颗粒', '气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。', '2019-06-06 09:36:17', '2022-05-12 03:41:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (329, 'BASIC', '川贝枇杷颗粒', '川贝枇杷颗粒', 'B042', 5, 4, 100.00, '{[!QjA0Mg!]}', '功能与主治：
镇咳祛痰。用于感冒及支气管炎引起的咳嗽。

主要组成：
川贝，桔梗，薄荷，枇杷叶，制半夏。', 3, 1, 1, 0, -713.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '川贝枇杷颗粒', '镇咳祛痰。用于感冒及支气管炎引起的咳嗽。', '2019-06-06 09:37:23', '2022-08-25 06:01:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (330, 'BASIC', '川芎茶调颗粒', '川芎茶调颗粒', 'B079', 1, 4, 100.00, '{[!QjA3OQ!]}', '功能与主治：
因风寒感胃引起头晕目眩，偏正头痛，发热恶寒等症。

主要组成：
川芎，荆芥，白芷，香附，姜活，防风，甘草，薄荷。', 3, 1, 1, 0, -7.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '川芎茶调颗粒', '因风寒感胃引起头景目眩，偏正头痛，发热恶寒等症。', '2019-06-06 09:42:36', '2022-07-21 08:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (331, 'BASIC', '风湿止痛颗粒', '风湿止痛颗粒', 'B008', 5, 4, 100.00, '{[!QjAwOA!]}', '功能与主治：
祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。

主要组成：
独活，姜活，牛膝，木瓜，黄芩，防风，豨莶草，臭梧桐，粉萆解。', 4, 1, 1, 0, -87.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '风湿止痛颗粒', '祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。', '2019-06-06 09:44:06', '2022-09-14 01:58:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (332, 'BASIC', '止嗽散颗粒', '止嗽散颗粒', 'B015', 5, 4, 100.00, '{[!QjAxNQ!]}', '功能与主治：
缓解积痰和咳嗽等症状。

主要组成：
荆芥，百部，紫苑，桔梗，陈皮，白前，甘草。', 4, 1, 1, 0, -53.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '止嗽散颗粒', '缓解积痰和咳嗽等症状。', '2019-06-06 09:46:09', '2022-09-21 04:01:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (333, 'BASIC', '止咳颗粒', '止咳颗粒', 'B041', 5, 4, 100.00, '{[!QjA0MQ!]}', '功能与主治：
止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。

主要组成：
荆芥，桔梗，紫菀，杏仁，甘草，陈皮，莱菔子。', 4, 1, 1, 0, -18.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '止咳颗粒', '止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。', '2019-06-06 09:49:04', '2022-07-23 04:38:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (334, 'BASIC', '六君子颗粒', '六君子颗粒', 'B036', 5, 4, 100.00, '{[!QjAzNg!]}', '功能与主治：
补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。

主要组成：
陈皮，白术，党参，茯苓，甘草，制半夏。', 4, 1, 1, 0, -12.000000, 0, 1, 1, 0, 41.000000, null, 10, 10, 10, 10, '六君子颗粒', '补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。', '2019-06-06 09:50:05', '2022-06-01 07:18:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (335, 'BASIC', '六子衍宗颗粒', '六子衍宗颗粒', 'B073', 5, 4, 100.00, '{[!QjA3Mw!]}', '功能与主治:
补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。

主要组成:
枸杞子，菟丝子，覆盆子，五味子，车前子，补骨脂，羊淫藿。', 4, 1, 1, 0, -733.000000, 0, 1, 1, 0, 42.000000, null, 10, 10, 10, 10, '六子衍宗颗粒', '补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。', '2019-06-06 09:52:28', '2022-09-19 04:09:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (336, 'BASIC', '天王补心颗粒', '天王补心颗粒', 'B039', 5, 4, 100.00, '{[!QjAzOQ!]}', '功能与主治:
滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。

主要组成:
生地，党参，玄参，丹参，茯苓，桔梗，远志，天冬，当归，麦冬，姜黄，酸枣仁，柏子仁，五味子。', 4, 1, 1, 0, -25.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '天王补心颗粒', '滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。', '2019-06-06 09:53:36', '2022-07-21 08:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (337, 'BASIC', '五藤颗粒', '五藤颗粒', 'B053', 5, 4, 100.00, '{[!QjA1Mw!]}', '功能与主治：
活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。

主要组成：
红藤，当归，川芎，赤芍，红花，桃仁，络石藤，鸡血藤，海风藤，伸筋藤。', 4, 1, 1, 0, -299.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '五藤颗粒', '活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。', '2019-06-06 09:56:39', '2022-09-23 09:30:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (338, 'BASIC', '五味消毒颗粒', '五味消毒颗粒', 'B056', 5, 4, 100.00, '{[!QjA1Ng!]}', '功能与主治：
缓解身体热气，轻微肿胀及疼痛。

主要组成：
连翘，野菊花，金银花，蒲公英，紫花地丁。', 4, 1, 1, 0, -145.000000, 0, 1, 1, 0, 42.000000, null, 10, 10, 10, 10, '五味消毒颗粒', '缓解身体热气，轻微肿胀及疼痛。', '2019-06-06 09:57:42', '2022-09-21 04:01:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (339, 'BASIC', '五苓颗粒', '五苓颗粒', 'B084', 1, 4, 100.00, '{[!QjA4NA!]}', '功能与主治：
化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。

主要组成：
猪苓，茯苓，泽泻，白术，肉桂。', 4, 1, 1, 0, -57.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '五苓颗粒', null, '2019-06-06 09:59:56', '2022-09-06 03:47:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (340, 'BASIC', '丹枝逍遥颗粒', '丹枝逍遥颗粒', 'B058', 5, 4, 100.00, '{[!QjA1OA!]}', '功能与主治：
疏肝健脾，养血调经。用治肝脾，血虚郁热，头晕目眩，全身搔痒，胸胁腹痛，口燥咽干，食少嗑卧，小便涩滞，月事不调等症。

主要组成：
当归，白术，茯苓，甘草，白芍，丹皮，栀子，柴胡，薄荷，生姜。', 4, 1, 1, 0, -43.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '丹枝逍遥颗粒', '疏肝健脾，养血调经。用治肝脾，血虚郁热，头晕目眩，全身搔痒，胸胁腹痛，口燥咽干，食少嗑卧，小便涩滞，月事不调等症。', '2019-06-06 10:01:04', '2022-08-22 08:52:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (341, 'BASIC', '丹参颗粒', '复方丹参颗粒', 'B081', 1, 4, 100.00, '{[!QjA4MQ!]}', '功能与主治：
理气活血。用于血瘀气滞，心腹胃膈疼痛。

主要组成：
丹参，砂仁，檀香。', 4, 1, 1, 0, -69.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '丹参颗粒', '理气活血。用于血瘀气滞，心腹胃膈疼痛。', '2019-06-06 10:02:22', '2022-09-14 01:58:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (342, 'BASIC', '开胃消食颗粒', '开胃消食颗粒', 'B087', 5, 4, 100.00, '{[!QjA4Nw!]}', '功能与主治：
开胃消食。小儿厌食症，食欲不振，消化不良。

主要组成：
神曲，泽泻，枳实，陈皮，茯苓，干姜，麦芽，青皮，白术，制半夏。', 4, 1, 1, 0, -7.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '开胃消食颗粒', '开胃消食。小儿厌食症，食欲不振，消化不良。', '2019-06-06 10:05:34', '2022-05-06 08:52:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (343, 'BASIC', '四物颗粒', '四物颗粒', 'B007', 5, 4, 100.00, '{[!QjAwNw!]}', '功能与主治：
补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。

主要组成：
当归，熟地，白芍，川芎。', 5, 1, 1, 0, -19.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '四物颗粒', '补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。', '2019-06-06 10:06:43', '2022-05-10 07:09:45', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (344, 'BASIC', '四君子颗粒', '四君子颗粒', 'B020', 5, 4, 100.00, '{[!QjAyMA!]}', '功能与主治：
益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。

主要组成：
党参，白术，茯苓，甘草。', 5, 1, 1, 0, -23.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '四君子颗粒', '益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。', '2019-06-06 10:07:58', '2022-07-21 08:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (345, 'BASIC', '归脾颗粒', '归脾颗粒', 'B009', 5, 4, 100.00, '{[!QjAwOQ!]}', '功能与主治：
健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。

主要组成：
党参，黄芪，白术，茯苓，当归，远志，生姜，大枣，木香，甘草，酸枣仁，桂圆肉。', 5, 1, 1, 0, -18.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '归脾颗粒', '健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。', '2019-06-06 10:09:23', '2022-09-07 07:35:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (346, 'BASIC', '甘露消毒颗粒', '甘露消毒颗粒', 'B010', 5, 4, 100.00, '{[!QjAxMA!]}', '功能与主治：
化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。

主要组成：
连翘，霍香，川贝，通草，茵陈，黄芩，滑石，薄荷，射干，石菖蒲，白豆蔻。', 5, 1, 1, 0, -12.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '甘露消毒颗粒', '化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。', '2019-06-06 10:10:44', '2022-08-15 06:10:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (347, 'BASIC', '甘露颗粒', '甘露颗粒', 'B062', 5, 4, 100.00, '{[!QjA2Mg!]}', '甘 露 颗 粒', 5, 1, 1, 0, -18.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '甘露颗粒', null, '2019-06-06 10:12:07', '2022-11-02 17:09:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (348, 'BASIC', '玉女煎颗粒', '玉女煎颗粒', 'B028', 5, 4, 100.00, '{[!QjAyOA!]}', '功能与主治：
清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。

主要组成：
石膏，熟地，麦冬，知母，牛膝。', 5, 1, 1, 0, -56.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '玉女煎颗粒', '清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。', '2019-06-06 10:14:30', '2022-07-23 04:38:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (349, 'BASIC', '玉屏风颗粒', '玉屏风颗粒', 'B071', 5, 4, 100.00, '{[!QjA3MQ!]}', '功能与主治：
益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。

主要组成：
黄芪，白术，防风。', 5, 1, 1, 0, -59.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '玉屏风颗粒', '益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。', '2019-06-06 10:15:43', '2022-05-15 07:02:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (350, 'BASIC', '生脉饮颗粒', '生脉饮颗粒', 'B033', 5, 4, 100.00, '{[!QjAzMw!]}', '功能与主治：
益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。

主要组成：
党参，麦冬，五味子。', 5, 1, 1, 0, -24.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '生脉饮颗粒', '益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。', '2019-06-06 10:17:16', '2022-05-17 08:05:10', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (351, 'BASIC', '白果定喘颗粒', '白果定喘颗粒', 'B040', 5, 4, 100.00, '{[!QjA0MA!]}', '功能与主治：
宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。

主要组成：
白果，黄芩，苏子，甘草，杏仁，生姜，款冬花，桑白皮，制法夏，', 5, 1, 1, 0, -9.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '白果定喘颗粒', '宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。', '2019-06-06 10:19:09', '2022-07-07 05:11:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (352, 'BASIC', '龙胆泻肝颗粒', '龙胆泻肝颗粒', 'B043', 5, 4, 100.00, '{[!QjA0Mw!]}', '功能与主治：
泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。

主要组成：
泽泻，生地，柴胡，通草，甘草，黄芩，栀子，当归，龙胆草，车前子。', 5, 1, 1, 0, -9.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '龙胆泻肝颗粒', '泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。', '2019-06-06 10:20:18', '2022-07-20 09:42:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (353, 'BASIC', '平胃颗粒', '平胃颗粒', 'B047', 5, 4, 100.00, '{[!QjA0Nw!]}', '功能与主治：
行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。

主要组成：
苍术，陈皮，枳壳，炙甘草。', 5, 1, 1, 0, -14.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '平胃颗粒', '行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。', '2019-06-06 10:25:36', '2022-01-12 07:55:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (354, 'BASIC', '仙方活命颗粒', '仙方活命颗粒', 'B088', 1, 4, 100.00, '{[!QjA4OA!]}', '功能与主治：
清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。

主要组成：
当归，陈皮，防风，甘草，赤芍，白芷，没药，乳香，莪术，金银花，皂角刺，川贝母，天花粉。', 5, 1, 1, 0, -2.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '仙方活命颗粒', '清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。', '2019-06-06 10:27:09', '2021-11-02 07:55:31', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (355, 'BASIC', '血府逐瘀颗粒', '血府逐瘀颗粒', 'B026', 5, 4, 100.00, '{[!QjAyNg!]}', '功能与主治：
活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。

主要组成：
当归，牛膝，红花，生地，桃仁，枳壳，赤芍，柴胡，甘草，桔梗，川芎。', 6, 1, 1, 0, -56.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '血府逐瘀颗粒', '活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。', '2019-06-06 10:38:01', '2022-08-13 10:35:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (356, 'BASIC', '当归拈痛颗粒', '当归拈痛颗粒', 'B038', 5, 4, 100.00, '{[!QjAzOA!]}', '功能与主治：
祛风燥湿，和血止痛。用于急性关节红脾骨痛，湿热，疮疡，肩背沉重，肢节疼痛，胸胁不利等症。

主要组成：
当归，葛根，泽泻，防风，知母，姜活，升麻，茵陈，白术，甘草，猪苓，黄芩，苦参，苍术，党参。', 6, 1, 1, 0, -16.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '当归拈痛颗粒', '祛风燥湿，和血止痛。用于急性关节红脾骨痛，湿热，疮疡，肩背沉重，肢节疼痛，胸胁不利等症。', '2019-06-06 10:40:45', '2022-05-23 07:29:31', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (357, 'BASIC', '当归四逆颗粒', '当归四逆颗粒', 'B083', 5, 4, 100.00, '{[!QjA4Mw!]}', '功能与主治：
用于寒凝经脉，手足厥冷，肢体痹痛等症。

主要组成：
当归，桂枝，白芍，通草，大枣，干姜，炙甘草。', 6, 1, 1, 0, -47.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '当归四逆颗粒', '用于寒凝经脉，手足厥冷，肢体痹痛等症。', '2019-06-06 11:19:49', '2022-03-10 01:59:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (358, 'BASIC', '芍药甘草颗粒', '芍药甘草颗粒', 'B044', 5, 4, 100.00, '{[!QjA0NA!]}', '功能与主治：
疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。

主要组成：
白芍，甘草。', 6, 1, 1, 0, -14.000000, 0, 1, 1, 0, 43.000000, null, 10, 10, 10, 10, '芍药甘草颗粒', '疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。', '2019-06-06 11:51:41', '2022-06-13 14:23:18', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (359, 'BASIC', '百合固金颗粒', '百合固金颗粒', 'B064', 5, 4, 100.00, '{[!QjA2NA!]}', '功能与主治：
缓解咳嗽，喉咙痛，热气及化痰。

主要组成：
玄参，生地，熟地，贝母，桔梗，麦冬，白芍，百合，当归，甘草。', 6, 1, 1, 0, -10.000000, 0, 1, 1, 0, 42.000000, null, 10, 10, 10, 10, '百合固金颗粒', null, '2019-06-06 11:57:21', '2022-09-09 07:00:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (360, 'BASIC', '安神颗粒', '安神颗粒', 'B066', 5, 4, 100.00, '{[!QjA2Ng!]}', '功能与主治：
益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。

主要组成：
生地，玄参，丹参，桑椹，女贞子，夜交藤，合欢花，合欢皮。', 6, 1, 1, 0, -14.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '安神颗粒', '益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。', '2019-06-06 11:59:56', '2022-04-10 03:27:15', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (361, 'BASIC', '竹叶石膏颗粒', '竹叶石膏颗粒', 'B076', 1, 4, 100.00, '{[!QjA3Ng!]}', '功能与主治：
益气养阴，降逆。用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。

主要组成：
竹叶，生石膏，太子参，麦冬，甘草，制半夏。', 6, 1, 1, 0, -7.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '竹叶石膏颗粒', '益气养阴，降逆。用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。', '2019-06-06 12:04:54', '2022-08-24 10:10:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (362, 'BASIC', '防风通圣颗粒', '防风通圣颗粒', 'B055', 5, 4, 100.00, '{[!QjA1NQ!]}', '功能与主治：
解表通里，清热解毒。用于感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。

主要组成：
防风，川芎，当归，白芍，连翘，石裔，黄芩，桔梗，荆芥，白术，栀子，甘草，薄荷，大黄，芒硝，生姜等。', 6, 1, 1, 0, -3.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '防风通圣颗粒', null, '2019-06-06 12:05:59', '2021-11-02 07:48:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (363, 'BASIC', '杏苏饮颗粒', '杏苏饮颗粒', 'B025', 5, 4, 100.00, '{[!QjAyNQ!]}', '功能与主治:
疏风解表，清热解毒，宜肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。

主要组成:
甘草，陈皮，生姜，枳殻，前胡，茯苓，大枣，桔梗，杏仁，制半夏，紫苏叶。', 7, 1, 1, 0, -13.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '杏苏饮颗粒', '疏风解表，清热解毒，宜肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。', '2019-06-06 12:07:14', '2022-09-06 03:38:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (364, 'BASIC', '补中益气颗粒', '补中益气颗粒', 'B049', 5, 4, 100.00, '{[!QjA0OQ!]}', '功能与主治：
补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。

主要组成：
黄芪，党参，甘草，大枣，白术，陈皮，柴胡，当归，干姜，升麻。', 7, 1, 1, 0, -33.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '补中益气颗粒', '补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。', '2019-06-06 12:08:16', '2022-04-14 01:27:31', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (365, 'BASIC', '杞菊地黄颗粒', '杞菊地黄颗粒', 'B059', 5, 4, 100.00, '{[!QjA1OQ!]}', '功能与主治：
滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。

主要组成：
杞子，菊花，熟地，淮山，丹皮，泽泻，茯苓，山茱萸。', 7, 1, 1, 0, -2.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '杞菊地黄颗粒', '滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。', '2019-06-06 12:10:49', '2021-11-02 07:49:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (366, 'BASIC', '沙参麦冬颗粒', '沙参麦冬颗粒', 'B082', 1, 4, 100.00, '{[!QjA4Mg!]}', '功能与主治：
滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。

主要组成：
玉竹，甘草，桑叶，麦冬，扁豆，北沙参，天花粉。', 7, 1, 1, 0, -25.000000, 0, 1, 1, 0, 43.000000, null, 10, 10, 10, 10, '沙参麦冬颗粒', '滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。', '2019-06-06 12:12:42', '2022-07-23 04:38:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (367, 'BASIC', '参苓白术颗粒', '参苓白术颗粒', 'B045', 5, 4, 100.00, '{[!QjA0NQ!]}', '功能与主治：
补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。

主要组成：
人参，莲子，桔梗，白术，淮山，砂仁，茯苓，甘草，白扁豆，薏苡仁。', 11, 1, 1, 0, -36.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '参苓白术颗粒', '补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。', '2019-06-06 12:15:40', '2022-09-27 02:17:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (368, 'BASIC', '参灵五子颗粒', '参灵五子颗粒', 'B078', 1, 4, 100.00, '{[!QjA3OA!]}', '功能与主治：
滋补肝肾，养阴益精。用于下元亏损，未老先衰，肾阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。

主要组成：
党参，枸杞子，菟丝子，车前子，覆盆子，五味子，淫羊藿。', 8, 1, 1, 0, -28.000000, 0, 1, 1, 0, 43.000000, null, 10, 10, 10, 10, '参灵五子颗粒', '滋补肝肾，养阴益精。用于下元亏损，未老先衰，肾阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。', '2019-06-06 12:16:44', '2021-12-10 02:03:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (369, 'BASIC', '肩痹颗粒', '肩痹颗粒', 'B050', 5, 4, 100.00, '{[!QjA1MA!]}', '功能与主治：
上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。

主要组成：
姜活，桑枝，赤芍，防风，当归，姜黄，鸡血藤，透骨草，稀签草，鹿衔草。', 8, 1, 1, 0, -1166.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '肩痹颗粒', '上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。', '2019-06-06 12:18:01', '2022-09-14 01:58:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (370, 'BASIC', '苓桂术甘颗粒', '苓桂术甘颗粒', 'B086', 1, 4, 100.00, '{[!QjA4Ng!]}', '功能与主治：
胸胁胀满，眩景心悸，大便溏，短气肺咳等症。

主要组成：
茯苓，桂枝，白术，甘草。', 8, 1, 1, 0, -36.000000, 0, 1, 1, 0, 41.000000, null, 10, 10, 10, 10, '苓桂术甘颗粒', '胸胁胀满，眩景心悸，大便溏，短气肺咳等症。', '2019-06-06 12:19:11', '2022-09-06 02:07:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (371, 'BASIC', '复方杜仲颗粒', '复方杜仲颗粒', 'B003', 5, 4, 100.00, '{[!QjAwMw!]}', '功能与主治：
活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。

主要组成：
杜仲，续断，生地，赤芍，当归，丹皮，桃仁，肉桂，乌药，姜黄。', 9, 1, 1, 0, -137.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '复方杜仲颗粒', '活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。', '2019-06-06 12:20:31', '2022-09-27 01:33:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (372, 'BASIC', '复方浙贝颗粒', '复方浙贝颗粒', 'B004', 5, 4, 100.00, '{[!QjAwNA!]}', '功能与主治：
清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。

主要组成：
浙贝，杏仁，知母，甘草，款冬花，五味子，桑白皮。', 9, 1, 1, 0, -12.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '复方浙贝颗粒', '清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。', '2019-06-06 12:23:10', '2022-05-19 08:08:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (373, 'BASIC', '复方辛夷颗粒', '复方辛夷颗粒', 'B006', 5, 4, 100.00, '{[!QjAwNg!]}', '功能与主治:
清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。

主要组成:
川芎，白芷，菊花，前胡，石膏，生地，白术，薄荷，陈皮，茯苓，幸夷花，炙甘草。', 9, 1, 1, 0, -13.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '复方辛夷颗粒', '清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。', '2019-06-06 12:25:11', '2022-08-15 06:06:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (374, 'BASIC', '复方苦参颗粒', '复方苦参颗粒', 'B019', 1, 4, 100.00, '{[!QjAxOQ!]}', '功能与主治：
祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。

主要组成：
苦参，赤芍，生地，当归，丹参，丹皮，秦艽，蒺藜，浙贝母，牛蒡子，金银花，野菊花，穿心莲。', 9, 1, 1, 0, -14.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '复方苦参颗粒', '祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。', '2019-06-06 12:26:43', '2022-06-09 08:01:24', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (375, 'BASIC', '复方狗脊颗粒', '复方狗脊颗粒', 'B024', 5, 4, 100.00, '{[!QjAyNA!]}', '功能与主治：
缓解关节疼痛和腹部轻微浮肿的症状。

主要组成：
狗脊，当归，桂枝，杜仲，木瓜，熟地，桑枝，秦艽，续断，松节，海风藤，川牛膝。', 9, 1, 1, 0, -111.000000, 0, 1, 1, 0, 41.000000, null, 10, 10, 10, 10, '复方狗脊颗粒', '缓解关节疼痛和腹部轻微浮肿的症状。', '2019-06-06 12:28:02', '2022-09-21 07:26:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (376, 'BASIC', '复元活血颗粒', '复元活血颗粒', 'B052', 5, 4, 100.00, '{[!QjA1Mg!]}', '功能与主治：
活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。

主要组成：
柴胡，当归，甘草，大黄，红花，桃仁，乳香，瓜蒌仁。', 9, 1, 1, 0, -15.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '复元活血颗粒', '活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。', '2019-06-06 12:29:12', '2022-10-04 15:46:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (377, 'BASIC', '独活寄生颗粒', '独活寄生颗粒', 'B011', 5, 4, 100.00, '{[!QjAxMQ!]}', '功能与主治：
祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。

主要组成：
独活，杜仲，秦艽，白芍，茯苓，肉桂，川芎，党参，防风，熟地，当归，桂枝，甘草，桑寄生，川牛膝。', 9, 1, 1, 0, -25.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '独活寄生颗粒', '祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。', '2019-06-06 13:01:55', '2022-08-24 10:10:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (378, 'BASIC', '香砂六君子颗粒', '香砂六君子颗粒', 'B014', 5, 4, 100.00, '{[!QjAxNA!]}', '功能与主治：
理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。

主要组成：
砂仁，党参，白术，茯苓，陈皮，大枣，生姜，甘草，川木香，制半夏。', 9, 1, 1, 0, -30.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '香砂六君子颗粒', '理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。', '2019-06-06 13:03:16', '2022-08-26 06:50:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (379, 'BASIC', '荆防败毒颗粒', '荆防败毒颗粒', 'B017', 5, 4, 100.00, '{[!QjAxNw!]}', '功能与主治：
发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。

主要组成：
荆芥，防风，茯苓，川芎，独活，生姜，姜活，枳壳，柴胡，桔梗，甘草。', 9, 1, 1, 0, -12.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '荆防败毒颗粒', '发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。', '2019-06-06 13:04:31', '2022-05-24 08:55:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (380, 'BASIC', '栀芩颗粒', '栀芩颗粒', 'B021', 5, 4, 100.00, '{[!QjAyMQ!]}', '功能与主治：
疏风清热解毒。用于温病气分热盛之发热，汗出，头痛，面赤唇红，烦躁多渴，口苦咽干，小便短赤等症。

主要组成：
栀子，连翘，黄芩，薄荷，甘草，淡竹叶。', 9, 1, 1, 0, -2.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '栀芩颗粒', '疏风清热解毒。用于温病气分热盛之发热，汗出，头痛，面赤唇红，烦躁多渴，口苦咽干，小便短赤等症。', '2019-06-06 13:05:40', '2021-11-23 02:01:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (381, 'BASIC', '咽炎颗粒', '咽炎颗粒', 'B029', 5, 4, 100.00, '{[!QjAyOQ!]}', '功能与主治:
清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。

主要组成:
马勃，玄参，桔梗，薄荷，连翘，射干，麦冬，甘草，金银花，牛蒡子，山豆根。', 9, 1, 1, 0, -20.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '咽炎颗粒', '清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。', '2019-06-06 13:06:46', '2022-07-23 04:38:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (382, 'BASIC', '保和颗粒', '保和颗粒', 'B034', 5, 4, 100.00, '{[!QjAzNA!]}', '功能与主治：
消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。

主要组成：
山楂，陈皮，神曲，连翘，麦芽，茯苓，莱菔子，制半夏。', 9, 1, 1, 0, -15.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '保和颗粒', '消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。', '2019-06-06 13:07:57', '2022-04-01 07:02:42', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (383, 'BASIC', '活络效灵颗粒', '活络效灵颗粒', 'B046', 5, 4, 100.00, '{[!QjA0Ng!]}', '功能与主治：
活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。

主要组成：
丹参，当归，乳香，没药。', 9, 1, 1, 0, -86.000000, 0, 1, 1, 0, 42.000000, null, 10, 10, 10, 10, '活络效灵颗粒', '活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。', '2019-06-06 13:09:04', '2022-09-21 04:01:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (384, 'BASIC', '姜活胜湿颗粒', '姜活胜湿颗粒', 'B048', 5, 4, 100.00, '{[!QjA0OA!]}', '功能与主治：
发汗祛风胜湿。用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。

主要组成：
姜活，独活，防风，甘草，川芎，蒿本，蔓荆子。', 9, 1, 1, 0, -15.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '姜活胜湿颗粒', '发汗祛风胜湿。用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。', '2019-06-06 13:10:12', '2022-07-20 06:23:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (385, 'BASIC', '养阴清肺颗粒', '养阴清肺颗粒', 'B057', 5, 4, 100.00, '{[!QjA1Nw!]}', '功能与主治：
养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。

主要组成：
生地，麦冬，白芍，玄参，甘草，薄荷，浙贝母，牡丹皮。', 9, 1, 1, 0, -8.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '养阴清肺颗粒', '养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。', '2019-06-06 13:11:22', '2022-07-23 04:38:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (386, 'BASIC', '养血熄风颗粒', '养血熄风颗粒', 'B070', 5, 4, 100.00, '{[!QjA3MA!]}', '功能与主治：
养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。

主要组成：
当归，玄参，川穹，红花，黄芪，甘草，荆芥，白芍，刺疾藜。', 9, 1, 1, 0, -515.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '养血熄风颗粒', '养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。', '2019-06-06 13:12:27', '2022-09-05 04:31:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (387, 'BASIC', '桑菊颗粒', '桑菊颗粒', 'B001', 5, 4, 100.00, '{[!QjAwMQ!]}', '功能与主治:
疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。

主要组成:
桑叶，连翘，甘草，桔梗，菊花，杏仁，芦根，薄荷。', 10, 1, 1, 0, -91.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '桑菊颗粒', '疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。', '2019-06-06 13:26:31', '2022-09-27 04:01:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (388, 'BASIC', '桑枝虎杖颗粒', '桑枝虎杖颗粒', 'B031', 5, 4, 100.00, '{[!QjAzMQ!]}', '功能与主治：
祛风除湿，舒筋活络。用于四肢酸痛，肢体伸展不利，游走性骨节痹痛。

主要组成：
桑枝，虎杖，姜活，当归，稀签草，臭梧桐，伸筋草。', 10, 1, 1, 0, -505.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '桑枝虎杖颗粒', '祛风除湿，舒筋活络。用于四肢酸痛，肢体伸展不利，游走性骨节痹痛。', '2019-06-06 14:15:29', '2022-09-14 01:58:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (389, 'BASIC', '桑杏颗粒', '桑杏颗粒', 'B037', 5, 4, 100.00, '{[!QjAzNw!]}', '功能与主治：
轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。

主要组成：
桑叶，梨皮，栀子，杏仁，浙贝母，淡豆豉，南沙参。', 10, 1, 1, 0, -375.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '桑杏颗粒', '轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。', '2019-06-06 14:21:42', '2022-09-15 04:32:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (390, 'BASIC', '桃红四物颗粒', '桃红四物颗粒', 'B002', 5, 4, 100.00, '{[!QjAwMg!]}', '功能与主治：
活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。

主要组成：
桃仁，当归，白芍，红花，川芎，熟地。', 10, 1, 1, 0, -17.000000, 0, 1, 1, 0, 41.000000, null, 10, 10, 10, 10, '桃红四物颗粒', '活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。', '2019-06-06 14:22:52', '2021-11-02 07:26:05', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (391, 'BASIC', '消肿活血颗粒', '消肿活血颗粒', 'B054', 5, 4, 100.00, '{[!QjA1NA!]}', '功能与主治：
活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。

主要组成：
续断，赤芍，当归，泽兰，桂枝，牛膝，大驳骨，韩信草。', 10, 1, 1, 0, -47.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '消肿活血颗粒', '活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。', '2019-06-06 14:24:00', '2022-07-21 08:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (392, 'BASIC', '桂枝颗粒', '桂枝颗粒', 'B085', 1, 4, 100.00, '{[!QjA4NQ!]}', '功能与主治：
疏风解表，调和营卫。主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。

主要组成：
桂枝，白芍，大枣，生姜，炙甘草。', 10, 1, 1, 0, -60.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '桂枝颗粒', '疏风解表，调和营卫。主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。', '2019-06-06 14:26:45', '2022-06-09 08:02:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (393, 'BASIC', '眩晕颗粒', '眩晕颗粒', 'B077', 1, 4, 100.00, '{[!QjA3Nw!]}', '功能与主治:
缓解咳嗽，减少粘痰。

主要组成：
杏仁，茯苓，枳壳，橘红，钟乳石，制半夏，瓜篓子，桑白皮。', 10, 1, 1, 0, -115.000000, 0, 1, 1, 0, 42.000000, null, 10, 10, 10, 10, '眩晕颗粒', '缓解咳嗽，减少粘痰。', '2019-06-06 14:38:07', '2022-09-05 04:31:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (394, 'BASIC', '柴胡疏肝颗粒', '柴胡疏肝颗粒', 'B061', 5, 4, 100.00, '{[!QjA2MQ!]}', '功能与主治：
疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。

主要组成：
柴胡，白芍，枳壳，香附，陈皮，川芎，甘草。', 10, 1, 1, 0, -74.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '柴胡疏肝颗粒', '疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。', '2019-06-06 14:54:28', '2022-07-23 04:38:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (395, 'BASIC', '逍遥颗粒', '逍遥颗粒', 'B067', 5, 4, 100.00, '{[!QjA2Nw!]}', '功能与主治：
疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。

主要组成：
当归，白术，茯苓，白芍，柴胡，生姜，甘草，薄荷。', 10, 1, 1, 0, -12.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '逍遥颗粒', '疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。', '2019-06-06 14:55:55', '2022-06-14 04:59:31', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (396, 'BASIC', '银翘解毒颗粒', '银翘解毒颗粒', 'B012', 5, 4, 100.00, '{[!QjAxMg!]}', '功能与主治：
疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。

主要组成：
连翘，薄荷，荆芥，桔梗，甘草，金银花，淡豆豉，牛蒡子，淡竹叶。', 11, 1, 1, 0, -86.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '银翘解毒颗粒', '疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。', '2019-06-06 14:57:06', '2022-08-12 07:08:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (397, 'BASIC', '清热透表颗粒', '清热透表颗粒', 'B072', 5, 4, 100.00, '{[!QjA3Mg!]}', '功能与主治:
用于缓解感冒，身体热气，头痛，喉咙疼痛，口渴及咳嗽。

主要组成：
连翘，杏仁，葛根，石膏，甘草，薄荷，柴胡，知母，金银花，板蓝根，野菊花，牛蒡子。', 11, 1, 1, 0, -16.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '清热透表颗粒', null, '2019-06-06 15:00:12', '2022-09-09 07:00:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (398, 'BASIC', '舒筋颗粒', '舒筋颗粒', 'B030', 5, 4, 100.00, '{[!QjAzMA!]}', '功能与主治：
舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。

主要组成：
姜黄，甘草，姜活，白术，当归，赤芍，海桐皮。', 12, 1, 1, 0, -96.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '舒筋颗粒', '舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。', '2019-06-06 15:01:40', '2022-09-14 01:58:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (399, 'BASIC', '舒筋活络颗粒', '舒筋活络颗粒', 'B069', 5, 4, 100.00, '{[!QjA2OQ!]}', '功能与主治：
舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。

主要组成：
续断，仓术，牛膝，防风，秦艽，木瓜，独活，桂枝，姜活，当归，陈皮，薏苡仁。', 12, 1, 1, 0, -7.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '舒筋活络颗粒', null, '2019-06-06 15:05:01', '2022-05-19 01:37:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (400, 'BASIC', '滋阴地黄颗粒', '滋阴地黄颗粒', 'B068', 5, 4, 100.00, '{[!QjA2OA!]}', '功能与主治:
滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。

主要组成:
熟地，淮山，泽泻，丹皮，知母，茯苓，山茱萸，地骨皮。', 16, 1, 1, 0, -50.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '滋阴地黄颗粒', '滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。', '2019-06-06 15:07:00', '2022-09-05 04:31:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (401, 'BASIC', '疏肝和胃颗粒', '疏肝和胃颗粒', 'B074', 5, 4, 100.00, '{[!QjA3NA!]}', '功能与主治：
促活身体的活力，缓解疼痛，呕吐和胃气。

主要组成：
香附，砂仁，白芍，枳壳，柴胡，玄参，陈皮，白芨，炙甘草，蒲公英。', 12, 1, 1, 0, -36.000000, 0, 1, 1, 0, 42.000000, null, 10, 10, 10, 10, '疏肝和胃颗粒', '香附，砂仁，白芍，枳壳，柴胡，玄参，陈皮，白芨，炙甘草，蒲公英。', '2019-06-06 15:10:29', '2022-07-07 05:11:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (402, 'BASIC', '鼻通灵颗粒', '鼻通灵颗粒', 'B051', 5, 4, 100.00, '{[!QjA1MQ!]}', '功能与主治:
清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。

主要组成:
苍耳子，白芷，金银花，连翘，防风，藿香，鹅不食草，薄荷，幸夷。', 13, 1, 1, 0, -30.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '鼻通灵颗粒', '清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。', '2019-06-06 15:11:46', '2022-08-24 05:11:15', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (403, 'BASIC', '鼻通颗粒', '鼻通颗粒', 'B063', 5, 4, 100.00, '{[!QjA2Mw!]}', '功能与主治：
用于身体热气和鼻塞。

主要组成：
辛夷，白芷，薄荷，桔梗，防风，藁本，丹皮，苍耳子，侧柏叶。', 13, 1, 1, 0, -36.000000, 0, 1, 1, 0, 41.000000, null, 10, 10, 10, 10, '鼻通颗粒', '用于身体热气和鼻塞。', '2019-06-06 15:15:55', '2022-08-12 07:08:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (404, 'BASIC', '腰腿痛颗粒', '腰腿痛颗粒', 'B075', 1, 4, 100.00, '{[!QjA3NQ!]}', '功能与主治：
缓解腰酸痛，关节和肌肉疼痛。

主要组成：
黄芪，当归，木瓜，牛膝，白芍，桂枝，赤芍，白芷，甘草，生地，独活。', 13, 1, 1, 0, -42.000000, 0, 1, 1, 0, 40.000000, null, 10, 10, 10, 10, '腰腿痛颗粒', '缓解腰酸痛，关节和肌肉疼痛。', '2019-06-06 15:23:59', '2022-09-05 04:31:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (405, 'BASIC', '解表化饮颗粒', '解表化饮颗粒', 'B080', 1, 4, 100.00, '{[!QjA4MA!]}', '解 表 化 饮 颗 粒', 13, 1, 1, 0, null, 0, 1, 1, 0, 41.000000, null, 10, 10, 10, 10, '解表化饮颗粒', null, '2019-06-06 15:26:15', '2021-11-02 07:53:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (406, 'BASIC', '酸枣仁颗粒', '酸枣仁颗粒', 'B065', 5, 4, 100.00, '{[!QjA2NQ!]}', '功能与主治：
替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。

主要组成：
知母，川芎，甘草，茯苓，酸枣仁。', 14, 1, 1, 0, -28.000000, 0, 1, 1, 0, 44.000000, null, 10, 10, 10, 10, '酸枣仁颗粒', '替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。', '2019-06-06 15:27:37', '2022-07-20 06:23:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (407, 'BASIC', '藿香正气颗粒', '藿香正气颗粒', 'B032', 5, 4, 100.00, '{[!QjAzMg!]}', '功能与主治：
解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。

主要组成：
霍香，陈皮，白术，枳壳，茯苓，桔梗，白芷，生姜，大枣，紫苏叶，制半夏，大腹皮，炙甘草。', 19, 1, 1, 0, -175.000000, 0, 1, 1, 0, 39.000000, null, 10, 10, 10, 10, '藿香正气颗粒', '解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。', '2019-06-06 15:29:29', '2022-05-12 07:36:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (408, 'BASIC', '人参败毒合剂', '人参败毒合剂', 'M001', 1, 2, 500.00, '{[!TTAwMQ!]}', '功能与主治：
益气解表，散风祛湿。用于感冒头痛，恶寒壮热，身体烦疼，鼻塞声重，风痰头痛，寒壅咳嗽，时气疫痈，湿毒斑疹。

主要组成：
丹参，姜活，独活，柴胡，前胡，川芎，枳壳，桔梗，茯苓，甘草，薄荷，生姜。', 2, 1, 1, 0, -2636.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '人参败毒合剂', '益气解表，散风祛湿。用于感冒头痛，恶寒壮热，身体烦疼，鼻塞声重，风痰头痛，寒壅咳嗽，时气疫痈，湿毒斑疹。', '2019-09-04 20:37:09', '2022-09-27 02:17:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (409, 'BASIC', '九味姜活合剂', '九味姜活', 'M002', 1, 2, 500.00, '{[!TTAwMg!]}', '功能与主治：
发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。

主要组成：
姜活，防风，川芎，甘草， 苍术，白芷，黄芩，生地等。', 3, 1, 1, 0, -3376.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '九味姜活合剂', '发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。', '2019-09-04 20:54:39', '2022-09-28 06:39:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (410, 'BASIC', '川芎合剂', '川芎合剂S', 'M003', 1, 2, 500.00, '{[!TTAwMw!]}', '功能与主治：
疏散风邪。因风热，风寒音起的各种酸痛（偏头痛，巅顶痛，眉梭骨痛等）目眩，关节痹痛，项强诸症。

主要组成：
防风，白芷，川芎，菊花，藁本，蔓荆子，当归，薄荷。', 3, 1, 1, 0, -499.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '川芎合剂', '疏散风邪。因风热，风寒音起的各种酸痛（偏头痛，巅顶痛，眉梭骨痛等）目眩，关节痹痛，项强诸症。', '2019-09-04 22:40:18', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (411, 'BASIC', '川芎茶调合剂', '川芎茶调合剂', 'M004', 1, 2, 500.00, '{[!TTAwNA!]}', '功能与主治:
因风寒感胃引起头晕目眩，偏正头痛，发热恶寒等症。

主要组成:
川芎，荆芥，白芷，茶叶，姜活，防风，甘草。', 3, 1, 1, 0, -1498.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '川芎茶调合剂', '因风寒感胃引起头景目眩，偏正头痛，发热恶寒等症。', '2019-09-04 22:50:41', '2022-09-19 01:59:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (412, 'BASIC', '升麻葛根合剂', '升麻葛根合剂', 'M005', 1, 2, 500.00, '{[!TTAwNQ!]}', '功能与主治:
辛凉解肌，透疹解毒。用于感冒，壮热，头痛，肢体疼痛，疮疹初起。

主要组成:
葛根，白芍，升麻，炙甘草。', 4, 1, 1, 0, -546.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '升麻葛根合剂', '辛凉解肌，透疹解毒。用于感冒，壮热，头痛，肢体疼痛，疮疹初起。', '2019-09-04 23:01:09', '2022-09-05 08:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (413, 'BASIC', '消痤合剂', '消痤合剂', 'M007', 1, 2, 500.00, '{[!TTAwNw!]}', '功能与主治:
清热解毒，活血软坚。颜面痤疮，青春豆，黑头，多脂，热毒疮疡。

主要组成:
丹皮，三棱，重楼，生地黄，海藻，昆布，莪术，丹参，夏枯草，蒲公英。', 10, 1, 1, 0, -542.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '消痤合剂', '清热解毒，活血软坚。颜面痤疮，青春豆，黑头，多脂，热毒疮疡。', '2019-09-04 23:09:46', '2022-09-27 01:30:15', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (414, 'BASIC', '辛夷合剂', '辛夷', 'M010', 1, 2, 500.00, '{[!TTAxMA!]}', '功能与主治:
清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。

主要组成:
川芎，白芷，菊花，前胡，石膏，生地，白术，薄荷，陈皮，茯苓，幸夷花，炙甘草。', 7, 1, 1, 0, -1769.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '辛夷合剂', '清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。', '2019-09-04 23:16:04', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (415, 'BASIC', '杏苏散合剂', '杏苏散合剂', 'M011', 1, 2, 500.00, '{[!TTAxMQ!]}', '功能与主治:
疏风解表，清热解毒，宜肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。

主要组成:
甘草，紫苏，陈皮，杏仁，法半夏，生姜，枳殻，前胡，茯苓，大枣，桔梗。', 7, 1, 1, 0, -2066.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '杏苏散合剂', '疏风解表，清热解毒，宣肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。', '2019-09-04 23:24:52', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (416, 'BASIC', '咽炎合剂', '咽炎合剂', 'M014', 1, 2, 500.00, '{[!TTAxNA!]}', '功能与主治:
清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。

主要组成:
金银花，连翘，牛蒡子，射干，山豆根，玄参，麦冬，桔梗，甘草，马勃，薄荷。', 9, 1, 1, 0, -1710.000000, 0, 2, 1, 0, 32.000000, null, 10, 10, 10, 10, '咽炎合剂', '清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。', '2019-09-04 23:45:38', '2022-09-22 01:16:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (417, 'BASIC', '荆防败毒合剂', '荆防败毒合剂', 'M015', 1, 2, 500.00, '{[!TTAxNQ!]}', '功能与主治:
发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。

主要组成:
荆芥，防风，茯苓，独活，白芷，姜活，前胡，柴胡，桔梗，甘草，川芎，生姜，薄荷。', 9, 1, 1, 0, -999.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '荆防败毒合剂', '发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。', '2019-09-04 23:51:38', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (418, 'BASIC', '香薷饮合剂', '香薷饮合剂', 'M016', 1, 2, 500.00, '{[!TTAxNg!]}', '功能与主治:
祛暑解表，化湿和中。用于外感于寒，内伤于湿，头痛头重，发热，恶寒烦躁，口渴，心腹疼痛，吐泻等。

主要组成:
香薷，白扁豆，炙甘草等。', 9, 1, 1, 0, -1821.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '香薷饮合剂', '祛暑解表，化湿和中。用于外感于寒，内伤于湿，头痛头重，发热，恶寒烦躁，口渴，心腹疼痛，吐泻等。', '2019-09-04 23:59:19', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (419, 'BASIC', '感冒合剂', '感冒合剂S', 'M013', 1, 2, 500.00, '{[!TTAxMw!]}', '功能与主治:
疏风清热。用于伤风感冒，身热恶寒，头痛鼻塞。

主要组成:
桔梗，荆芥，薄荷，金银花，牛蒡子，淡豆豉，连翘，淡竹叶，桑叶，白菊花，钩藤。', 13, 1, 1, 0, -241.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '感冒合剂', '疏风清热。用于伤风感冒，身热恶寒，头痛鼻塞。', '2019-09-05 00:13:29', '2022-08-09 07:47:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (420, 'BASIC', '桑菊饮合剂', '桑菊饮合剂', 'M017', 1, 2, 500.00, '{[!TTAxNw!]}', '功能与主治:
疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。

主要组成:
桑叶，菊花，连翘，桔梗，华茎，甘草，杏仁，薄荷。', 10, 1, 1, 0, -2040.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '桑菊饮合剂', '疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。', '2019-09-05 01:43:16', '2022-09-26 08:39:10', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (421, 'BASIC', '桂枝合剂', '桂枝合剂', 'M018', 1, 2, 500.00, '{[!TTAxOA!]}', '功能与主治：
疏风解表，调和营卫。主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。

主要组成：
桂枝，白芍，生姜，大枣，炙甘草。', 10, 1, 1, 0, -3394.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '桂枝合剂', '疏风解表，调和营卫。主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。', '2019-09-05 01:54:21', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (423, 'BASIC', '银翘解毒合剂', '银翘解毒合剂S', 'M020', 1, 2, 500.00, '{[!TTAyMA!]}', '功能与主治:
疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。

主要组成:
金银花，连翘，荆芥，淡豆豉，牛蒡子，桔梗，淡竹叶，芦根，甘草。', 11, 1, 1, 0, -3902.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '银翘解毒合剂', '疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。', '2019-09-12 01:25:38', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (424, 'BASIC', '清瘟解毒合剂', '清瘟解毒合剂', 'M022', 1, 2, 500.00, '{[!TTAyMg!]}', '功能与主治:
清热解毒，消肿止痛。

主要组成:
板兰根，薄荷，连翘，牛蒡子，苓，蒲公英，荆芥。', 11, 1, 1, 0, -1417.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '清瘟解毒合剂', '清热解毒，消肿止痛。', '2019-09-12 19:39:48', '2022-09-26 04:41:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (425, 'BASIC', '鼻通灵合剂', '鼻通灵合剂S', 'M023', 1, 2, 500.00, '{[!TTAyMw!]}', '功能与主治:
清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。

主要组成:
苍耳子，白芷，金银花，连翘，防风，藿香，鹅不食草，薄荷，幸夷。', 14, 1, 1, 0, -2080.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '鼻通灵合剂', '清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。', '2019-09-12 19:47:34', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (426, 'BASIC', '止泻合剂', '止泻合剂', 'M024', 1, 2, 500.00, '{[!TTAyNA!]}', '功能与主治：
发热下痢，胸脘烦热，口渴，喘而汗出，急性肠炎。

主要组成：
葛根，黄芩，甘草，黄连，玄参，赤芍，天花粉，葛根。', 4, 1, 1, 0, -1382.000000, 0, 2, 1, 0, 31.000000, null, 10, 10, 10, 10, '止泻合剂', '发热下痢，胸脘烦热，口渴，喘而汗出，急性肠炎。', '2019-09-12 20:47:29', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (427, 'BASIC', '白虎合剂', '白虎合剂S', 'M025', 1, 2, 500.00, '{[!TTAyNQ!]}', '功能与主治：
清热生津。主治阳明经热盛所致的壮热，烦渴，口干舌燥，面赤恶热大汗出等症。

主要组成：
知母，石裔，炙甘草，谷芽。', 5, 1, 1, 0, -1278.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '白虎合剂', '清热生津。主治阳明经热盛所致的壮热，烦渴，口干舌燥，面赤恶热大汗出等症。', '2019-09-12 20:53:44', '2022-09-26 08:39:10', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (428, 'BASIC', '石膏合剂', '石膏合剂S', 'M026', 1, 2, 500.00, '{[!TTAyNg!]}', '功能与主治:
疏风散寒，解热宣肺。适用于伤风感冒，流行性感冒，头痛鼻塞，外感风寒，项强身痛，咳嗽无汗等症。

主要组成:
石膏，葛根，栀子，白芍，百合，升麻，甘草，川贝母。', 5, 1, 1, 0, -1474.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '石膏合剂', '疏风散寒，解热宣肺。 适用于伤风感冒，流行性感冒，头痛鼻塞，外感风寒，项强身痛，咳嗽无汗等症。', '2019-09-12 22:29:37', '2022-09-28 06:39:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (429, 'BASIC', '鼻炎糖浆', '鼻炎糖浆', 'M027', 1, 2, 500.00, '{[!TTAyNw!]}', '功能与主治:
清热解毒，消肿通窍，用于急慢性鼻炎。

主要组成:
黄芪，鹅不食草，白芷，薄荷，苍耳子，辛夷花。', 14, 1, 1, 0, -628.000000, 0, 2, 1, 0, 33.000000, null, 10, 10, 10, 10, '鼻炎糖浆', '清热解毒，消肿通窍，用于急慢性鼻炎。', '2019-09-12 22:51:01', '2022-09-19 03:54:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (430, 'BASIC', '甘露合剂', '甘露合剂S', 'M028', 1, 2, 500.00, '{[!TTAyOA!]}', '功能与主治：
舒缓身体热气及口疮。

主要组成：
生地，石斛，黄芩，茵陈，熟地，天冬，麦冬，枳壳，甘草，枇杷叶。', 5, 1, 1, 0, -1519.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '甘露合剂', null, '2019-09-12 23:03:46', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (431, 'BASIC', '竹叶石膏合剂', '竹叶石膏合剂', 'M029', 1, 2, 500.00, '{[!TTAyOQ!]}', '功能与主治：
益气养阴，降逆。用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。

主要组成：
竹叶，生石膏，太子参，麦冬，甘草，制半夏。', 6, 1, 1, 0, -488.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '竹叶石膏合剂', '益气养阴，降逆。用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。', '2019-09-12 23:58:37', '2022-09-23 02:27:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (432, 'BASIC', '防风通圣合剂', '防风通圣合剂', 'M030', 1, 2, 500.00, '{[!TTAzMA!]}', '功能与主治：
解表通里，清热解毒。用于感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。

主要组成：
防风，川芎，当归，白芍，连翘，石裔，黄芩，桔梗，荆芥，白术，栀子，甘草，薄荷，大黄，芒硝，生姜等。', 6, 1, 1, 0, -1328.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '防风通圣合剂', null, '2019-09-13 00:01:26', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (433, 'BASIC', '枝芩合剂', '枝芩合剂', 'M031', 1, 2, 500.00, '{[!TTAzMQ!]}', '枝芩合剂', 8, 1, 1, 0, -1258.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '枝芩合剂', null, '2019-09-13 00:03:40', '2022-09-19 01:59:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (434, 'BASIC', '凉膈合剂', '凉膈合剂', 'M034', 1, 2, 500.00, '{[!TTAzNA!]}', '功能与主治：
凉膈通便。用于烦躁口渴，面赤唇焦，口舌生疮，胸膈积热，便秘尿赤。

主要组成：
甘草，黄芩，栀子，连翘，薄荷，淡竹叶等。', 10, 1, 1, 0, -630.000000, 0, 2, 1, 0, 34.000000, null, 10, 10, 10, 10, '凉膈合剂', '凉膈通便。用于烦躁口渴，面赤唇焦，口舌生疮，胸膈积热，便秘尿赤。', '2019-09-13 00:05:19', '2022-09-27 07:50:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (435, 'BASIC', '普济消毒合剂', '普济消毒合剂', 'M037', 1, 2, 500.00, '{[!TTAzNw!]}', '功能与主治：
清热解毒，疏风散邪。用于痄腮，头面肿大，咽喉肿痛，口渴舌燥，以及传染性疫毒，颜面丹毒。

主要组成：
黄芩，牛蒡子，玄参，陈皮，甘草，桔梗，板蓝根，连翘，柴胡，升麻，马勃，穿心莲，僵蚕。', 12, 1, 1, 0, -4781.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '普济消毒合剂', '清热解毒，疏风散邪。用于痄腮，头面肿大，咽喉肿痛，口渴舌燥，以及传染性疫毒，颜面丹毒。', '2019-09-13 00:11:11', '2022-09-28 04:02:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (436, 'BASIC', '明目地黄合剂', '明目地黄合剂', 'M039', 1, 2, 500.00, '{[!TTAzOQ!]}', '功能与主治：
滋肾养肝明目。用于肝肾阳虚，眼目干涩，视物模糊，及阴虚阳亢症候。

主要组成：
菊花，当归，熟地，淮山，蒺藜，山茱萸，丹皮，泽泻，石决明，茯苓，枸杞，白芍。', 8, 1, 1, 0, -190.000000, 0, 2, 1, 0, 27.500000, null, 10, 10, 10, 10, '明目地黄合剂', '滋肾养肝明目。用于肝肾阳虚，眼目干涩，视物模糊，及阴虚阳亢症候。', '2019-09-13 00:12:27', '2022-09-06 04:19:59', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (437, 'BASIC', '八正散合剂', '八正散合剂S', 'M040', 1, 2, 500.00, '{[!TTA0MA!]}', '功能与主治：
清热泻火，利水通淋。用于湿热下注，小便淋漓，短赤，急痛，尿道灼热涩痛。

主要组成：
瞿麦，车前子，滑石，甘草，扁蓄，栀子，大黄等。', 2, 1, 1, 0, -2202.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '八正散合剂', '清热泻火，利水通淋。用于湿热下注，小便淋漓，短赤，急痛，尿道灼热涩痛。', '2019-09-13 00:19:29', '2022-09-27 07:50:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (438, 'BASIC', '治糖合剂', '治糖合剂', 'M041', 1, 2, 500.00, '{[!TTA0MQ!]}', '功能与主治：
滋阴清热，益气生津。主治消渴症，口渴善饮，小便频数，困倦气短。

主要组成：
知母，黄芪，葛根，生地，肉桂，玄参，花粉，丹参，淮山药，苍术，牡蛎，黄苓。', 8, 1, 1, 0, -286.000000, 0, 2, 1, 0, 33.000000, null, 10, 10, 10, 10, '治糖合剂', '滋阴清热，益气生津。主治消渴症，口渴善饮，小便频数，困倦气短。', '2019-09-13 00:22:24', '2022-09-19 04:54:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (439, 'BASIC', '三仁合剂', '三仁合剂S', 'M042', 1, 2, 500.00, '{[!TTA0Mg!]}', '功能与主治：
清利湿热。用于治湿热初起的头痛恶寒，身重疼痛，面色淡黄，胸闷不饥，午后潮热，舌白不渴诸症。

主要组成：
白蔻仁，杏仁，薏苡仁，滑石，通草，法半夏，淡竹叶等。', 3, 1, 1, 0, -2024.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '三仁合剂', '清利湿热。用于治湿热初起的头痛恶寒，身重疼痛，面色淡黄，胸闷不饥，午后潮热，舌白不渴诸症。', '2019-09-13 00:23:53', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (440, 'BASIC', '小柴胡合剂', '小柴胡合剂S', 'M043', 1, 2, 500.00, '{[!TTA0Mw!]}', '功能与主治：
和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。

主要组成：
柴胡，党参，黄芩，大枣，法半夏，甘草，生姜。', 3, 1, 1, 0, -8733.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '小柴胡合剂', '和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。', '2019-09-13 00:25:42', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (441, 'BASIC', '五苓合剂', '五苓合剂S', 'M044', 1, 2, 500.00, '{[!TTA0NA!]}', '功能与主治：
化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。

主要组成：
猪芩，茯苓，泽泻，白术，肉桂。', 4, 1, 1, 0, -3679.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '五苓合剂', '化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。', '2019-09-13 00:28:07', '2022-09-28 06:37:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (442, 'BASIC', '丹枝逍遥合剂', '丹枝逍遥合剂S', 'M045', 1, 2, 500.00, '{[!TTA0NQ!]}', '功能与主治：
疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。

主要组成：
当归，白术，茯苓，白芍，柴胡，生姜，甘草，薄荷。', 4, 1, 1, 0, -6477.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '丹枝逍遥合剂', '疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。', '2019-09-13 00:30:04', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (443, 'BASIC', '导赤散合剂', '导赤散合剂', 'M046', 1, 2, 500.00, '{[!TTA0Ng!]}', '功能与主治：
清心利水。用于心经热盛，面赤心烦，口腔炎，尿道炎，小便淋痛不舒，茎中作痛，口腔糜烂，舌疮。

主要组成：
生地，淡竹叶，甘草等。', 6, 1, 1, 0, -1119.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '导赤散合剂', '清心利水。用于心经热盛，面赤心烦，口腔炎，尿道炎，小便淋痛不舒，茎中作痛，口腔糜烂，舌疮。', '2019-09-13 00:32:21', '2022-09-23 01:19:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (444, 'BASIC', '二仙合剂', '二仙合剂', 'M047', 1, 2, 500.00, '{[!TTA0Nw!]}', '功能与主治：
全身浮肿，下肢尤甚，尿少，腰酸，乏力精疲。

主要组成：
仙茅，当归，淫羊菝，知母，巴戟天。', 2, 1, 1, 0, -667.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '二仙合剂', '全身浮肿，下肢尤甚，尿少，腰酸，乏力精疲。', '2019-09-13 00:33:45', '2022-09-27 07:17:43', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (445, 'BASIC', '甘露消毒合剂', '甘露消毒合剂S', 'M048', 1, 2, 500.00, '{[!TTA0OA!]}', '功能与主治：
化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。

主要组成：
连翘，霍香，川贝，石菖蒲，茵陈，黄芩，射干，白豆蔻，薄荷等。', 5, 1, 1, 0, -4840.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '甘露消毒合剂', '化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。', '2019-09-13 00:34:50', '2022-09-28 08:42:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (446, 'BASIC', '葶苈大枣泄肺合剂', '葶苈大枣泄肺合剂', 'M050', 1, 2, 500.00, '{[!TTA1MA!]}', '功能与主治：
泻肺行水，下气平喘。用于痰涎壅满。

主要组成：
葶苈子，大枣。', 12, 1, 1, 0, -228.000000, 0, 2, 1, 0, 31.000000, null, 10, 10, 10, 10, '葶苈大枣泄肺合剂', '泻肺行水，下气平喘。用于痰涎壅满。', '2019-09-13 00:37:22', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (447, 'BASIC', '逍遥合剂', '逍遥合剂', 'M051', 1, 2, 500.00, '{[!TTA1MQ!]}', '功能与主治：
疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。

主要组成：
当归，白术，茯苓，白芍，柴胡，生姜，甘草，薄荷。', 10, 1, 1, 0, -2546.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '逍遥合剂', '疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。', '2019-09-13 00:38:30', '2022-09-22 07:51:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (448, 'BASIC', '柴胡疏肝合剂', '柴胡疏肝合剂', 'M052', 1, 2, 500.00, '{[!TTA1Mg!]}', '功能与主治：
疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。

主要组成：
柴胡，白芍，枳壳，香附，郁金，陈皮，川芎，甘草。', 10, 1, 1, 0, -6830.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '柴胡疏肝合剂', '疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。', '2019-09-13 00:40:04', '2022-09-28 06:39:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (449, 'BASIC', '藿香正气合剂', '藿香正气合剂S', 'M053', 1, 2, 500.00, '{[!TTA1Mw!]}', '功能与主治：
解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。

主要组成：
霍香，紫苏叶，陈皮，苍术，神曲，茯苓，桔梗，法夏，大腹皮，炙甘草等。', 19, 1, 1, 0, -5725.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '藿香正气合剂', '解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。', '2019-09-13 00:41:35', '2022-09-27 07:18:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (450, 'BASIC', '健脑补血合剂', '健脑补血合剂', 'M054', 5, 2, 500.00, '{[!TTA1NA!]}', '功能与主治：
养血安神，用于失眠，晕眩。

主要组成：
首乌，墨旱莲，桑椹子，山稔子，金樱子，钩藤， 鸡血藤。', 10, 1, 1, 0, -37.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '健脑补血合剂', '养血安神，用于失眠，晕眩。', '2019-09-13 00:43:26', '2022-09-14 03:44:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (451, 'BASIC', '藿朴夏苓合剂', '藿朴夏苓合剂', 'M055', 1, 2, 500.00, '{[!TTA1NQ!]}', '功能与主治：
身热不渴，肢体怠倦，胸闷口腻。

主要组成：
藿香，杏仁，茯苓，法夏，猪苓，泽泻，淡豆豉，薏苡仁等。', 19, 1, 1, 0, -1331.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '藿朴夏苓合剂', '身热不渴，肢体怠倦，胸闷口腻。', '2019-09-13 00:45:58', '2022-09-22 02:18:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (452, 'BASIC', '十全大补合剂', '十全大补合剂', 'M056', 1, 2, 500.00, '{[!TTA1Ng!]}', '功能与主治:
温补气血。主治虚损劳热，足膝无力，面黄肌瘦，胃弱不食等症。

主要组成:
党参，白术，当归，白芍， 肉桂，茯苓，炙甘草，熟地，川芎，炙黄芪。', 2, 1, 1, 0, -1901.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '十全大补合剂', '温补气血。主治虚损劳热，足膝无力，面黄肌瘦，胃弱不食等症。', '2019-09-13 00:47:14', '2022-09-20 07:00:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (453, 'BASIC', '妇科大补合剂', '妇科大补合剂', 'M057', 1, 2, 500.00, '{[!TTA1Nw!]}', '功能与主治：
补气血，益肝肾。主治妇女气血两亏，中气不足，头晕乏力，腰膝酸软，食欲不振，神疲等症。

主要组成：
当归，肉桂，白术，川芎，白芍，茯苓，炙甘草，熟地，黄精，黄芪，党参。', 6, 1, 1, 0, -10.000000, 0, 2, 1, 0, 28.000000, null, 10, 10, 10, 10, '妇科大补合剂', '补气血，益肝肾。主治妇女气血两亏，中气不足，头晕乏力，腰膝酸软，食欲不振，神疲等症。', '2019-09-13 00:48:28', '2022-06-20 06:14:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (454, 'BASIC', '四物合剂', '四物合剂S', 'M058', 1, 2, 500.00, '{[!TTA1OA!]}', '功能与主治：
补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。

主要组成：
当归，熟地，白芍，川芎。', 5, 1, 1, 0, -1590.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '四物合剂', '补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。', '2019-09-13 00:58:03', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (455, 'BASIC', '归脾合剂', '归脾合剂S', 'M059', 1, 2, 500.00, '{[!TTA1OQ!]}', '功能与主治：
健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。

主要组成：
党参，黄芪，白术，茯苓，酸枣仁，当归，远志，生姜，大枣，木香，桂元肉，甘草。', 5, 1, 1, 0, -3842.000000, 0, 2, 1, 0, 35.000000, null, 10, 10, 10, 10, '归脾合剂', '健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。', '2019-09-13 01:00:10', '2022-09-28 06:19:48', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (456, 'BASIC', '妇科种子合剂', '妇科种子合剂', 'M060', 1, 2, 500.00, '{[!TTA2MA!]}', '功能与主治：
养血调经，调补冲任。主治妇人血虚气滞，赤白带下，子宫虚寒不孕，久服气血调和，有助孕育。

主要组成：
当归，白苟，川弯，熟地，杜仲，川续断，艾叶，丹参，益母草，阿胶，香附，黄芩。', 6, 1, 1, 0, -169.000000, 0, 2, 1, 0, 38.000000, null, 10, 10, 10, 10, '妇科种子合剂', '养血调经，调补冲任。主治妇人血虚气滞，赤白带下，子宫虚寒不孕，久服气血调和，有助孕育。', '2019-09-13 01:02:27', '2022-09-18 09:03:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (457, 'BASIC', '妇炎清合剂', '妇炎清合剂', 'M061', 1, 2, 500.00, '{[!TTA2MQ!]}', '功能与主治：
补中健脾，疏肝解郁，化湿止带。用于子宫颈炎，附件炎等。

主要组成：
陈皮，淮山，车前子，白芍，荆芥，党参，白术，苍术，柴胡，甘草。', 6, 1, 1, 0, -206.000000, 0, 2, 1, 0, 27.000000, null, 10, 10, 10, 10, '妇炎清合剂', '补中健脾，疏肝解郁，化湿止带。用于子宫颈炎，附件炎等。', '2019-09-13 01:03:52', '2022-09-14 03:44:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (458, 'BASIC', '桃红四物合剂', '桃红四物合剂', 'M063', 1, 2, 500.00, '{[!TTA2Mw!]}', '功能与主治：
活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。

主要组成：
桃仁，红花，归尾，川芎，赤苟，生地。', 10, 1, 1, 0, -2376.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '桃红四物合剂', '活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。', '2019-09-13 01:05:27', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (459, 'BASIC', '养血当归精合剂', '养血当归精合剂', 'M064', 1, 2, 500.00, '{[!TTA2NA!]}', '功能与主治：
补血助气，调经。主治身体虚弱，面色萎黄，肌肉消瘦，妇女产后血虚，腹痛，头疼眩晕及病后贫血诸症。

主要组成：
当归，川芎，熟地，白芍，党参，黄芪，茯苓，甘草。', 9, 1, 1, 0, -1220.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '养血当归精合剂', '补血助气，调经。主治身体虚弱，面色萎黄，肌肉消瘦，妇女产后血虚，腹痛，头疼眩晕及病后贫血诸症。', '2019-09-13 01:27:34', '2022-09-21 03:59:28', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (460, 'BASIC', '温经合剂', '温经合剂', 'M066', 1, 2, 500.00, '{[!TTA2Ng!]}', '功能与主治：
温经散寒，活血祛瘀。用于妇人虚弱不调，夜间发热，小腹冷痛，日久不清，冲任虚寒，腰酸膝痛等症。

主要组成：
当归，川芎，吴茱萸，党参，桂枝，阿胶，法半夏，白芍，炙甘草，麦冬，生姜。', 12, 1, 1, 0, -546.000000, 0, 2, 1, 0, 69.500000, null, 10, 10, 10, 10, '温经合剂', '温经散寒，活血祛瘀。 用于妇人虚弱不调，夜间发热，小腹冷痛，日久不清，冲任虚寒，腰酸膝痛等症。', '2019-09-13 01:28:56', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (461, 'BASIC', '七味消毒合剂', '七味消毒合剂', 'M067', 1, 2, 500.00, '{[!TTA2Nw!]}', '功能与主治：
清热解毒，消散疔疮。用于各种疮毒，痈疮疔肿，乳腺炎，急性扁桃腺炎。

主要组成：
金银花，野菊花，紫花地丁，蒲公英，板蓝根，重蒌，土茯苓。', 2, 1, 1, 0, -2464.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '七味消毒合剂', '清热解毒，消散疔疮。用于各种疮毒，痈疮疔肿，乳腺炎，急性扁桃腺炎。', '2019-09-13 01:30:03', '2022-09-27 07:50:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (462, 'BASIC', '软坚合剂', '软坚合剂SY', 'M068', 1, 2, 500.00, '{[!TTA2OA!]}', '功能与主治：
体疲身倦，头晕目眩，肝区隐痛，右腹肿硬，伴有腹水。

主要组成：
当归，丹参，郁金，丹皮，茯苓，生地，白术，桃仁，山楂，茵陈，白芍，龟甲，川楝子。', 8, 1, 1, 0, -169.000000, 0, 2, 1, 0, 36.000000, null, 10, 10, 10, 10, '软硬合剂', '体疲身倦，头晕目眩，肝区隐痛，右腹肿硬，伴有腹水。', '2019-09-13 01:30:58', '2022-09-15 02:54:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (463, 'BASIC', '内消清毒合剂', '内消清毒合剂', 'M069', 1, 2, 500.00, '{[!TTA2OQ!]}', '功能与主治：
清热解毒，消肿散结。主治热毒郁滞，疔毒乳痈，疮疡疖肿初起，以及瘰病结核及咽喉肿痛等症。


主要组成：
土茯苓，生地，蒲公英，丹皮，金银花，连翘，天花粉，黄芩。', 4, 1, 1, 0, -687.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '内消清毒合剂', '清热解毒，消肿散结。主治热毒郁滞，疔毒乳痈，疮疡疖肿初起，以及瘰病结核及咽喉肿痛等症。', '2019-09-13 01:32:20', '2022-09-15 01:52:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (464, 'BASIC', '仙方活命合剂', '仙方活命合剂S', 'M071', 1, 2, 500.00, '{[!TTA3MQ!]}', '功能与主治：
清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。

主要组成：
白芷，当归尾，金银花，陈皮，防风，皂角刺，浙贝母，乳香，天花粉，甘草，赤芍，没药。', 5, 1, 1, 0, -1503.000000, 0, 2, 1, 0, 38.500000, null, 10, 10, 10, 10, '仙方活命合剂', '清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。', '2019-09-13 01:33:43', '2022-09-28 06:39:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (465, 'BASIC', '乌梢止痒合剂', '乌梢止痒合剂', 'M072', 1, 2, 500.00, '{[!TTA3Mg!]}', '功能与主治：
清热凉血，祛风除湿止瘠。用于急慢性湿疹，风疹，皮肤瘙痒症。

主要组成：
皂剌，地肤子，荆芥，甘草，桑白皮，白疾藜，苍术，苦参，生地，丹皮，蝉蜕等。', 3, 1, 1, 0, -1480.000000, 0, 2, 1, 0, 32.000000, null, 10, 10, 10, 10, '乌梢止痒合剂', '清热凉血，祛风除湿止瘠。用于急慢性湿疹，风疹，皮肤瘙痒症。', '2019-09-13 01:38:10', '2022-09-27 01:29:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (466, 'BASIC', '平瘿合剂', '平瘿合剂S', 'M073', 1, 2, 500.00, '{[!TTA3Mw!]}', '功能与主治：
甲状腺肿大。烦躁不安，头晕目眩，少寐多梦，口干咽燥。

主要组成：
莪术，玄参，山茱萸，生地，牡蛎，浙贝，青皮，当归，茯苓，三棱，夏枯草，白术，黄药子等。', 5, 1, 1, 0, -1064.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '平瘿合剂', '甲状腺肿大。烦躁不安，头晕目眩，少寐多梦，口干咽燥。', '2019-09-13 01:41:01', '2022-09-27 02:16:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (467, 'BASIC', '苦参合剂', '苦参合剂', 'M074', 1, 2, 500.00, '{[!TTA3NA!]}', '功能与主治：
祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。

主要组成：
苦参，蛇床子，白芷，金银花，野菊花，地肤子，石菖蒲。', 8, 1, 1, 0, -1719.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '苦参合剂', '祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。', '2019-09-13 01:42:25', '2022-09-28 06:39:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (468, 'BASIC', '消风散合剂', '消风散合剂', 'M075', 1, 2, 500.00, '{[!TTA3NQ!]}', '功能与主治：
疏风养血，清热除湿。主治风疹，湿疹症见肤症出红，色红，瘙痒，抓破后渗水等症。

主要组成：
荆芥，防风，当归，生地，苦参，苍术，牛蒡子，蝉蜕，知母，生石膏，甘草等。', 10, 1, 1, 0, -2077.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '消风散合剂', '疏风养血，清热除湿。主治风疹，湿疹症见肤症出红，色红，瘙痒，抓破后渗水等症。', '2019-09-13 01:43:41', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (469, 'BASIC', '养血熄风合剂', '养血熄风合剂', 'M076', 1, 2, 500.00, '{[!TTA3Ng!]}', '功能与主治：
养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。

主要组成：
首乌，蛇床子，荆芥，甘草，地肤子，防风，黄芩，刺疾藜等。', 9, 1, 1, 0, -933.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '养血熄风合剂', '养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。', '2019-09-13 01:44:48', '2022-09-27 07:17:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (470, 'BASIC', '槐榆合剂', '槐榆合剂', 'M077', 1, 2, 500.00, '{[!TTA3Nw!]}', '功能与主治：
清热解毒，止血便通。用于痨疮下出血，大便秘结，肛痛。

主要组成：
槐花米，地榆，侧柏叶，黄芩，仙鹤草，枳壳，蒲公英，金银花。', 12, 1, 1, 0, -2958.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '槐榆合剂', '清热解毒，止血便通。用于痨疮下出血，大便秘结，肛痛。', '2019-09-13 01:46:08', '2022-09-27 03:39:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (471, 'BASIC', '少腹逐瘀合剂', '少腹逐瘀合剂S', 'M078', 1, 2, 500.00, '{[!TTA3OA!]}', '功能与主治:
活血祛瘀，温经止痛。主治少腹瘀血积块，少腹满痛，月事不调，崩漏兼少腹痧痛等症。

主要组成：
蒲黄，小茴香，干姜，没药，当归，赤芍，川芎，肉桂等', 4, 1, 1, 0, -1241.000000, 0, 2, 1, 0, 34.500000, null, 10, 10, 10, 10, '少腹逐瘀合剂', '活血祛瘀，温经止痛。主治少腹瘀血积块，少腹满痛，月事不调，崩漏兼少腹痧痛等症。', '2019-09-13 01:47:24', '2022-09-28 08:42:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (472, 'BASIC', '头痛合剂', '头痛合剂', 'M080', 1, 2, 500.00, '{[!TTA4MA!]}', '功能与主治：
祛风止痛。用于两额头痛，巅顶痛，头痛兼有表症者。

主要组成：
防风，蔓荆子，藁本，白芷，甘草，菊花。', 5, 1, 1, 0, -949.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '头痛合剂', '祛风止痛。用于两额头痛，巅顶痛，头痛兼有表症者。', '2019-09-13 01:48:45', '2022-09-22 07:51:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (473, 'BASIC', '伤科杜仲合剂', '伤科杜仲合剂', 'M081', 1, 2, 500.00, '{[!TTA4MQ!]}', '功能与主治：
劳伤，跌打，腰背酸痛，日久未愈。

主要组成：
杜仲，枳壳，青皮，陈皮，当归，川木瓜，赤芍，香附，小茴香，银柴胡等。', 6, 1, 1, 0, -2488.000000, 0, 2, 1, 0, 46.000000, null, 10, 10, 10, 10, '伤科杜仲合剂', '劳伤，跌打，腰背酸痛，日久未愈。', '2019-09-13 01:56:10', '2022-09-27 01:29:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (474, 'BASIC', '血府逐瘀合剂', '血府逐瘀合剂', 'M082', 1, 2, 500.00, '{[!TTA4Mg!]}', '功能与主治：
活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。

主要组成：
当归尾，牛膝，红花，生地，桃仁，枳壳，赤芍，柴胡，甘草，桔梗，川芎。', 5, 1, 1, 0, -4727.000000, 0, 2, 1, 0, 31.000000, null, 10, 10, 10, 10, '血府逐瘀合剂', '活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。', '2019-09-13 01:57:22', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (475, 'BASIC', '杜仲合剂', '杜仲合剂', 'M083', 1, 2, 500.00, '{[!TTA4Mw!]}', '功能与主治：
活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。

主要组成：
杜仲，续断，生地，赤芍，归尾，丹皮，桃仁，牛膝等。', 7, 1, 1, 0, -2965.000000, 0, 2, 1, 0, 35.500000, null, 10, 10, 10, 10, '杜仲合剂', '活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。', '2019-09-13 01:58:19', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (476, 'BASIC', '消肿活血合剂', '消肿活血合剂', 'M085', 1, 2, 500.00, '{[!TTA4NQ!]}', '功能与主治：
活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。

主要组成：
续断，赤芍，地丁，桂枝，牛膝，当归，泽兰等。', 10, 1, 1, 0, -1606.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '消肿活血合剂', '活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。', '2019-09-13 01:59:29', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (477, 'BASIC', '滋阴降火合剂', '滋阴降火合剂S', 'M086', 1, 2, 500.00, '{[!TTA4Ng!]}', '功能与主治:
阴虚火盛，以及尿浑浊。

主要组成:
知母，生地，陈皮，白术，白芍，乾姜，天冬，甘草，白芷，川芎， 穿心莲，生姜，当归，熟地。', 12, 1, 1, 0, -43.000000, 0, 2, 1, 0, 28.000000, null, 10, 10, 10, 10, '滋阴降火合剂', '阴虚火盛，以及尿浑浊。', '2019-09-13 02:00:38', '2022-08-05 02:24:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (478, 'BASIC', '复元活血合剂', '复元活血合剂', 'M088', 1, 2, 500.00, '{[!TTA4OA!]}', '功能与主治：
活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。

主要组成：
柴胡，瓜蒌仁，炙甘草，桃仁，红花，当归，大黄。', 9, 1, 1, 0, -730.000000, 0, 2, 1, 0, 35.500000, null, 10, 10, 10, 10, '复元活血合剂', '活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。', '2019-09-13 02:02:30', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (479, 'BASIC', '补阳还五合剂', '补阳还五合剂', 'M089', 1, 2, 500.00, '{[!TTA4OQ!]}', '功能与主治：
补气活血，通络祛瘀。用于治中风后逍症，症见半身不遂，口眼歪科，语言不利，口角流涎，手足麻木等。

主要组成：
生黄芪，归尾，赤芍，川芎，桃仁，红花等', 7, 1, 1, 0, -3146.000000, 0, 2, 1, 0, 37.500000, null, 10, 10, 10, 10, '补阳还五合剂', '补气活血，通络祛瘀。用于治中风后逍症，症见半身不遂，口眼歪科，语言不利，口角流涎，手足麻木等。', '2019-09-18 01:31:30', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (480, 'BASIC', '一贯煎合剂', '一贯煎合剂S', 'M090', 1, 2, 500.00, '{[!TTA5MA!]}', '功能与主治:
滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。

主要组成:
北沙参，麦冬，生地，川楝子，当归，杞子。', 1, 1, 1, 0, -739.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '一贯煎合剂', '滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。', '2019-09-18 01:33:20', '2022-09-23 02:27:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (481, 'BASIC', '十味温胆合剂', '十味温胆合剂S', 'M091', 1, 2, 500.00, '{[!TTA5MQ!]}', '功能与主治:
清胆除痰，和胃止呕。用于心神不安，触事易惊，心悸烦闷，神经衰弱，失眠易醒。

主要组成:
甘草，陈皮，枳实，酸枣仁，茯苓，党参，五味子，熟地黄，远志，半夏。', 2, 1, 1, 0, -2085.000000, 0, 2, 1, 0, 35.500000, null, 10, 10, 10, 10, '十味温胆合剂', '清胆除痰，和胃止呕。用于心神不安，触事易惊，心悸烦闷，神经衰弱，失眠易醒。', '2019-09-18 01:36:15', '2022-09-27 03:39:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (482, 'BASIC', '十味甘麦大枣合剂', '十味甘麦大枣合剂S', 'M092', 1, 2, 500.00, '{[!TTA5Mg!]}', '功能与主治:
滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。

主要组成:
浮小麦，大枣，淮山，甘草，五味子，酸枣仁，天冬，玉竹，桑椹子，牡蛎。', 2, 1, 1, 0, -2254.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '十味甘麦大枣合剂', '滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。', '2019-09-18 01:37:55', '2022-09-23 03:24:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (483, 'BASIC', '天王补心合剂', '天王补心合剂S', 'M093', 1, 2, 500.00, '{[!TTA5Mw!]}', '功能与主治:
滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。

主要组成:
生地，党参，玄参，丹参，茯苓，桔梗，远志，酸枣仁，柏子仁，天冬，当归，麦冬， 五味子。', 3, 1, 1, 0, -4523.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '天王补心合剂', '滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。', '2019-09-18 01:40:00', '2022-09-28 05:18:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (484, 'BASIC', '天麻钩藤合剂', '天麻钩藤合剂S', 'M094', 1, 2, 500.00, '{[!TTA5NA!]}', '功能与主治：
肝肠上亢功能症，头晕，面色如醉，项强，头痛，肢体不利。

主要组成：
天麻，石决明，桑寄生，钩藤，杜仲，川牛膝，山栀子，黄芩，茯苓，益母草，夜交藤。', 3, 1, 1, 0, -3133.000000, 0, 2, 1, 0, 37.500000, null, 10, 10, 10, 10, '天麻钩藤合剂', '肝肠上亢功能症，头晕，面色如醉，项强，头痛，肢体不利。', '2019-09-18 01:41:47', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (485, 'BASIC', '生脉饮合剂', '生脉饮合剂S', 'M095', 1, 2, 500.00, '{[!TTA5NQ!]}', '功能与主治：
益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。

主要组成：
党参，麦冬，五味子。', 5, 1, 1, 0, -4182.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '生脉饮合剂', '益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。', '2019-09-18 01:44:03', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (486, 'BASIC', '玉屏风合剂', '玉屏风合剂S', 'M096', 1, 2, 500.00, '{[!TTA5Ng!]}', '功能与主治：
益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。

主要组成：
黄芪，白术，防风。', 5, 1, 1, 0, -1328.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '玉屏风合剂', '益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。', '2019-09-18 01:45:51', '2022-09-27 07:39:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (487, 'BASIC', '龙胆泻肝合剂', '龙胆泻肝合剂S', 'M097', 1, 2, 500.00, '{[!TTA5Nw!]}', '功能与主治：
泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。

主要组成：
龙胆草，柴胡，泽泻，车前子，生地，黄芩，归尾，山栀子，甘草等。', 5, 1, 1, 0, -5554.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '龙胆泻肝合剂', '泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。', '2019-09-18 01:49:44', '2022-09-28 05:18:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (488, 'BASIC', '复方大青叶合剂', '复方大青叶合剂', 'M098', 1, 2, 500.00, '{[!TTA5OA!]}', '功能与主治：
清热解毒，除湿通便。用于湿热之邪入里髙热神昏，感冒发烧，湿热泻痢，里急后重，痄腮，丹毒等症。

主要组成：
金银花，羌活，大青叶，大黄，拳参。', 9, 1, 1, 0, -4.000000, 0, 2, 1, 0, 28.000000, null, 10, 10, 10, 10, '复方大青叶合剂', '清热解毒，除湿通便。用于湿热之邪入里髙热神昏，感冒发烧，湿热泻痢，里急后重，痄腮，丹毒等症。', '2019-09-20 00:58:59', '2022-01-03 07:58:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (489, 'BASIC', '平肝熄风合剂', '平肝熄风合剂', 'M099', 1, 2, 500.00, '{[!TTA5OQ!]}', '功能与主治：
平肝熄风。用于头痛眩景，耳鸣眼花，手足麻痹。

主要组成：
白芍，牛膝，夏枯草，钩藤，牡蛎，珍珠母。', 5, 1, 1, 0, -194.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '平肝熄风合剂', '平肝熄风。用于头痛眩景，耳鸣眼花，手足麻痹。', '2019-09-20 01:00:19', '2022-09-24 07:48:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (490, 'BASIC', '安神合剂', '安神合剂', 'M101', 1, 2, 500.00, '{[!TTEwMQ!]}', '功能与主治：
益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。

主要组成：
生地，远志，玄参，丹参，夜交藤，五味子，女贞子，地骨皮。', 6, 1, 1, 0, -2120.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '安神合剂', '益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。', '2019-09-20 01:01:31', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (491, 'BASIC', '炙甘草合剂', '炙甘草合剂', 'M102', 1, 2, 500.00, '{[!TTEwMg!]}', '功能与主治：
益气补血，清热除烦。用于治虚烦不得眠，多梦易惊，虚汗。气虚血少，心动悸，脉结代等症。

主要组成：
炙甘草，大枣，党参，阿胶，生地，桂枝，麦冬，生姜。', 7, 1, 1, 0, -586.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '炙甘草合剂', '益气补血，清热除烦。用于治虚烦不得眠，多梦易惊，虚汗。气虚血少，心动悸，脉结代等症。', '2019-09-20 01:03:43', '2022-09-15 01:55:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (492, 'BASIC', '青蒿鳖甲合剂', '青蒿鳖甲合剂', 'M103', 1, 2, 500.00, '{[!TTEwMw!]}', '青蒿鳖甲合剂', 8, 1, 1, 0, -1145.000000, 0, 2, 1, 0, 37.500000, null, 10, 10, 10, 10, '青蒿鳖甲合剂', null, '2019-09-20 01:06:57', '2022-09-26 03:09:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (493, 'BASIC', '牵正解语合剂', '牵正解语合剂', 'M105', 1, 2, 500.00, '{[!TTEwNQ!]}', '功能与主治：
祛风镇痉，化痰通络。适用于中风面瘫，口眼嗝斜，口角流涎，语言蹇涩，头痛眩晕。

主要组成：
白芥子，石菖蒲，僵蚕，钩藤，地龙，姜活，木香，远志，胆南星等。', 11, 1, 1, 0, -1272.000000, 0, 2, 1, 0, 42.500000, null, 10, 10, 10, 10, '牵正解语合剂', '祛风镇痉，化痰通络。适用于中风面瘫，口眼嗝斜，口角流涎，语言蹇涩，头痛眩晕。', '2019-09-20 01:36:52', '2022-09-21 03:58:11', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (494, 'BASIC', '温胆合剂', '温胆合剂', 'M107', 1, 2, 500.00, '{[!TTEwNw!]}', '功能与主治：
清胆除痰，和胃止呕。用于虚痰热上抚，虚烦不得眠。

主要组成：
制半夏，炙甘草，茯苓，生姜，陈皮，枳寅，竹茹。', 12, 1, 1, 0, -1810.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '温胆合剂', '清胆除痰，和胃止呕。用于虚痰热上抚，虚烦不得眠。', '2019-09-20 01:38:04', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (495, 'BASIC', '补中益气合剂', '补中益气合剂', 'M108', 1, 2, 500.00, '{[!TTEwOA!]}', '功能与主治：
补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。

主要组成：
炙黄芪，党参，甘草，大枣，白术，陈皮，柴胡，当归，干姜，升麻。', 7, 1, 1, 0, -4843.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '补中益气合剂', '补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。', '2019-09-20 01:39:26', '2022-09-28 08:42:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (496, 'BASIC', '酸枣仁合剂', '酸枣仁合剂S', 'M109', 1, 2, 500.00, '{[!TTEwOQ!]}', '功能与主治：
替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。

主要组成：
酸枣仁，知母丶川芎，甘声。', 14, 1, 1, 0, -2773.000000, 0, 2, 1, 0, 37.500000, null, 10, 10, 10, 10, '酸枣仁合剂', '替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。', '2019-09-20 01:40:37', '2022-09-28 05:18:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (497, 'BASIC', '镇肝熄风合剂', '镇肝熄风合剂S', 'M110', 1, 2, 500.00, '{[!TTExMA!]}', '功能与主治：
镇肝熄风。用于肝阳上亢，肝风内动，眩晕头痛，面赤，肌体暂觉不利。

主要组成：
怀牛膝，川楝子，麦芽，玄参，天冬，龟板，牡蛎，甘草等。', 15, 1, 1, 0, -1636.000000, 0, 2, 1, 0, 37.500000, null, 10, 10, 10, 10, '镇肝熄风合剂', '镇肝熄风。用于肝阳上亢，肝风内动，眩晕头痛，面赤，肌体暂觉不利。', '2019-09-20 01:44:00', '2022-09-27 07:50:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (498, 'BASIC', '七味白术合剂', '七味白术合剂', 'M112', 1, 2, 500.00, '{[!TTExMg!]}', '功能与主治：
津枯发热，脾胃虚弱，口渴食少。

主要组成：
白术，木香，茯苓，霍香，党参，葛根，炙甘草。', 2, 1, 1, 0, -1460.000000, 0, 2, 1, 0, 34.500000, null, 10, 10, 10, 10, '七味白术合剂', '津枯发热，脾胃虚弱，口渴食少。', '2019-09-20 01:48:17', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (499, 'BASIC', '二陈合剂', '二陈合剂S', 'M113', 1, 2, 500.00, '{[!TTExMw!]}', '功能与主治：
燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。

主要组成：
陈皮，茯苓，生姜，炙甘草，制半夏。', 2, 1, 1, 0, -1631.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '二陈合剂', '燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。', '2019-09-20 01:49:59', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (500, 'BASIC', '小建中合剂', '小建中合剂S', 'M114', 1, 2, 500.00, '{[!TTExNA!]}', '功能与主治:
温中补虚，和里缓急。主治虚劳发热，心悸，虚烦，腹中时痛等症。

主要组成:
桂枝，白芍，大枣，生姜，甘草。', 3, 1, 1, 0, -823.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '小建中合剂', '温中补虚，和里缓急。主治虚劳发热，心悸，虚烦，腹中时痛等症。', '2019-09-20 01:51:40', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (501, 'BASIC', '小儿七星茶合剂', '小儿七星茶合剂S', 'M116', 1, 2, 500.00, '{[!TTExNg!]}', '功能与主治：
消热定惊，消衣。用于小儿疳积，蕴热，衣滞，受惊，夜睡不宁，消化不良，咬牙切齿，烦躁哭闹，不思饮食。

主要组成：
金银花，淡竹叶，甘草，山楂，薏苡仁，谷芽，钩藤，蝉蜕。', 3, 1, 1, 0, -930.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '小儿七星茶合剂', '消热定惊，消衣。用于小儿疳积，蕴热，衣滞，受惊，夜睡不宁，消化不良，咬牙切齿，烦躁哭闹，不思饮食。', '2019-09-20 01:53:07', '2022-09-14 08:07:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (502, 'BASIC', '小儿开胃糖浆', '小儿开胃糖浆', 'M117', 1, 2, 500.00, '{[!TTExNw!]}', '功能与主治：
开胃除积。主治小儿食欲不振，面黄肌瘦，疳积等。

主要组成：
白术，党参，陈皮，木香，麦芽，茯苓，神曲，使君子，生姜等。', 3, 1, 1, 0, -111.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '小儿开胃糖浆', '开胃除积。主治小儿食欲不振，面黄肌瘦，疳积等。', '2019-09-20 01:54:35', '2022-09-23 07:45:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (503, 'BASIC', '消渴合剂', '消渴合剂', 'M118', 1, 2, 500.00, '{[!TTExOA!]}', '功能与主治：
益气养阴。用于治气阴两虚，患者多表现为多饮，多食，多尿，乏力，消瘦，抵抗力弱，易患外感，舌淡黄，脉沉细等症。

主要组成：
山药，玉竹，龙骨，牡蛎，知母，麦冬，天花粉，党参，玄参等。', 10, 1, 1, 0, -95.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '消渴合剂', '益气养阴。用于治气阴两虚，患者多表现为多饮，多食，多尿，乏力，消瘦，抵抗力弱，易患外感，舌淡黄，脉沉细等症。', '2019-09-20 02:02:47', '2022-09-19 08:20:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (504, 'BASIC', '疏风解表合剂', '疏风解表合剂', 'M119', 1, 2, 500.00, '{[!TTExOQ!]}', '功能与主治：
风寒感冒，发热恶风，头痛，咽喉痒，咳嗽流涕。

主要组成：
防风，荆芥，桔梗，山豆根，辛夷，前胡，牛蒡子，萸荆子，苍耳子，天花粉，杏仁，薄荷。', 12, 1, 1, 0, -750.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '疏风解表合剂', '风寒感冒，发热恶风，头痛，咽喉痒，咳嗽流涕。', '2019-09-20 02:04:07', '2022-09-21 02:45:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (505, 'BASIC', '六子衍宗合剂', '六子衍宗合剂S', 'M120', 1, 2, 500.00, '{[!TTEyMA!]}', '功能与主治:
补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。

主要组成:
菟丝子，枸杞子，覆盆子，五味子，车前子，羊淫藿，补骨脂。', 4, 1, 1, 0, -2146.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '六子衍宗合剂', '补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。', '2019-09-20 02:05:26', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (506, 'BASIC', '六味地黄合剂', '六味地黄合剂S', 'M121', 1, 2, 500.00, '{[!TTEyMQ!]}', '功能与主治:
滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。

主要组成:
熟地黄，山茱萸，丹皮，淮山，茯苓，泽泻。', 4, 1, 1, 0, -3719.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '六味地黄合剂', '滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。', '2019-09-20 02:06:22', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (507, 'BASIC', '六君子合剂', '六君子合剂S', 'M122', 1, 2, 500.00, '{[!TTEyMg!]}', '功能与主治：
补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。

主要组成：
陈皮，白术，党参，茯苓，甘草，制半夏。', 4, 1, 1, 0, -1189.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '六君子合剂', '补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。', '2019-09-20 02:07:41', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (508, 'BASIC', '木香顺气合剂', '木香顺气合剂S', 'M123', 1, 2, 500.00, '{[!TTEyMw!]}', '功能与主治：
气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。

主要组成：
木香，香附，苍术，枳殻，陈皮，甘草等。', 4, 1, 1, 0, -1391.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '木香顺气合剂', '气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。', '2019-09-20 02:09:14', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (509, 'BASIC', '口疡合剂', '口疡合剂', 'M124', 1, 2, 500.00, '{[!TTEyNA!]}', '功能与主治：
清熟解毒，消炎。用于多发性口腔炎。

主要组成：
生地，桔梗，玉竹，金银花，玄参，黄精，苦地丁，天花粉。', 3, 1, 1, 0, -1512.000000, 0, 2, 1, 0, 36.500000, null, 10, 10, 10, 10, '口疡合剂', '清熟解毒，消炎。用于多发性口腔炎。', '2019-09-30 01:20:57', '2022-09-28 03:37:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (510, 'BASIC', '玉女煎合剂', '玉女煎合剂S', 'M125', 1, 2, 500.00, '{[!TTEyNQ!]}', '功能与主治：
清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。

主要组成：
石膏，熟地黄，麦冬，知母，牛膝。', 5, 1, 1, 0, -1446.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '玉女煎合剂', '清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。', '2019-09-30 01:22:32', '2022-09-22 01:16:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (511, 'BASIC', '四君子合剂', '四君子合剂S', 'M126', 1, 2, 500.00, '{[!TTEyNg!]}', '功能与主治：
益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。

主要组成：
党参，白术，茯苓，甘草。', 5, 1, 1, 0, -1225.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '四君子合剂', '益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。', '2019-09-30 01:24:07', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (512, 'BASIC', '平胃合剂', '平胃合剂S', 'M128', 1, 2, 500.00, '{[!TTEyOA!]}', '功能与主治：
行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。

主要组成：
苍术，陈皮，炙甘草等。', 5, 1, 1, 0, -5576.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '平胃合剂', '行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。', '2019-09-30 01:25:34', '2022-09-28 06:39:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (513, 'BASIC', '开胃消食合剂', '开胃消食合剂S', 'M130', 1, 2, 500.00, '{[!TTEzMA!]}', '功能与主治：
开胃消食。小儿厌食症，食欲不振，消化不良。

主要组成：
神曲，麦芽，山楂，槟榔，陈皮，木香，炙甘草。', 4, 1, 1, 0, -1123.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '开胃消食合剂', '开胃消食。小儿厌食症，食欲不振，消化不良。', '2019-09-30 01:34:12', '2022-09-09 06:00:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (514, 'BASIC', '杞菊地黄合剂', '杞菊地黄合剂', 'M131', 1, 2, 500.00, '{[!TTEzMQ!]}', '功能与主治：
滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。

主要组成：
杞子，菊花，熟地，山茱肉，淮山，丹皮，泽泻，茯苓。', 7, 1, 1, 0, -2621.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '杞菊地黄合剂', '滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。', '2019-09-30 01:38:18', '2022-09-28 05:18:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (515, 'BASIC', '附子理中合剂', '附子理中合剂', 'M132', 1, 2, 500.00, '{[!TTEzMg!]}', '功能与主治：
温中健脾。用于脾胃虚寒，脘腹冷痛，呕吐泄泻，手足不温等症。

主要组成：
肉桂，干姜，白术，党参，炙甘草，附子等。', 7, 1, 1, 0, -2058.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '附子理中合剂', '温中健脾。用于脾胃虚寒，脘腹冷痛，呕吐泄泻，手足不温等症。', '2019-09-30 01:39:30', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (516, 'BASIC', '附桂八味合剂', '附桂八味合剂', 'M133', 1, 2, 500.00, '{[!TTEzMw!]}', '功能与主治：
温补肾阳。用于肾阳不足，腰痛脚软，下身冷感，少腹拘急，小便不利或反多。

主要组成：
肉桂，熟地，山茱萸，淮山，茯苓，泽泻，丹皮等。', 7, 1, 1, 0, -2810.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '附桂八味合剂', '温补肾阳。用于肾阳不足，腰痛脚软，下身冷感，少腹拘急，小便不利或反多。', '2019-09-30 01:40:51', '2022-09-28 06:37:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (517, 'BASIC', '芍药甘草合剂', '芍药甘草合剂', 'M134', 1, 2, 500.00, '{[!TTEzNA!]}', '功能与主治：
疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。

主要组成：
白芍，赤芍，甘草。', 6, 1, 1, 0, -1905.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '芍药甘草合剂', '疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。', '2019-09-30 01:42:12', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (518, 'BASIC', '芳香化湿合剂', '芳香化湿合剂', 'M135', 1, 2, 500.00, '{[!TTEzNQ!]}', '功能与主治：
胃脘痛，慢性胃炎，食积，消化不良。

主要组成：
广藿香，胶枳寅，神曲，苏梗，姜半夏，广陈皮，云茯苓，炙甘草，佛手，姜竹茹，芦根。', 7, 1, 1, 0, -1096.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '芳香化湿合剂', '胃脘痛，慢性胃炎，食积，消化不良。', '2019-09-30 01:43:21', '2022-09-19 04:59:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (519, 'BASIC', '金樱缩泉合剂', '金樱缩泉合剂', 'M136', 1, 2, 500.00, '{[!TTEzNg!]}', '功能与主治：
温肾祛寒，缩尿止遗，补肾，固精，止遗。主治下元虚冷引起的小便频数，夜尿多溺，遗尿失禁，早泻及腰膝冷痛诸症。

主要组成：
金樱子，益智仁，山药，补骨脂，肉蓰蓉，桑螵蛸。', 8, 1, 1, 0, -1175.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '金樱缩泉合剂', '温肾祛寒，缩尿止遗，补肾，固精，止遗。主治下元虚冷引起的小便频数，夜尿多溺，遗尿失禁，早泻及腰膝冷痛诸症。', '2019-09-30 01:44:53', '2022-09-22 07:47:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (520, 'BASIC', '吴茱萸合剂', '吴茱萸合剂', 'M137', 1, 2, 500.00, '{[!TTEzNw!]}', '功能与主治：
脾胃虚寒，巅顶头痛，偏头痛，干呕吐涎。

主要组成：
吴茱萸，党参，生姜，大枣。', 7, 1, 1, 0, -861.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '吴茱萸合剂', '脾胃虚寒，巅顶头痛，偏头痛，干呕吐涎。', '2019-09-30 01:45:50', '2022-09-24 13:04:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (521, 'BASIC', '香砂六君子合剂', '香砂六君子合剂', 'M138', 1, 2, 500.00, '{[!TTEzOA!]}', '功能与主治：
理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。

主要组成：
川木香，砂仁，党参，法夏，白术，茯苓，陈皮，大枣，生姜，甘草等。', 9, 1, 1, 0, -4864.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '香砂六君子合剂', '理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。', '2019-09-30 01:54:28', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (522, 'BASIC', '济生肾气合剂', '济生肾气合剂', 'M139', 1, 2, 500.00, '{[!TTEzOQ!]}', '功能与主治：
温补壮阳，化气行血。用治体虚，肾阳不足，腰重脚踵水肿，腰酸腿软，小便不利，尿频量少，痰多喘咳等症。

主要组成：
桂枝，熟地，山茱萸，山药，茯苓，丹皮，牛膝，车前子。', 9, 1, 1, 0, -2211.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '济生肾气合剂', '温补壮阳，化气行血。用治体虚，肾阳不足，腰重脚踵水肿，腰酸腿软，小便不利，尿频量少，痰多喘咳等症。', '2019-09-30 01:55:49', '2022-09-28 05:18:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (523, 'BASIC', '参灵五子合剂', '参灵五子合剂', 'M140', 1, 2, 500.00, '{[!TTE0MA!]}', '功能与主治：
滋补肝肾，养阴益精。用于下元亏损，未老先衰，肾阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。

主要组成：
枸杞子，菟丝子，车前子，覆盆子，党参，五味子，淫羊藿。', 8, 1, 1, 0, -1880.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '参灵五子合剂', '滋补肝肾，养阴益精。用于下元亏损，未老先衰，肾阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。', '2019-09-30 01:57:10', '2022-09-26 07:55:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (524, 'BASIC', '参苓白术合剂', '参苓白术合剂', 'M141', 1, 2, 500.00, '{[!TTE0MQ!]}', '功能与主治：
补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。

主要组成：
人参，白术，茯苓，甘草，山药，白扁豆，莲子，砂仁，薏苡仁，桔梗。', 8, 1, 1, 0, -4258.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '参苓白术合剂', '补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。', '2019-09-30 01:58:33', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (525, 'BASIC', '保和合剂', '保和合剂', 'M143', 1, 2, 500.00, '{[!TTE0Mw!]}', '功能与主治：
消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。

主要组成：
山楂，陈皮，神曲，连翘，麦芽，莱菔子，茯苓，半夏。', 9, 1, 1, 0, -2275.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '保和合剂', '消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。', '2019-09-30 01:59:32', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (526, 'BASIC', '理中合剂', '理中合剂', 'M146', 1, 2, 500.00, '{[!TTE0Ng!]}', '功能与主治：
温中健脾，益气怯寒。用于脾胃虚寒症，阳虚失血，腹痛，泄泻清稀，呕吐或腹满食少诸症。

主要组成：
党参，干姜，炙甘草，白术。', 11, 1, 1, 0, -953.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '理中合剂', '温中健脾，益气怯寒。用于脾胃虚寒症，阳虚失血，腹痛，泄泻清稀，呕吐或腹满食少诸症。', '2019-09-30 22:43:43', '2022-09-27 01:40:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (527, 'BASIC', '旋覆代赭合剂', '旋覆代赭合剂', 'M147', 1, 2, 500.00, '{[!TTE0Nw!]}', '功能与主治：
胃虚痰阻，胃气上逆，嚏气呕恶，慢性胃炎。

主要组成：
旋覆花，党参，炙甘草，制半夏，大枣，生姜等。', 11, 1, 1, 0, -1740.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '旋覆代赭合剂', '胃虚痰阻，胃气上逆，嚏气呕恶，慢性胃炎。', '2019-09-30 22:52:13', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (528, 'BASIC', '萆解分清合剂', '萆解分清合剂', 'M148', 1, 2, 500.00, '{[!TTE0OA!]}', '功能与主治：
温肾利湿，分清去浊。用于膀胱炎，尿道炎，小便频数，尿液如奔，淋漓不清。

主要组成：
萆解，乌药，石菖蒲，甘草，益母草，茯苓。', 11, 1, 1, 0, -1642.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '萆解分清合剂', '温肾利湿，分清去浊。用于膀胱炎，尿道炎，小便频数，尿液如奔，淋漓不清。', '2019-09-30 22:56:06', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (529, 'BASIC', '滋阴地黄合剂', '滋阴地黄合剂S', 'M151', 1, 2, 500.00, '{[!TTE1MQ!]}', '功能与主治:
滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。

主要组成:
熟地，淮山，山茱萸，泽泻，丹皮，知母，茯苓。', 12, 1, 1, 0, -68.000000, 0, 2, 1, 0, 27.000000, null, 10, 10, 10, 10, '滋阴地黄合剂', '滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。', '2019-09-30 23:00:31', '2022-07-28 06:35:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (530, 'BASIC', '上中下通用痛风合剂', '上中下通用痛风合剂S', 'M152', 1, 2, 500.00, '{[!TTE1Mg!]}', '功能与主治：
燥湿清热，活血止痛。用于治风湿热痹，上下肢关节伸展不舒，周身骨节疼痛。

主要组成：
苍术，神曲，桂枝，姜活，桃仁，川芎，防己，白芷，红花，龙胆草，胆南星等。', 3, 1, 1, 0, -1788.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '上中下通用痛风合剂', '燥湿清热，活血止痛。用于治风湿热痹，上下肢关节伸展不舒，周身骨节疼痛。', '2019-09-30 23:02:48', '2022-09-19 08:14:28', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (531, 'BASIC', '五藤合剂', '五藤合剂S', 'M153', 1, 2, 500.00, '{[!TTE1Mw!]}', '功能与主治：
活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。

主要组成：
络石藤，鸡血藤，红花，桃仁，海风藤，伸筋藤，红藤，当归，川芎，赤芍，大血藤。', 4, 1, 1, 0, -2409.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '五腾合剂', '活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。', '2019-09-30 23:06:50', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (532, 'BASIC', '关节骨痛合剂', '关节骨痛合剂', 'M154', 1, 2, 500.00, '{[!TTE1NA!]}', '关节骨痛合剂', 6, 1, 1, 0, -452.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '关节骨痛合剂', null, '2019-09-30 23:08:12', '2022-09-19 08:14:28', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (533, 'BASIC', '当归拈痛合剂', '当归拈痛合剂', 'M155', 1, 2, 500.00, '{[!TTE1NQ!]}', '功能与主治：
祛风燥湿，和血止痛。用于急性关节红脾骨痛，湿热，疮疡，肩背沉重，肢节疼痛，胸胁不利等症。

主要组成：
当归，防风，泽泻，龙腧草，知母，姜活，升麻，茵陈，白术，甘草，苍术，猪苓，黄芩，苦参。', 6, 1, 1, 0, -983.000000, 0, 2, 1, 0, 35.000000, null, 10, 10, 10, 10, '当归拈痛合剂', '祛风燥湿，和血止痛。用于急性关节红脾骨痛，湿热，疮疡，肩背沉重，肢节疼痛，胸胁不利等症。', '2019-09-30 23:09:26', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (534, 'BASIC', '当归四逆合剂', '当归四逆合剂', 'M156', 1, 2, 500.00, '{[!TTE1Ng!]}', '功能与主治：
用于寒凝经脉，手足厥冷，肢体痹痛等症。

主要组成：
当归，桂枝，白芍，大枣，炙甘草等。', 6, 1, 1, 0, -1527.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '当归四逆合剂', '用于寒凝经脉，手足厥冷，肢体痹痛等症。', '2019-09-30 23:10:27', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (535, 'BASIC', '肩痹合剂', '肩痹合剂', 'M157', 1, 2, 500.00, '{[!TTE1Nw!]}', '功能与主治：
上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。

主要组成：
姜活，防风，当归，桑枝，猪签草，鸡血藤，姜黄，赤芍，透骨草，鹿含草等。', 8, 1, 1, 0, -1824.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '肩痹合剂', '上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。', '2019-09-30 23:11:38', '2022-09-28 06:39:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (536, 'BASIC', '狗脊合剂', '狗脊合剂', 'M158', 1, 2, 500.00, '{[!TTE1OA!]}', '功能与主治：
肾虚，腰膝酸软，风湿痹痛，四肢屈伸不利，肢体麻木，足胫浮肿。

主要组成：
狗脊，当归，海风藤，桂枝，杜仲，川牛膝，木瓜，熟地，桑叶，秦艽。', 8, 1, 1, 0, -1998.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '狗脊合剂', '肾虚，腰膝酸软，风湿痹痛，四肢屈伸不利，肢体麻木，足胫浮肿。', '2019-10-01 01:02:12', '2022-09-22 07:51:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (537, 'BASIC', '风湿止痛合剂', '风湿止痛合剂S', 'M159', 1, 2, 500.00, '{[!TTE1OQ!]}', '功能与主治：
祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。

主要组成：
独活，姜活，牛膝，木瓜，黄芩，防风，豨莶草，臭梧桐，粉萆解。', 4, 1, 1, 0, -1297.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '风湿止痛合剂', '祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。', '2019-10-01 01:08:44', '2022-09-26 03:24:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (538, 'BASIC', '独活寄生合剂', '独活寄生合剂', 'M160', 1, 2, 500.00, '{[!TTE2MA!]}', '功能与主治：
祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。

主要组成：
杜仲，独活，桑寄生，秦艽，川牛膝，茯苓，肉桂，川芎，党参，防风，白芍，熟地，当归等。', 9, 1, 1, 0, -6259.000000, 0, 2, 1, 0, 33.000000, null, 10, 10, 10, 10, '独活寄生合剂', '祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。', '2019-10-01 01:10:40', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (539, 'BASIC', '姜活胜湿合剂', '姜活胜湿合剂', 'M161', 1, 2, 500.00, '{[!TTE2MQ!]}', '功能与主治：
发汗祛风胜湿。用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。

主要组成：
姜活，独活，防风，炙甘草，川芎，蒿本，蔓荆子。', 9, 1, 1, 0, -1846.000000, 0, 2, 1, 0, 36.500000, null, 10, 10, 10, 10, '姜活胜湿合剂', '发汗祛风胜湿。 用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。', '2019-10-01 01:12:14', '2022-09-27 07:39:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (540, 'BASIC', '活络效灵合剂', '活络效灵合剂', 'M162', 1, 2, 500.00, '{[!TTE2Mg!]}', '功能与主治：
活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。

主要组成：
丹参，当归，乳香，没药，桃仁，赤芍等。', 9, 1, 1, 0, -2589.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '活络效灵合剂', '活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。', '2019-10-01 01:13:23', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (541, 'BASIC', '桑枝虎杖合剂', '桑枝虎杖合剂', 'M164', 1, 2, 500.00, '{[!TTE2NA!]}', '功能与主治：
祛风除湿，舒筋活络。用于四肢酸痛，肢体伸展不利，游走性骨节痹痛。

主要组成：
桑枝，虎杖，猪签草，当归，姜活，臭梧桐，伸筋草。', 10, 1, 1, 0, -4208.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '桑枝虎杖合剂', '祛风除湿，舒筋活络。用于四肢酸痛，肢体伸展不利，游走性骨节痹痛。', '2019-10-01 01:14:56', '2022-09-27 07:17:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (542, 'BASIC', '舒筋合剂', '舒筋合剂', 'M168', 1, 2, 500.00, '{[!TTE2OA!]}', '功能与主治：
舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。

主要组成：
姜黄，炙甘草，姜活，白术，海桐皮，当归，生姜，赤芍。', 12, 1, 1, 0, -2329.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '舒筋合剂', '舒筋活血，益肝活络。 用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。', '2019-10-01 01:16:11', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (543, 'BASIC', '舒颈合剂', '舒颈合剂S', 'M171', 1, 2, 500.00, '{[!TTE3MQ!]}', '功能与主治：
舒筋活络，颈项转折不灵，颈项强硬，颈椎综合症。

主要组成：
桂枝，葛根，白芍，制半夏，当归，丹参，姜活，大枣，赤芍，鸡血藤，白芷，甘草等。', 1, 0, 1, 0, -49.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '舒颈合剂', '舒筋活络，颈项转折不灵，颈项强硬，颈椎综合症。', '2019-10-01 01:17:48', '2021-11-02 08:55:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (544, 'BASIC', '二母宁嗽合剂', '二母宁嗽合剂S', 'M174', 1, 2, 500.00, '{[!TTE3NA!]}', '功能与主治：
清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。

主要组成：
陈皮，五味子，枳实，生姜，茯苓，甘草，石膏，知母，川贝母，栀子，黄芩，瓜蒌皮，桑白皮。', 2, 1, 1, 0, -781.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '二母宁嗽合剂', '清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。', '2019-10-01 01:38:57', '2022-09-28 06:39:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (545, 'BASIC', '小儿止咳糖剂', '小儿止咳糖剂', 'M175', 1, 2, 500.00, '{[!TTE3NQ!]}', '功能与主治：
祛痰镇咳。用于小儿外感咳嗽痰多，咽痒喷嚏，鼻塞流涕，支气管炎等症。

主要组成：
桔梗，甘草，橙皮酊，川贝母。', 3, 1, 1, 0, -674.000000, 0, 2, 1, 0, 28.500000, null, 10, 10, 10, 10, '小儿止咳糖剂', '祛痰镇咳。用于小儿外感咳嗽痰多，咽痒喷嚏，鼻塞流涕，支气管炎等症。', '2019-10-01 01:40:31', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (546, 'BASIC', '小青龙合剂', '小青龙合剂S', 'M176', 1, 2, 500.00, '{[!TTE3Ng!]}', '功能与主治：
解表散寒，温肺化软。用于支气管炎之咳喘，百日咳，发热，恶寒，头痛等症。

主要组成：
桂枝，白术，五味子，制半夏，干姜，甘草等。', 3, 1, 1, 0, -2392.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '小青龙合剂', '解表散寒，温肺化软。用于支气管炎之咳喘，百日咳，发热，恶寒，头痛等症。', '2019-10-01 01:41:59', '2022-09-28 06:19:48', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (547, 'BASIC', '千金苇茎合剂', '千金苇茎合剂S', 'M177', 1, 2, 500.00, '{[!TTE3Nw!]}', '功能与主治：
清热化痰，活血祛瘀。用于咳嗽胸痛，发热，咳吐脓血臭痰，胸中甲错等。

主要组成：
芦根，薏苡仁，桃仁，冬瓜仁。', 3, 1, 1, 0, -427.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '千金苇茎合剂', '清热化痰，活血祛瘀。用于咳嗽胸痛，发热，咳吐脓血臭痰，胸中甲错等。', '2019-10-01 01:44:17', '2022-09-14 09:52:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (548, 'BASIC', '川贝枇杷合剂', '川贝枇杷合剂S', 'M178', 1, 2, 500.00, '{[!TTE3OA!]}', '功能与主治：
镇咳祛痰。用于感冒及支气管炎引起的咳嗽。

主要组成：
枇杷叶，川贝母，半夏，桔梗，杏仁，薄荷。', 3, 1, 1, 0, -591.000000, 0, 2, 1, 0, 28.000000, null, 10, 10, 10, 10, '川贝枇杷合剂', '镇咳祛痰。用于感冒及支气管炎引起的咳嗽。', '2019-10-01 01:59:46', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (549, 'BASIC', '止咳合剂', '止咳合剂', 'M179', 1, 2, 500.00, '{[!TTE3OQ!]}', '功能与主治：
止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。

主要组成：
荆芥，桔梗，甘草，陈皮，白部，白前。', 4, 1, 1, 0, -2944.000000, 0, 2, 1, 0, 28.000000, null, 10, 10, 10, 10, '止咳合剂', '止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。', '2019-10-01 02:01:08', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (550, 'BASIC', '泻白散合剂', '泻白散合剂', 'M180', 1, 2, 500.00, '{[!TTE4MA!]}', '功能与主治：
肺热咳喘，皮肤蒸热，嗮渐寒热。

主要组成：
桑白皮，地骨皮，甘草。', 8, 1, 1, 0, -116.000000, 0, 2, 1, 0, 25.000000, null, 10, 10, 10, 10, '泻白散合剂', '肺热咳喘，皮肤蒸热，嗮渐寒热。', '2019-10-01 02:02:26', '2022-09-12 06:19:42', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (551, 'BASIC', '止嗽散合剂', '止嗽散合剂S', 'M181', 1, 2, 500.00, '{[!TTE4MQ!]}', '功能与主治：
缓解积痰和咳嗽等症状。

主要组成：
荆芥，百部，紫苑，桔梗，陈皮，白前，甘草。', 4, 1, 1, 0, -1331.000000, 0, 2, 1, 0, 28.000000, null, 10, 10, 10, 10, '止嗽散合剂', '缓解积痰和咳嗽等症状。', '2019-10-01 02:03:41', '2022-09-28 08:42:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (552, 'BASIC', '化痰定喘合剂', '化痰定喘合剂S', 'M183', 1, 2, 500.00, '{[!TTE4Mw!]}', '功能与主治：
降气化痰，止咳平喘。主治脾胃虚弱，食欲不振，胸膈痞满，咳嗽川促，痰多胸 闷，上逆呕吐。

主要组成：
紫苏叶，白芥子，莱菔子，陈皮，茯苓，甘草，制半夏，杏仁等。', 4, 1, 1, 0, -1672.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '化痰定喘合剂', '降气化痰，止咳平喘。主治脾胃虚弱，食欲不振，胸膈痞满，咳嗽川促，痰多胸 闷，上逆呕吐。', '2019-10-01 23:57:44', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (553, 'BASIC', '半夏厚朴合剂', '半夏厚朴合剂S', 'M184', 1, 2, 500.00, '{[!TTE4NA!]}', '功能与主治：
梅核气，喉肿有物感，胸闷气急，中脘痞满。

主要组成：
制半夏，茯苓，生姜，苏叶等。', 5, 1, 1, 0, -4959.000000, 0, 2, 1, 0, 34.500000, null, 10, 10, 10, 10, '半夏厚朴合剂', '梅核气，喉肿有物感，胸闷气急，中脘痞满。', '2019-10-02 00:01:42', '2022-09-26 07:54:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (554, 'BASIC', '白果定喘合剂', '白果定喘合剂S', 'M185', 1, 2, 500.00, '{[!TTE4NQ!]}', '功能与主治：
宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。

主要组成：
白果肉，款冬花，黄芩，苏子，桑白皮，法夏，甘草，杏仁等，', 5, 1, 1, 0, -1329.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '白果定喘合剂', '宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。', '2019-10-02 00:08:48', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (555, 'BASIC', '苏子降气合剂', '苏子降气合剂', 'M187', 1, 2, 500.00, '{[!TTE4Nw!]}', '功能与主治：
降气平喘，温化寒痰。主治痰延壅盛，咳喘气短，胸膈满闷，咽喉不利等诸症。

主要组成：
苏子，当归，前胡，陈皮，制半夏，肉桂等。', 7, 1, 1, 0, -827.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '苏子降气合剂', '降气平喘，温化寒痰。主治痰延壅盛，咳喘气短，胸膈满闷，咽喉不利等诸症。', '2019-10-02 00:10:31', '2022-09-27 03:39:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (557, 'BASIC', '纳气平喘合剂', '纳气平喘合剂', 'M188', 1, 2, 500.00, '{[!TTE4OA!]}', '纳气平喘合剂', 7, 1, 1, 0, -704.000000, 0, 2, 1, 0, 37.500000, null, 10, 10, 10, 10, '纳气平喘合剂', null, '2019-10-02 00:11:47', '2022-09-27 01:56:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (558, 'BASIC', '桑杏合剂', '桑杏合剂', 'M189', 1, 2, 500.00, '{[!TTE4OQ!]}', '功能与主治：
轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。

主要组成：
桑叶，北杏仁，南沙参，浙贝母，淡豆豉，山栀子，淡竹叶，天花粉，芦根。', 10, 1, 1, 0, -1955.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '桑杏合剂', '轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。', '2019-10-02 00:14:54', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (559, 'BASIC', '苓桂术甘合剂', '苓桂术甘合剂', 'M191', 1, 2, 500.00, '{[!TTE5MQ!]}', '功能与主治：
胸胁胀满，眩景心悸，大便溏，短气肺咳等症。

主要组成：
茯苓，桂枝，白术，甘草。', 8, 1, 1, 0, -752.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '苓桂术甘合剂', '胸胁胀满，眩景心悸，大便溏，短气肺咳等症。', '2019-10-02 00:16:08', '2022-09-23 01:19:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (560, 'BASIC', '浙贝合剂', '浙贝合剂S', 'M193', 1, 2, 500.00, '{[!TTE5Mw!]}', '功能与主治：
清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。

主要组成：
浙贝母，桔梗，杏仁，枇杷叶，黄芩，麦冬，甘草。', 10, 1, 1, 0, -1599.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '浙贝合剂', '清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。', '2019-10-02 00:17:17', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (561, 'BASIC', '养阴清肺合剂', '养阴清肺合剂', 'M195', 1, 2, 500.00, '{[!TTE5NQ!]}', '功能与主治：
养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。

主要组成：
生地，麦冬，白芍，浙贝母，牡丹皮，玄参，甘草，薄荷。', 9, 1, 1, 0, -5422.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '养阴清肺合剂', '养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。', '2019-10-02 00:19:15', '2022-09-28 06:39:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (562, 'BASIC', '增液合剂', '增液合剂', 'M198', 1, 2, 500.00, '{[!TTE5OA!]}', '功能与主治：
滋阴，凉血，增液。主治阴虚火旺，津少口渴，热病伤阴。

主要组成
玉竹，玄参，北沙参，生地，麦冬，花粉，甘草，石斛，枳实。', 15, 1, 1, 0, -1936.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '增液合剂', '滋阴，凉血，增液。主治阴虚火旺，津少口渴，热病伤阴。', '2019-10-02 00:20:23', '2022-09-23 09:37:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (563, 'BASIC', '清燥救肺合剂', '清燥救肺合剂', 'M199', 1, 2, 500.00, '{[!TTE5OQ!]}', '功能与主治：
清燥润肺。适用于燥热伤肺，气短，干咳无痰或少痰，口鼻咽喉干燥。

主要组成：
桑叶，石膏，麦冬，枇杷叶，党参，北杏仁，阿胶，甘草。', 11, 1, 1, 0, -520.000000, 0, 2, 1, 0, 77.000000, null, 10, 10, 10, 10, '清燥救肺合剂', '清燥润肺。适用于燥热伤肺，气短，干咳无痰或少痰，口鼻咽喉干燥。', '2019-10-02 00:21:49', '2022-09-26 02:50:07', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (564, 'BASIC', '麻杏石甘合剂', '麻杏石甘合剂', 'M200', 1, 2, 500.00, '{[!TTIwMA!]}', '功能与主治：
宣泻郁气，淸肺平喘。用于治外感风邪，身热不解(有汗，无汗均可用），殻逆气急，鼻煽口渴等诸症。

主要组成：
杏仁，炙甘草，石膏等。', 11, 1, 1, 0, -3804.000000, 0, 2, 1, 0, 29.000000, null, 10, 10, 10, 10, '麻杏石甘合剂', '宣泻郁气，淸肺平喘。用于治外感风邪，身热不解(有汗，无汗均可用），殻逆气急，鼻煽口渴等诸症。', '2019-10-02 00:23:11', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (565, 'BASIC', '铁笛合剂', '铁笛合剂', 'M202', 1, 2, 500.00, '{[!TTIwMg!]}', '功能与主治：
急慢性咽喉炎。用于咽干喉瘠，声嘶失音，声带发炎，久咳失声。

主要组成：
诃子，木蝴蝶，玄参，桔梗，茯苓，麦冬，青果，甘草，瓜蒌皮。', 10, 1, 1, 0, -562.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '铁笛合剂', '急慢性咽喉炎。用于咽干喉瘠，声嘶失音，声带发炎，久咳失声。', '2019-10-02 00:24:38', '2022-09-09 06:00:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (566, 'BASIC', '皮肤止痒合剂', '皮肤止痒合剂S', 'M211', 1, 2, 500.00, '{[!TTIxMQ!]}', '功能与主治：
清热燥湿，祛风解毒。用于急慢性湿疹，风疹，阴囊炎等症。

主要组成：
菊花，丹皮，茯苓，黄芩，苦参，通草，蝉蜕，防风，栀子，赤芍，地肤子，白疾藜。', 5, 1, 1, 0, -780.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '皮肤止痒合剂', '清热燥湿，祛风解毒。用于急慢性湿疹，风疹，阴囊炎等症。', '2019-10-02 00:26:16', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (567, 'BASIC', '舒颈葛根合剂', '舒颈葛根合剂S', 'M212', 1, 2, 500.00, '{[!TTIxMg!]}', '功能与主治：
舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。

主要组成：
白芷，丹参，姜活，桂枝，赤芍，大枣，白芍，甘草，当归，鸡血藤，葛根等。', 12, 1, 1, 0, -4673.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '舒颈葛根合剂', '舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。', '2019-10-02 00:27:47', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (568, 'BASIC', '丹参合剂', '丹参合剂S', 'M214', 1, 2, 500.00, '{[!TTIxNA!]}', '功能与主治：
理气活血。用于血瘀气滞，心腹胃膈疼痛。

主要组成：
丹参，砂仁，檀香。', 4, 1, 1, 0, -1387.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '丹参合剂', '理气活血。用于血瘀气滞，心腹胃膈疼痛。', '2019-10-02 00:30:09', '2022-09-26 07:54:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (569, 'BASIC', '流感合剂', '流感合剂', 'M217', 1, 2, 500.00, '{[!TTIxNw!]}', '功能与主治：
流感发热，咳嗽喷嚏，头痛，喉痛

主要组成：
紫花地丁，贯众，荆芥，大青叶，车前子，薄荷。', 10, 1, 1, 0, -867.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '流感合剂', '流感发热，咳嗽喷嚏，头痛，喉痛', '2019-10-02 00:31:29', '2022-09-27 01:36:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (570, 'BASIC', '八珍合剂', '八珍合剂', 'M221', 1, 2, 500.00, '{[!TTIyMQ!]}', '功能与主治:
平补血气。用于气弱血亏，型容憔悴，四肢倦怠，妇女月经不调，产后病后衰弱。

主要组成:
熟地黄，白芍，当归，川芎， 党参，白术，茯苓，炙甘草。', 2, 1, 1, 0, -3813.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '八珍合剂', '平补血气。用于气弱血亏，型容憔悴，四肢倦怠，妇女月经不调，产后病后衰弱。', '2019-10-02 00:37:13', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (571, 'BASIC', '七味头晕方合剂', '七味头晕方合剂', 'M223', 1, 2, 500.00, '{[!TTIyMw!]}', '功能与主治:
调和气血，祛风止眩。用于气血失调引起之头痛头晕。

主要组成:
茺蔚子，川芎，菊花，生地，桑叶，蔓荆子，甘草。', 2, 1, 1, 0, -2252.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '七味头晕方合剂', '调和气血，祛风止眩。用于气血失调引起之头痛头晕。', '2019-10-02 00:58:37', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (572, 'BASIC', '壮腰益精合剂', '壮腰益精合剂', 'M224', 1, 2, 500.00, '{[!TTIyNA!]}', '功能与主治：
壮腰健肾。 

主要组成：
枸杞子，淫羊藿，巴戟天，肉蓰蓉。', 6, 1, 1, 0, -1017.000000, 0, 2, 1, 0, 38.000000, null, 10, 10, 10, 10, '壮腰益精合剂', '壮腰健肾。', '2019-10-02 01:00:30', '2022-09-15 07:58:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (573, 'BASIC', '茵陈篙汤合剂', '茵陈篙汤合剂', 'M227', 1, 2, 500.00, '{[!TTIyNw!]}', '功能与主治：
清热利湿。用于大便不通，湿热黄疸，发热，口渴，小便短赤，腹微胀，渴欲饮水，口内炎，舌上有黄苔者。

主要组成：
茵陈蒿，栀子，大黄。', 9, 1, 1, 0, -925.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '茵陈篙汤合剂', '清热利湿。用于大便不通，湿热黄疸，发热，口渴，小便短赤，腹微胀，渴欲饮水，口内炎，舌上有黄苔者。', '2019-10-02 01:02:50', '2022-09-28 03:29:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (574, 'BASIC', '宽膈去郁汤合剂', '宽膈去郁汤合剂', 'M228', 1, 2, 500.00, '{[!TTIyOA!]}', '功能与主治：
用于情志抑郁，胸闷，心烦，自感内热，梅核气。

主要组成：
陈皮，茯苓，苍术，川芎，香附，砂仁，甘草，栀子，柴胡，生姜，白术，酸枣仁，石菖蒲。', 10, 1, 1, 0, -1256.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '宽膈去郁汤合剂', '用于情志抑郁，胸闷，心烦，自感内热，梅核气。', '2019-10-02 01:04:13', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (575, 'BASIC', '咳喘灵合剂', '咳喘灵合剂', 'M230', 1, 2, 500.00, '{[!TTIzMA!]}', '功能与主治：
降气化痰，止咳平喘。用于痰多作喘，肺气不畅。

主要组成：
胆南星，桔梗，川贝母，杏仁，瓜蒌皮，黄芩，陈皮，枳壳，茯苓，莱服子，苏子，板蓝根，款冬花，甘草，石菖蒲。', 9, 1, 1, 0, -1553.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '咳喘灵合剂', '降气化痰，止咳平喘。用于痰多作喘，肺气不畅。', '2019-10-02 01:08:50', '2022-09-22 02:18:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (576, 'BASIC', '小儿喜食合剂', '小儿喜食合剂', 'M231', 1, 2, 500.00, '{[!TTIzMQ!]}', '功能与主治：
开胃健脾，养阴润燥。用于脾弱不健，肠胃燥热，食欲减退，纳呆。

主要组成：
南沙参，乌梅，谷芽，麦芽，玉竹，生地，甘草，地骨皮，淮山，莱服子等。', 3, 1, 1, 0, -474.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '小儿喜食合剂', '开胃健脾，养阴润燥。用于脾弱不健，肠胃燥热，食欲减退，纳呆。', '2019-10-02 01:10:18', '2022-08-10 06:42:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (577, 'BASIC', '平咳糖浆', '平咳糖浆', 'M232', 1, 2, 500.00, '{[!TTIzMg!]}', '功能与主治：
祛痰镇咳。用于感冒及其它呼吸道感染引起的咳嗽，多痰气急等症。

主要组成：
枇杷叶，百部，陈皮，杏仁，甘草，薄荷。', 4, 1, 1, 0, -645.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '平咳糖浆', '祛痰镇咳。用于感冒及其它呼吸道感染引起的咳嗽，多痰气急等症。', '2019-10-02 01:11:21', '2022-09-19 04:59:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (578, 'BASIC', '二妙散合剂', '二妙散合剂S', 'M233', 1, 2, 500.00, '{[!TTIzMw!]}', '功能与主治：
湿热下注引起的腰膝关节痛，湿疮，脚气肿痛。

主要组成：
苍术，龙胆草。', 2, 1, 1, 0, -1109.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '二妙散合剂', '湿热下注引起的腰膝关节痛，湿疮，脚气肿痛。', '2019-10-02 01:17:41', '2022-09-26 05:01:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (579, 'BASIC', '强肝合剂', '强肝合剂', 'M234', 1, 2, 500.00, '{[!TTIzNA!]}', '功能与主治：
身重体倦，食少纳呆，胸胁胀满，恶心厌油。

主要组成：
龙胆草，当归，栀子，丹参，败酱草，郁金，茯苓，甘草，白术，茵陈，白芍，金银花。', 12, 1, 1, 0, -203.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '强肝合剂', '身重体倦，食少纳呆，胸胁胀满，恶心厌油。', '2019-10-02 01:19:15', '2022-09-14 03:44:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (580, 'BASIC', '舒筋立安合剂', '舒筋立安合剂S', 'M235', 1, 2, 500.00, '{[!TTIzNQ!]}', '功能与主治：
急慢性四肢关节炎，麻痹不仁，周身骨痛，鹤膝风等症。

主要组成：
防风，独活，怀牛膝，白芷，生地，胆南星，茯苓，苍术，姜活，川木瓜，白芍，桃仁，秦艽，红花，杜仲等。', 12, 1, 1, 0, -2182.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '舒筋立安合剂', '急慢性四肢关节炎，麻痹不仁，周身骨痛，鹤膝风等症。', '2019-10-02 01:21:43', '2022-09-19 08:16:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (581, 'BASIC', '除湿合剂', '除湿合剂', 'M236', 1, 2, 500.00, '{[!TTIzNg!]}', '功能与主治：
治湿脚气，胸闷嚏气，身重纳呆，以及湿郁偏重症候。

主要组成：
制半夏，藿香，苍术，陈皮，茯苓，甘草，白术。', 9, 1, 1, 0, -31.000000, 0, 2, 1, 0, 32.000000, null, 10, 10, 10, 10, '除湿合剂', '治湿脚气，胸闷嚏气，身重纳呆，以及湿郁偏重症候。', '2019-10-02 01:26:59', '2022-09-14 03:44:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (582, 'BASIC', '益母胜金合剂', '益母胜金合剂', 'M237', 5, 2, 500.00, '{[!TTIzNw!]}', '益母胜金合剂', 10, 1, 1, 0, -256.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '益母胜金合剂', null, '2019-10-02 01:28:04', '2022-08-09 12:03:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (583, 'BASIC', '通窍活血合剂', '通窍活血合剂', 'M239', 1, 2, 500.00, '{[!TTIzOQ!]}', '功能与主治：
血络瘀阻引起的头痛，脱发，鼻窍不通，酒糟鼻，白癫风。

主要组成：
赤芍，川贝，桃仁，红花，红枣，生姜，葸白。', 10, 1, 1, 0, -274.000000, 0, 2, 1, 0, 35.000000, null, 10, 10, 10, 10, '通窍活血合剂', '血络瘀阻引起的头痛，脱发，鼻窍不通，酒糟鼻，白癫风。', '2019-10-02 01:29:14', '2022-09-28 05:18:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (584, 'BASIC', '芡实合剂', '芡实合剂', 'M240', 1, 2, 500.00, '{[!TTI0MA!]}', '芡实合剂', 7, 1, 1, 0, -1214.000000, 0, 2, 1, 0, 30.500000, null, 10, 10, 10, 10, '芡实合剂', null, '2019-10-02 01:33:39', '2022-09-26 07:55:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (585, 'BASIC', '大青蚤休合剂', '大青蚤休合剂', 'M241', 1, 2, 500.00, '{[!TTI0MQ!]}', '功能与主治：
上呼吸道感染，急性扁桃体炎，咽干口渴。

主要组成：
大青叶，蚤休，紫苏叶，桔梗，玄参，甘草。', 3, 1, 1, 0, -2954.000000, 0, 2, 1, 0, 33.500000, null, 10, 10, 10, 10, '大青蚤休合剂', '上呼吸道感染，急性扁桃体炎，咽干口渴。', '2019-10-02 01:36:01', '2022-09-27 07:50:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (586, 'BASIC', '半枝莲合剂', '半枝莲合剂', 'M245', 1, 2, 500.00, '{[!TTI0NQ!]}', '功能与主治：
清热解毒。用于腹部不适，食欲减退，消瘦乏力，腹泻便血，光带脓液，直肠道疾病。

主要组成：
半枝莲，地榆，赤芍，白英，大血藤，忍冬藤，槐角，败酱草，白花蛇舌草等。', 5, 1, 1, 0, -846.000000, 0, 2, 1, 0, 29.500000, null, 10, 10, 10, 10, '半枝莲合剂', '清热解毒。用于腹部不适，食欲减退，消瘦乏力，腹泻便血，光带脓液，直肠道疾病。', '2019-10-02 01:36:55', '2022-09-28 05:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (587, 'BASIC', '参芪首乌合剂', '参芪首乌合剂', 'M246', 1, 2, 500.00, '{[!TTI0Ng!]}', '功能与主治：
部益肝肾，补气补血，润肺生津。用于肝肾不足，壮腰健胃，养血补颜。

主要组成：
党参，黄芪，首乌，金樱子，菟丝子，熟地，黄精。', 11, 1, 1, 0, -1216.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '参芪首乌合剂', '部益肝肾，补气补血，润肺生津。用于肝肾不足，壮腰健胃，养血补颜。', '2019-10-02 01:41:31', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (588, 'BASIC', '沙参麦冬合剂', '沙参麦冬合剂', 'M247', 1, 2, 500.00, '{[!TTI0Nw!]}', '功能与主治：
滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。

主要组成：
北沙参，玉竹，甘草，桑叶，麦冬，扁豆，天花粉。', 7, 1, 1, 0, -884.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '沙参麦冬合剂', '滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。', '2019-10-02 01:43:48', '2022-09-21 02:45:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (589, 'BASIC', '薏苡仁合剂', '薏苡仁合剂', 'M249', 1, 2, 500.00, '{[!TTI0OQ!]}', '功能与主治：
关节炎，风湿润痛，腰膝疼痛，筋络抽痛，撕纸麻痹。

主要组成：
当归，白术，白芍，薏苡仁，桂枝，甘草，生姜等。', 16, 1, 1, 0, -939.000000, 0, 2, 1, 0, 32.500000, null, 10, 10, 10, 10, '薏苡仁合剂', '关节炎，风湿润痛，腰膝疼痛，筋络抽痛，撕纸麻痹。', '2019-10-02 01:45:11', '2022-09-26 05:01:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (590, 'BASIC', '伤科乳香合剂', '伤科乳香合剂', 'M250', 1, 2, 500.00, '{[!TTI1MA!]}', '功能与主治：
铁打损伤，筋骨扭伤，积瘀肿痛。

主要组成：
白芍，瓜蒌皮，当归，青皮，银柴胡，川芎，乳香，桔梗，旋覆花，枳殻，茜草。', 6, 1, 1, 0, -1258.000000, 0, 2, 1, 0, 35.500000, null, 10, 10, 10, 10, '伤科乳香合剂', '铁打损伤，筋骨扭伤，积瘀肿痛。', '2019-10-02 01:47:22', '2022-09-23 09:27:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (591, 'BASIC', '和中消滞合剂', '和中消滞合剂', 'M259', 1, 2, 500.00, '{[!TTI1OQ!]}', '功能与主治：
脾胃虚弱，食积停滞，厌食呕恶，胸完痞汁，大便泄泻等症。

主要组成：
党参，白术，淮山，莲子，陈皮，半夏，谷芽，麦芽，山楂，砂仁，神曲，枳寅，丹皮。', 8, 1, 1, 0, -1511.000000, 0, 2, 1, 0, 35.500000, null, 10, 10, 10, 10, '和中消滞合剂', '脾胃虚弱，食积停滞，厌食呕恶，胸完痞汁，大便泄泻等症。', '2019-10-02 01:49:00', '2022-09-15 02:54:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (592, 'BASIC', '胃舒宁合剂', '胃舒宁合剂', 'M265', 1, 2, 500.00, '{[!TTI2NQ!]}', '功能与主治：
胃气痛，胃酸过多，消化不良，胃下垂，食欲不振，呕吐酸水，胃溃疡及十二指肠溃疡后之腹胸闷疼痛。

主要组成：
党参，茯苓，小茴香，陈皮，半夏，肉桂，广木香，白术，甘草，砂仁等。', 9, 1, 1, 0, -2600.000000, 0, 2, 1, 0, 32.000000, null, 10, 10, 10, 10, '胃舒宁合剂', '胃气痛，胃酸过多，消化不良，胃下垂，食欲不振，呕吐酸水，胃溃疡及十二指肠溃疡后之腹胸闷疼痛。', '2019-10-02 01:50:02', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (593, 'BASIC', '阳和合剂', '阳和合剂', 'M218', 1, 2, 500.00, '{[!TTIxOA!]}', '功能与主治：
疖疽流注，鹤膝风，脉管炎。

主要组成：
熟地黄，鹿角胶，白芥子，肉桂，甘草。', 6, 1, 1, 0, -40.000000, 0, 2, 1, 0, 31.000000, null, 10, 10, 10, 10, '阳和合剂', '疖疽流注，鹤膝风，脉管炎。', '2019-10-02 01:50:54', '2022-08-19 07:58:59', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (595, 'BASIC', '参苏饮合剂', '参苏饮合剂', 'M038', 1, 2, 500.00, '{[!TTAzOA!]}', '功能与主治：
益风解表，理气化痰。用于感冒风寒，头痛发热，恶寒咳嗽，呕吐。

主要组成：
紫苏叶，茯苓，党参，枳壳，葛根，桔梗，前胡，陈皮，半夏，甘草。', 8, 1, 1, 0, -16.000000, 0, 2, 1, 0, 28.000000, null, 10, 10, 10, 10, '参苏饮合剂', '益风解表，理气化痰。用于感冒风寒，头痛发热，恶寒咳嗽，呕吐。', '2019-10-02 01:52:15', '2022-09-08 03:17:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (596, 'BASIC', '目疾灵片', '目疾灵片', 'P001', 1, 3, 1000.00, '{[!UDAwMQ!]}', '目疾灵片', 5, 1, 1, 0, -774.000000, 0, 2, 1, 0, 84.000000, null, 10, 10, 10, 10, '目疾灵片', null, '2019-10-02 01:54:34', '2022-09-22 01:17:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (597, 'BASIC', '桑菊颗粒', '桑菊颗粒S', 'B001', 1, 4, 100.00, '{[!QjAwMQ!]}', '功能与主治:
疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。

主要组成:
桑叶，菊花，连翘，桔梗，华茎，甘草，杏仁，薄荷。', 10, 1, 1, 0, -10.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '桑菊颗粒', '疏风清热，宜肺止咳。用于外感风热，头痛发热，微汗出，咳嗽，口渴等症。', '2019-10-02 19:32:21', '2022-08-16 03:38:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (598, 'BASIC', '桃红四物颗粒', '桃红四物颗粒S', 'B002', 1, 4, 100.00, '{[!QjAwMg!]}', '功能与主治：
活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。

主要组成：
桃仁，当归，白芍，红花，川芎，熟地。', 10, 1, 1, 0, -13.000000, 0, 2, 1, 0, 41.000000, null, 10, 10, 10, 10, '桃红四物颗粒', '活血祛瘀。用于治血瘀所致之妇科病，中风后遗症，头晕肢痹。', '2019-10-02 19:39:48', '2022-06-27 03:55:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (599, 'BASIC', '复方杜仲颗粒', '复方杜仲颗粒S', 'B003', 1, 4, 100.00, '{[!QjAwMw!]}', '功能与主治：
活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。

主要组成：
杜仲，续断，生地，赤芍，当归，丹皮，桃仁，肉桂，乌药，姜黄。', 9, 1, 1, 0, null, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '复方杜仲颗粒', '活血祛瘀，通络止痛。用于腰膝酸痛，坐骨神经痛，慢性腰痛，头晕耳鸣等症。', '2019-10-02 19:46:47', '2021-11-02 06:17:42', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (600, 'BASIC', '复方浙贝颗粒', '复方浙贝颗粒S', 'B004', 1, 4, 100.00, '{[!QjAwNA!]}', '功能与主治：
清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。

主要组成：
浙贝，杏仁，知母，甘草，款冬花，五味子，桑白皮。', 10, 1, 1, 0, -3.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '复方浙贝颗粒', '清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。', '2019-10-02 19:48:38', '2022-07-12 14:49:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (602, 'BASIC', '复方辛夷颗粒', '复方辛夷颗粒S', 'B006', 1, 4, 100.00, '{[!QjAwNg!]}', '功能与主治:
清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。

主要组成:
川芎，白芷，菊花，前胡，石膏，生地，白术，薄荷，陈皮，茯苓，幸夷花，炙甘草。', 9, 1, 1, 0, -66.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '复方辛夷颗粒', '清肺通窍，散寒，祛风。主治肺气不利，头目眩晕，鼻塞声重等诸症。', '2019-10-02 19:59:04', '2022-07-07 05:13:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (603, 'BASIC', '四物颗粒', '四物颗粒S', 'B007', 1, 4, 100.00, '{[!QjAwNw!]}', '功能与主治：
补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。

主要组成：
当归，熟地，白芍，川芎。', 5, 1, 1, 0, -19.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '四物颗粒', '补血调经。用于贫血体弱，血虚血滞，脐腹作痛，崩中漏下，血瘕块硬等症。', '2019-10-02 20:00:21', '2022-09-15 02:54:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (604, 'BASIC', '风湿止痛颗粒', '风湿止痛颗粒S', 'B008', 1, 4, 100.00, '{[!QjAwOA!]}', '功能与主治：
祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。

主要组成：
独活，姜活，牛膝，木瓜，黄芩，防风，豨莶草，臭梧桐，粉萆解。', 4, 1, 1, 0, -4.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '风湿止痛颗粒', '祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。', '2019-10-02 20:01:45', '2021-11-02 06:18:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (605, 'BASIC', '归脾颗粒', '归脾颗粒S', 'B009', 1, 4, 100.00, '{[!QjAwOQ!]}', '功能与主治：
健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。

主要组成：
党参，黄芪，白术，茯苓，当归，远志，生姜，大枣，木香，甘草，酸枣仁，桂圆肉。', 5, 1, 1, 0, -13.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '归脾颗粒', '健脾替心，益气补血。用于心力衰弱，贫血引起的失眠心悸，头痛。心脾两虚，心悸失眠，头晕目眩，食少倦怠，面色萎黄，及月事不调等症。', '2019-10-02 20:10:32', '2022-03-23 01:46:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (606, 'BASIC', '甘露消毒颗粒', '甘露消毒颗粒S', 'B010', 1, 4, 100.00, '{[!QjAxMA!]}', '功能与主治：
化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。

主要组成：
连翘，霍香，川贝，通草，茵陈，黄芩，滑石，薄荷，射干，石菖蒲，白豆蔻。', 5, 1, 1, 0, -13.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '甘露消毒颗粒', '化浊利湿，清热解毒。用于湿温初起，发热困倦，胸闷腹胀，肢酸咽肿，口渴，小便短赤，吐泻下痢等症。', '2019-10-02 20:14:51', '2022-07-12 14:49:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (607, 'BASIC', '独活寄生颗粒', '独活寄生颗粒S', 'B011', 1, 4, 100.00, '{[!QjAxMQ!]}', '功能与主治：
祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。

主要组成：
杜仲，独活，桑寄生，秦艽，川牛膝，茯苓，肉桂，川芎，党参，防风，白芍，熟地，当归等。', 9, 1, 1, 0, -4.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '独活寄生颗粒', '祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。', '2019-10-02 20:21:11', '2022-08-18 09:53:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (608, 'BASIC', '银翘解毒颗粒', '银翘解毒颗粒S', 'B012', 1, 4, 100.00, '{[!QjAxMg!]}', '功能与主治：
疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。

主要组成：
金银花，连翘，荆芥，淡豆豉，牛蒡子，桔梗，淡竹叶，芦根，甘草。', 11, 1, 1, 0, -31.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '银翘解毒颗粒', '疏风解表，清热解毒。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，口渴诸症。', '2019-10-02 20:22:48', '2022-08-03 09:20:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (609, 'BASIC', '六味地黄颗粒', '六味地黄颗粒S', 'B013', 1, 4, 100.00, '{[!QjAxMw!]}', '六味地黄颗粒功能与主治:
滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。

主要组成:
熟地，丹皮，淮山，茯苓，泽泻，山茱萸。', 4, 1, 1, 0, -4.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '六味地黄颗粒', '滋阴补肾。用于身体虚弱，肝肾阴虚，头目眩最，耳鸣耳鸣，舌燥喉痛，腰膝酸软等症。', '2019-10-02 20:24:45', '2021-11-02 06:19:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (610, 'BASIC', '香砂六君子颗粒', '香砂六君子颗粒S', 'B014', 1, 4, 100.00, '{[!QjAxNA!]}', '功能与主治：
理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。

主要组成：
砂仁，党参，白术，茯苓，陈皮，大枣，生姜，甘草，川木香，制半夏。', 9, 1, 1, 0, -33.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '香砂六君子颗粒', '理气驱寒，燥湿化痰。用于痰多喘促，呕吐，痰浊上逆，脾胃虚弱，食欲不振，胸脘痞满等诸症。', '2019-10-02 20:26:12', '2022-08-22 01:17:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (611, 'BASIC', '止嗽散颗粒', '止嗽散颗粒S', 'B015', 1, 4, 100.00, '{[!QjAxNQ!]}', '功能与主治：
缓解积痰和咳嗽等症状。

主要组成：
荆芥，百部，紫苑，桔梗，陈皮，白前，甘草。', 4, 1, 1, 0, -56.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '止嗽散颗粒', '缓解积痰和咳嗽等症状。', '2019-10-02 20:27:55', '2022-11-07 11:33:18', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (612, 'BASIC', '木香顺气颗粒', '木香顺气颗粒S', 'B016', 1, 2, 500.00, '{[!QjAxNg!]}', '功能与主治：
气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。

主要组成：
木香，香附，苍术，枳殻，陈皮，甘草等。', 4, 1, 1, 0, -8.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '木香顺气颗粒', '气郁不舒，不思饮食，胸胁痞满，腹胀泄泻。', '2019-10-02 20:36:03', '2022-08-04 01:29:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (613, 'BASIC', '荆防败毒颗粒', '荆防败毒颗粒S', 'B017', 1, 4, 100.00, '{[!QjAxNw!]}', '功能与主治：
发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。

主要组成：
荆芥，防风，茯苓，川芎，独活，生姜，姜活，枳壳，柴胡，桔梗，甘草。', 9, 1, 1, 0, null, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '荆防败毒颗粒', '发汗解表，散风祛湿。主治外感风寒渴邪，症见恶寒发热，头颈强痛，肢体酸痛，无汗，鼻塞声重，咳嗽有痰，胸膈痞闷，以及用于疮痛，痢疾，初起见上述诸症者。', '2019-10-02 20:38:47', '2021-11-02 06:21:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (614, 'BASIC', '九味姜活颗粒', '九味姜活颗粒S', 'B018', 1, 4, 100.00, '{[!QjAxOA!]}', '功能与主治：
发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。

主要组成：
姜活，防风，川芎，甘草， 苍术，白芷，黄芩，生地等。', 2, 1, 1, 0, -8.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '九味姜活颗粒', '发汗，除湿，兼清里热，止痛。用于恶寒发热，无汗，头痛身重，口干，肢体酸痛等诸症。', '2019-10-02 20:42:05', '2021-11-02 06:21:43', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (615, 'BASIC', '复方苦参颗粒', '复方苦参颗粒S', 'B019', 1, 4, 100.00, '{[!QjAxOQ!]}', '功能与主治：
祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。

主要组成：
苦参，蛇床子，白芷，金银花，野菊花，地肤子，石菖蒲。', 9, 1, 1, 0, -2.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '复方苦参颗粒', '祛风除湿，杀虫止痒。用于治皮肤瘙，痒症，阴痒，湿疹，带下。', '2019-10-02 20:43:38', '2021-11-02 06:21:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (616, 'BASIC', '四君子颗粒', '四君子颗粒S', 'B020', 1, 4, 100.00, '{[!QjAyMA!]}', '功能与主治:
益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。

主要组成:
党参，白术，茯苓，甘草。', 5, 1, 1, 0, -18.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '四君子颗粒', '益气健脾。用于脾胃虚弱，饮食不思，四肢乏力，吐泻呕逆。', '2019-10-02 20:45:04', '2022-08-05 08:25:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (617, 'BASIC', '栀芩颗粒', '栀芩颗粒S', 'B021', 1, 4, 100.00, '{[!QjAyMQ!]}', '功能与主治：
疏风清热解毒。用于温病气分热盛之发热，汗出，头痛，面赤唇红，烦躁多渴，口苦咽干，小便短赤等症。

主要组成：
栀子，连翘，黄芩，竹叶，甘草，薄荷。', 9, 1, 1, 0, -2.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '栀芩颗粒', '疏风清热解毒。用于温病气分热盛之发热，汗出，头痛，面赤唇红，烦躁多渴，口苦咽干，小便短赤等症 。', '2019-10-02 20:47:38', '2022-09-05 03:31:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (618, 'BASIC', '十味甘麦大枣颗粒', '十味甘麦大枣颗粒S', 'B022', 1, 4, 100.00, '{[!QjAyMg!]}', '功能与主治:
滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。

主要组成:
浮小麦，大枣，淮山，甘草，五味子，酸枣仁，天冬，玉竹，桑椹子，牡蛎。', 2, 1, 1, 0, -24.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '十味甘麦大枣颗粒', '滋阴，养心，宁神。主治心阴不足，失眠，多梦健忘，惊悸，眩肇。', '2019-10-02 20:50:41', '2022-08-03 01:34:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (619, 'BASIC', '二陈颗粒', '二陈颗粒S', 'B023', 1, 4, 100.00, '{[!QjAyMw!]}', '功能与主治：
燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。

主要组成：
陈皮，茯苓，生姜，炙甘草，制半夏。', 2, 1, 1, 0, -16.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '二陈颗粒', '燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。', '2019-10-02 20:51:59', '2022-09-09 16:29:42', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (620, 'BASIC', '复方狗脊颗粒', '复方狗脊颗粒S', 'B024', 1, 4, 100.00, '{[!QjAyNA!]}', '功能与主治：
缓解关节疼痛和腹部轻微浮肿的症状。

主要组成：
狗脊，当归，桂枝，杜仲，木瓜，熟地，桑枝，秦艽，续断，松节，海风藤，川牛膝。', 9, 1, 1, 0, null, 0, 2, 1, 0, 41.000000, null, 10, 10, 10, 10, '复方狗脊颗粒', '缓解关节疼痛和腹部轻微浮肿的症状。', '2019-10-02 20:53:28', '2021-11-02 06:23:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (621, 'BASIC', '杏苏饮颗粒', '杏苏饮颗粒S', 'B025', 1, 4, 100.00, '{[!QjAyNQ!]}', '功能与主治:
疏风解表，清热解毒，宜肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。

主要组成:
甘草，陈皮，生姜，枳殻，前胡，茯苓，大枣，桔梗，杏仁，制半夏，紫苏叶。', 7, 1, 1, 0, -2.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '杏苏饮颗粒', '疏风解表，清热解毒，宜肺化痰。用治温病初起发热头痛，微恶风寒自汗，咳嗽咽痛，稀痰，口渴诸症。', '2019-10-02 20:55:51', '2022-07-07 05:13:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (622, 'BASIC', '血府逐瘀颗粒', '血府逐瘀颗粒S', 'B026', 1, 4, 100.00, '{[!QjAyNg!]}', '功能与主治：
活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。

主要组成：
当归尾，牛膝，红花，生地，桃仁，枳壳，赤芍，柴胡，甘草，桔梗，川芎。', 6, 1, 1, 0, -35.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '血府逐瘀颗粒', '活血祛瘀，行血止痛。用治瘀血凝滞引起月事不通及腹痛，头痛，胸痛，呃逆不止，内热烦闷，心悸失眠等症。', '2019-10-03 23:37:54', '2022-09-15 02:54:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (623, 'BASIC', '二母宁嗽颗粒', '二母宁嗽颗粒S', 'B027', 1, 4, 100.00, '{[!QjAyNw!]}', '功能与主治：
清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。

主要组成：
陈皮，五味子，枳实，生姜，茯苓，甘草，石膏，知母，川贝母，栀子，黄芩，瓜蒌皮，桑白皮。', 2, 1, 1, 0, -30.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '二母宁嗽颗粒', '清热消炎，止喘宁嗽。用于因酒食，胃火上升逼肺，以致咳嗽吐痰，痰盛气促，咽干口燥，声哑喉痛等症。', '2019-10-03 23:39:56', '2022-01-12 06:39:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (624, 'BASIC', '玉女煎颗粒', '玉女煎颗粒S', 'B028', 1, 4, 100.00, '{[!QjAyOA!]}', '功能与主治：
清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。

主要组成：
石膏，熟地黄，麦冬，知母，牛膝。', 5, 1, 1, 0, -76.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '玉女煎颗粒', '清胃滋阴。用于胃热阴虚所致的头痛牙痛，齿松牙出血，烦热口渴，舌干红，苔黄而干等症。', '2019-10-03 23:42:37', '2022-09-13 03:17:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (625, 'BASIC', '咽炎颗粒', '咽炎颗粒S', 'B029', 1, 4, 100.00, '{[!QjAyOQ!]}', '功能与主治:
清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。

主要组成:
金银花，连翘，牛蒡子，射干，山豆根，玄参，麦冬，桔梗，甘草，马勃，薄荷。', 9, 1, 1, 0, -3.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '咽炎颗粒', '清热解毒，利咽消肿。用于热毒拥阻上焦，发热恶寒，银花肿痛，口苦咽干，口渴，汗出等症。', '2019-10-03 23:44:18', '2022-01-05 04:40:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (626, 'BASIC', '桑枝虎杖颗粒', '桑枝虎杖颗粒S', 'B031', 1, 4, 100.00, '{[!QjAzMQ!]}', '桑枝虎杖颗粒', 10, 1, 1, 0, -96.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '桑枝虎杖颗粒', null, '2019-10-03 23:46:04', '2022-09-15 02:54:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (627, 'BASIC', '藿香正气颗粒', '藿香正气颗粒S', 'B032', 1, 4, 100.00, '{[!QjAzMg!]}', '功能与主治：
解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。

主要组成：
霍香，陈皮，白术，枳壳，茯苓，桔梗，白芷，生姜，大枣，紫苏叶，制半夏，大腹皮，炙甘草。', 19, 1, 1, 0, -23.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '藿香正气颗粒', '解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。', '2019-10-03 23:47:25', '2022-09-06 08:15:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (628, 'BASIC', '生脉饮颗粒', '生脉饮颗粒S', 'B033', 1, 4, 100.00, '{[!QjAzMw!]}', '功能与主治：
益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。

主要组成：
党参，麦冬，五味子。', 5, 1, 1, 0, -17.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '生脉饮颗粒', '益气复脉，养阴生津。用于气阴两虚，心悸气短，肢体怠倦，口干坐渴，脉微虚汗，咽干舌燥及久咳伤肺等症。', '2019-10-03 23:51:49', '2022-09-06 08:15:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (629, 'BASIC', '保和颗粒', '保和颗粒S', 'B034', 1, 4, 100.00, '{[!QjAzNA!]}', '功能与主治：
消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。

主要组成：
山楂，陈皮，神曲，连翘，麦芽，莱菔子，茯苓，半夏。', 9, 1, 1, 0, -14.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '保和颗粒', '消积和胃，清热利湿。用于食欲不振，胸脘痞满，嗳腐吞酸，腹痛时胀，大便泄泻等症。', '2019-10-03 23:53:18', '2022-08-02 04:17:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (630, 'BASIC', '一贯煎颗粒', '一贯煎颗粒S', 'B035', 1, 4, 100.00, '{[!QjAzNQ!]}', '功能与主治:
滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。

主要组成:
北沙参，麦冬，生地，川楝子，当归，杞子。', 1, 1, 1, 0, -11.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '一贯煎颗粒', '滋阴疏肝。用于肝肾阴虚，气滞不运，头晕目眩，胸胁不舒，口干口苦，心烦，胃液亏耗等症。', '2019-10-03 23:54:51', '2022-09-05 03:31:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (631, 'BASIC', '六君子颗粒', '六君子颗粒S', 'B036', 1, 4, 100.00, '{[!QjAzNg!]}', '功能与主治：
补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。

主要组成：
党参，茯苓，白术，半夏，陈皮，甘草。', 4, 1, 1, 0, -8.000000, 0, 2, 1, 0, 41.000000, null, 10, 10, 10, 10, '六君子颗粒', '补气健脾，燥湿化痰。用于脾胃气虚，不思饮食，体虚乏力，语声低微，四肢无力，排痰困难，大便溏薄等症。', '2019-10-03 23:56:02', '2021-11-02 06:27:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (632, 'BASIC', '桑杏颗粒', '桑杏颗粒S', 'B037', 1, 4, 100.00, '{[!QjAzNw!]}', '功能与主治：
轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。

主要组成：
桑叶，北杏仁，南沙参，浙贝母，淡豆豉，山栀子，淡竹叶，天花粉，芦根。', 10, 1, 1, 0, -2.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '桑杏颗粒', '轻宜凉润。用于外感燥热，肺燥咳嗽，头痛身热，干咳无痰，口渴舌红，支气管炎等症。', '2019-10-03 23:57:26', '2022-08-16 03:38:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (633, 'BASIC', '当归拈痛颗粒', '当归拈痛颗粒S', 'B038', 1, 4, 100.00, '{[!QjAzOA!]}', '功能与主治：
祛风燥湿，和血止痛。用于急性关节红脾骨痛，湿热，疮疡，肩背沉重，肢节疼痛，胸胁不利等症。

主要组成：
当归，防风，泽泻，龙腧草，知母，姜活，升麻，茵陈，白术，甘草，苍术，猪苓，黄芩，苦参。', 6, 1, 1, 0, -11.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '当归拈痛颗粒', null, '2019-10-04 00:14:42', '2022-08-04 01:29:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (634, 'BASIC', '天王补心颗粒', '天王补心颗粒S', 'B039', 1, 4, 100.00, '{[!QjAzOQ!]}', '功能与主治:
滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。

主要组成:
生地，党参，玄参，丹参，茯苓，桔梗，远志，酸枣仁，柏子仁，天冬，当归，麦冬， 五味子。', 4, 1, 1, 0, -4.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '天王补心颗粒', '滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。', '2019-10-04 00:16:18', '2021-11-02 06:27:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (635, 'BASIC', '白果定喘颗粒', '白果定喘颗粒S', 'B040', 1, 4, 100.00, '{[!QjA0MA!]}', '功能与主治：
宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。

主要组成：
白果，黄芩，苏子，甘草，杏仁，生姜，款冬花，桑白皮，制法夏，', 5, 1, 1, 0, -3.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '白果定喘颗粒', '宜降肺气，定喘化热痰。用于外感风热，咳嗽痰喘，气逆喘息，痰多气促，咳痰黄稠等症。', '2019-10-04 01:21:31', '2022-09-24 02:03:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (636, 'BASIC', '止咳颗粒', '止咳颗粒S', 'B041', 1, 4, 100.00, '{[!QjA0MQ!]}', '功能与主治：
止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。

主要组成：
荆芥，桔梗，紫菀，杏仁，甘草，陈皮，莱菔子。', 4, 1, 1, 0, -27.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '止咳颗粒', '止咳化痰，疏风解表，降气平喘。适用于感冒风邪引起鼻塞声重，语声不出，风寒咳嗽，咳痰不止，胸满气短。', '2019-10-04 01:23:00', '2022-09-05 02:08:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (637, 'BASIC', '川贝枇杷颗粒', '川贝枇杷颗粒S', 'B042', 1, 4, 100.00, '{[!QjA0Mg!]}', '功能与主治：
镇咳祛痰。用于感冒及支气管炎引起的咳嗽。

主要组成：
川贝，桔梗，薄荷，枇杷叶，制半夏。', 3, 1, 1, 0, -20.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '川贝枇杷颗粒', '镇咳祛痰。用于感冒及支气管炎引起的咳嗽。', '2019-10-04 01:26:21', '2022-09-26 08:38:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (638, 'BASIC', '龙胆泻肝颗粒', '龙胆泻肝颗粒S', 'B043', 1, 4, 100.00, '{[!QjA0Mw!]}', '功能与主治：
泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。

主要组成：
龙胆草，柴胡，泽泻，车前子，生地，黄芩，归尾，山栀子，甘草等。', 5, 1, 1, 0, -15.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '龙胆泻肝颗粒', '泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。', '2019-10-04 01:27:37', '2022-08-19 07:39:45', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (639, 'BASIC', '芍药甘草颗粒', '芍药甘草颗粒S', 'B044', 1, 4, 100.00, '{[!QjA0NA!]}', '功能与主治：
疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。

主要组成：
白芍，赤芍，甘草。', 6, 1, 1, 0, -11.000000, 0, 2, 1, 0, 43.000000, null, 10, 10, 10, 10, '芍药甘草颗粒', '疏螨急，治腹痛。用于阴血亏虚，筋脉攀急，脘腹头疼。', '2019-10-04 01:28:57', '2022-09-05 03:31:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (640, 'BASIC', '参苓白术颗粒', '参苓白术颗粒S', 'B045', 1, 4, 100.00, '{[!QjA0NQ!]}', '功能与主治：
补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。

主要组成：
人参，白术，茯苓，甘草，山药，白扁豆，莲子，砂仁，薏苡仁，桔梗。', 8, 1, 1, 0, -6.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '参苓白术颗粒', '补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷等症。', '2019-10-04 01:30:41', '2022-08-22 01:17:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (641, 'BASIC', '活络效灵颗粒', '活络效灵颗粒S', 'B046', 1, 4, 100.00, '{[!QjA0Ng!]}', '功能与主治：
活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。

主要组成：
丹参，当归，乳香，没药，桃仁，赤芍等。', 9, 1, 1, 0, -22.000000, 0, 2, 1, 0, 42.000000, null, 10, 10, 10, 10, '活络效灵颗粒', '活血祛瘀，通络止痛。用于气血凝滞，心腹及肢体疼痛，妇女瘀血腹痛，症瘕积聚，疮疡内痛，铁打瘀肿及风湿痹痛等症。', '2019-10-04 01:32:33', '2022-07-13 09:28:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (642, 'BASIC', '平胃颗粒', '平胃颗粒S', 'B047', 1, 4, 100.00, '{[!QjA0Nw!]}', '功能与主治：
行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。

主要组成：
苍术，陈皮，炙甘草等。', 5, 1, 1, 0, -29.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '平胃颗粒', '行气燥湿，健脾和胃。主治脾虚湿困，厌食呕吐，胸脘痞闷，腹胀泄泻等症。', '2019-10-04 01:33:55', '2022-06-27 03:55:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (643, 'BASIC', '姜活胜湿颗粒', '姜活胜湿颗粒S', 'B048', 1, 4, 100.00, '{[!QjA0OA!]}', '功能与主治：
发汗祛风胜湿。用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。

主要组成：
姜活，独活，防风，炙甘草，川芎，蒿本，蔓荆子。', 9, 1, 1, 0, -8.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '姜活胜湿颗粒', '发汗祛风胜湿。用治湿气在表，头痛头重腰脊重痛或一身尽痛，转侧困难，恶寒微热等诸症。', '2019-10-04 01:35:48', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (644, 'BASIC', '补中益气颗粒', '补中益气颗粒S', 'B049', 1, 4, 100.00, '{[!QjA0OQ!]}', '功能与主治：
补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。

主要组成：
炙黄芪，党参，甘草，大枣，白术，陈皮，柴胡，当归，干姜，升麻。', 7, 1, 1, 0, -15.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '补中益气颗粒', '补中益气，升阳举陷。用于气虚下陷，头晕肢倦，自汗，脱肛，久虚，久泻，久痢，崩漏。', '2019-10-04 01:37:12', '2022-07-09 03:41:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (645, 'BASIC', '肩痹颗粒', '肩痹颗粒S', 'B050', 1, 4, 100.00, '{[!QjA1MA!]}', '功能与主治：
上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。

主要组成：
姜活，防风，当归，桑枝，猪签草，鸡血藤，姜黄，赤芍，透骨草，鹿含草等。', 8, 1, 1, 0, -10.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '肩痹颗粒', '上肢麻痹酸痛，筋骨疼痛，项背拘急，伸展不利，肢酸不舒，或骨节周围软组织炎症。', '2019-10-04 01:41:34', '2021-11-02 06:30:41', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (646, 'BASIC', '鼻通灵颗粒', '鼻通灵颗粒S', 'B051', 1, 4, 100.00, '{[!QjA1MQ!]}', '功能与主治:
清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。

主要组成:
苍耳子，白芷，金银花，连翘，防风，藿香，鹅不食草，薄荷，幸夷。', 13, 1, 1, 0, -58.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '鼻通灵颗粒', '清热解毒，疏散风寒，通利鼻窍，驱风止痛。适用于鼻渊，流黄浊鼻涕，头痛鼻塞诸症。', '2019-10-04 01:42:59', '2022-04-18 06:32:28', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (647, 'BASIC', '复元活血颗粒', '复元活血颗粒S', 'B052', 1, 4, 100.00, '{[!QjA1Mg!]}', '功能与主治：
活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。

主要组成：
柴胡，瓜蒌仁，炙甘草，桃仁，红花，当归，大黄。', 9, 1, 1, 0, null, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '复元活血颗粒', '活血祛瘀，疏肝通络。用于从高坠下，铁打损伤，瘀血蓄留，胸胁痛不可忍。', '2019-10-04 01:44:57', '2021-11-02 06:31:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (648, 'BASIC', '五藤颗粒', '五藤颗粒S', 'B053', 1, 4, 100.00, '{[!QjA1Mw!]}', '功能与主治：
活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。

主要组成：
络石藤，鸡血藤，红花，桃仁，海风藤，伸筋藤，红藤，当归，川芎，赤芍，大血藤。五腾颗粒', 4, 1, 1, 0, -22.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '五藤颗粒', '活血化瘀，通痹活络。用于风中经络，血脉痹阻，颜面功能失调，上肢骨节屈伸不利，背不能举，双下肢浮肿。', '2019-10-04 01:46:16', '2021-11-06 02:18:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (649, 'BASIC', '消肿活血颗粒', '消肿活血颗粒S', 'B054', 1, 4, 100.00, '{[!QjA1NA!]}', '功能与主治：
活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。

主要组成：
续断，赤芍，地丁，桂枝，牛膝，当归，泽兰等。', 10, 1, 1, 0, -12.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '消肿活血颗粒', '活血消肿，舒筋接骨。主治铁打刀伤，脱臼，骨折，局部红肿，疼痛。', '2019-10-04 01:47:44', '2022-07-07 05:13:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (650, 'BASIC', '防风通圣颗粒', '防风通圣颗粒S', 'B055', 1, 4, 100.00, '{[!QjA1NQ!]}', '功能与主治：
解表通里，清热解毒。用于感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。

主要组成：
防风，川芎，当归，白芍，连翘，石裔，黄芩，桔梗，荆芥，白术，栀子，甘草，薄荷，大黄，芒硝，生姜等。', 6, 1, 1, 0, -6.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '防风通圣颗粒', '解表通里，清热解毒。用于感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。', '2019-10-04 01:48:49', '2022-08-16 03:38:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (651, 'BASIC', '五味消毒颗粒', '五味消毒颗粒S', 'B056', 1, 4, 100.00, '{[!QjA1Ng!]}', '功能与主治：
缓解身体热气，轻微肿胀及疼痛。

主要组成：
连翘，野菊花，金银花，蒲公英，紫花地丁。', 4, 1, 1, 0, -30.000000, 0, 2, 1, 0, 42.000000, null, 10, 10, 10, 10, '五味消毒颗粒', '缓解身体热气，轻微肿胀及疼痛。', '2019-10-04 01:50:19', '2022-09-13 04:36:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (652, 'BASIC', '养阴清肺颗粒', '养阴清肺颗粒S', 'B057', 1, 4, 100.00, '{[!QjA1Nw!]}', '功能与主治：
养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。

主要组成：
生地，麦冬，白芍，浙贝母，牡丹皮，玄参，甘草，薄荷。', 9, 1, 1, 0, -3.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '养阴清肺颗粒', '养阴润肺，清肺利咽。养阴阳虚肺燥，口干咳嗽，咽痛见白，咽喉肿痛，发热。', '2019-10-04 01:51:20', '2022-09-24 02:03:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (653, 'BASIC', '丹枝逍遥颗粒', '丹枝逍遥颗粒S', 'B058', 1, 4, 100.00, '{[!QjA1OA!]}', '功能与主治：
疏肝健脾，养血调经。用治肝脾，血虚郁热，头晕目眩，全身搔痒，胸胁腹痛，口燥咽干，食少嗑卧，小便涩滞，月事不调等症。

主要组成：
陈皮，当归，白术，茯苓，甘草，白芍，丹皮，扼子，柴胡，薄荷，生姜。', 4, 1, 1, 0, -25.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '丹枝逍遥颗粒', '疏肝健脾，养血调经。用治肝脾，血虚郁热，头晕目眩，全身搔痒，胸胁腹痛，口燥咽干，食少嗑卧，小便涩滞，月事不调等症。', '2019-10-04 01:53:29', '2022-03-23 01:46:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (654, 'BASIC', '杞菊地黄颗粒', '杞菊地黄颗粒S', 'B059', 1, 4, 100.00, '{[!QjA1OQ!]}', '功能与主治：
滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。

主要组成：
杞子，菊花，熟地，山茱肉，淮山，丹皮，泽泻，茯苓。', 7, 1, 1, 0, -16.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '杞菊地黄颗粒', '滋肾替肝。用于肝肾阴虚，头晕目眩，耳鸣虚汗，枯涩眼痛，视力减退，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。', '2019-10-04 01:54:58', '2022-08-05 08:25:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (655, 'BASIC', '十味化饮颗粒', '十味化饮颗粒S', 'B060', 1, 4, 100.00, '{[!QjA2MA!]}', '十味化饮颗粒', 2, 1, 1, 0, null, 0, 2, 1, 0, 42.000000, null, 10, 10, 10, 10, '十味化饮颗粒', null, '2019-10-04 01:56:18', '2021-11-02 06:33:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (656, 'BASIC', '柴胡疏肝颗粒', '柴胡疏肝颗粒S', 'B061', 1, 4, 100.00, '{[!QjA2MQ!]}', '功能与主治：
疏肝行气，活血止痛。用治肝气郁结，胁作疼痛，寒热往来等诸症。

主要组成：
柴胡，白芍，枳壳，香附，郁金，陈皮，川芎，甘草。', 10, 1, 1, 0, -63.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '柴胡疏肝颗粒', '疏肝行气，活血止痛。 用治肝气郁结，胁作疼痛，寒热往来等诸症。', '2019-10-04 01:57:18', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (657, 'BASIC', '甘露颗粒', '甘露颗粒S', 'B062', 1, 4, 100.00, '{[!QjA2Mg!]}', '甘露颗粒', 5, 1, 1, 0, null, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '甘露颗粒', null, '2019-10-04 01:58:14', '2021-11-02 06:33:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (658, 'BASIC', '鼻通颗粒', '鼻通颗粒S', 'B063', 1, 4, 100.00, '{[!QjA2Mw!]}', '功能与主治：
用于身体热气和鼻塞。

主要组成：
辛夷，白芷，薄荷，桔梗，防风，藁本，丹皮，苍耳子，侧柏叶。', 13, 1, 1, 0, -23.000000, 0, 2, 1, 0, 41.000000, null, 10, 10, 10, 10, '鼻通颗粒', '用于身体热气和鼻塞。', '2019-10-07 01:55:40', '2022-02-28 03:54:41', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (659, 'BASIC', '百合固金颗粒', '百合固金颗粒S', 'B064', 1, 4, 100.00, '{[!QjA2NA!]}', '功能与主治：
缓解咳嗽，喉咙痛，热气及化痰。

主要组成：
玄参，生地，熟地，贝母，桔梗，麦冬，白芍，百合，当归，甘草。', 6, 1, 1, 0, -18.000000, 0, 2, 1, 0, 42.000000, null, 10, 10, 10, 10, '百合固金颗粒', '缓解咳嗽，喉咙痛，热气及化痰。', '2019-10-07 20:45:32', '2022-02-25 05:56:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (660, 'BASIC', '酸枣仁颗粒', '酸枣仁颗粒S', 'B065', 1, 4, 100.00, '{[!QjA2NQ!]}', '功能与主治：
替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。

主要组成：
酸枣仁，知母丶川芎，甘声。', 14, 1, 1, 0, -42.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '酸枣仁颗粒', '替血安神，清热除烦。用于治虚劳烦不得眠，多梦易觫，虚汗。惊悸怔忡，烦躁不眠，神经衰弱症，健忘。', '2019-10-07 20:48:24', '2022-08-22 01:17:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (661, 'BASIC', '安神颗粒', '安神颗粒S', 'B066', 1, 4, 100.00, '{[!QjA2Ng!]}', '功能与主治：
益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。

主要组成：
生地，远志，玄参，丹参，夜交藤，五味子，女贞子，地骨皮。', 6, 1, 1, 0, -23.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '安神颗粒', '益气养阴，清热安神。主治神经衰弱，夜不人睡，睡则多梦，头晕眩，烦躁不宁。', '2019-10-07 20:50:03', '2022-08-18 09:53:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (662, 'BASIC', '逍遥颗粒', '逍遥颗粒S', 'B067', 1, 4, 100.00, '{[!QjA2Nw!]}', '功能与主治：
疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。

主要组成：
当归，白术，茯苓，白芍，柴胡，生姜，甘草，薄荷。', 10, 1, 1, 0, -6.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '逍遥颗粒', '疏肝解郁，建脾养血。主治血虚火旺，头痛目眩，烦赤口苦，寒热咳嗽，两胁作痛，腹痛诸症。', '2019-10-07 20:55:08', '2021-11-02 06:34:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (663, 'BASIC', '滋阴地黄颗粒', '滋阴地黄颗粒S', 'B068', 1, 4, 100.00, '{[!QjA2OA!]}', '功能与主治:
滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。

主要组成:
熟地，淮山，山茱萸，，泽泻，丹皮，知母，茯苓。', 12, 1, 1, 0, -8.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '滋阴地黄颗粒', '滋阴降火。主治阴虚火旺，骨蒸潮热，手足心热，腰背酸痛，盗汗等症。', '2019-10-07 22:05:26', '2022-01-11 13:41:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (664, 'BASIC', '舒筋活络颗粒', '舒筋活络颗粒S', 'B069', 1, 4, 100.00, '{[!QjA2OQ!]}', '功能与主治：
舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。

主要组成：
续断，仓术，牛膝，防风，秦艽，木瓜，独活，桂枝，姜活，当归，陈皮，薏苡仁。', 12, 1, 1, 0, -17.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '舒筋活络颗粒', '舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。', '2019-10-07 22:07:01', '2022-08-18 09:53:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (665, 'BASIC', '养血熄风颗粒', '养血熄风颗粒S', 'B070', 1, 4, 100.00, '{[!QjA3MA!]}', '功能与主治：
养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。

主要组成：
首乌，蛇床子，荆芥，甘草，地肤子，防风，黄芩，刺疾藜等。', 9, 1, 1, 0, -15.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '养血熄风颗粒', '养血熄风，治急慢性荨麻疹，皮肤瘙痒症，湿疹。', '2019-10-07 22:12:27', '2022-09-05 04:29:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (666, 'BASIC', '玉屏风颗粒', '玉屏风颗粒S', 'B071', 1, 4, 100.00, '{[!QjA3MQ!]}', '功能与主治：
益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。

主要组成：
黄芪，白术，防风。', 5, 1, 1, 0, -44.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '玉屏风颗粒', '益气固表止汗。用治恶风自汗，面色苍白及体虚易感风邪者。', '2019-10-07 22:13:47', '2022-11-07 11:37:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (667, 'BASIC', '清热透表颗粒', '清热透表颗粒S', 'B072', 1, 4, 100.00, '{[!QjA3Mg!]}', '功能与主治:
用于缓解感冒，身体热气，头痛，喉咙疼痛，口渴及咳嗽。

主要组成：
连翘，杏仁，葛根，石膏，甘草，薄荷，柴胡，知母，金银花，板蓝根，野菊花，牛蒡子。', 11, 1, 1, 0, -1.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '清热透表颗粒', null, '2019-10-07 22:20:19', '2022-08-16 03:38:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (668, 'BASIC', '六子衍宗颗粒', '六子衍宗颗粒S', 'B073', 1, 4, 100.00, '{[!QjA3Mw!]}', '功能与主治:
补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。

主要组成:
菟丝子，枸杞子，覆盆子，五味子，车前子，羊淫藿，补骨脂。', 4, 1, 1, 0, -48.000000, 0, 2, 1, 0, 42.000000, null, 10, 10, 10, 10, '六子衍宗颗粒', '补肾益精，补阳益精，强腰建骨，祛风纳气。用治肝肾不足，气血两虚遗精，筋骨痿软，腰膝冷痛，麻木拘攀，须发早白，耳鸣，夜尿频数，尿后余沥等症。', '2019-10-07 22:21:38', '2022-09-21 04:07:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (669, 'BASIC', '疏肝和胃颗粒', '疏肝和胃颗粒S', 'B074', 1, 4, 100.00, '{[!QjA3NA!]}', '功能与主治：
促活身体的活力，缓解疼痛，呕吐和胃气。

主要组成：
香附，砂仁，白芍，枳壳，柴胡，玄参，陈皮，白芨，炙甘草，蒲公英。', 12, 1, 1, 0, -78.000000, 0, 2, 1, 0, 42.000000, null, 10, 10, 10, 10, '疏肝和胃颗粒', '促活身体的活力，缓解疼痛，呕吐和胃气。', '2019-10-07 22:22:51', '2022-09-06 08:15:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (670, 'BASIC', '腰腿痛颗粒', '腰腿痛颗粒S', 'B075', 1, 4, 100.00, '{[!QjA3NQ!]}', '功能与主治：
缓解腰酸痛，关节和肌肉疼痛。

主要组成：
黄芪，当归，木瓜，牛膝，白芍，桂枝，赤芍，白芷，甘草，生地，独活。', 13, 1, 1, 0, -8.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '腰腿痛颗粒', '缓解腰酸痛，关节和肌肉疼痛。', '2019-10-07 22:39:04', '2022-09-06 08:15:34', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (671, 'BASIC', '竹叶石膏颗粒', '竹叶石膏颗粒S', 'B076', 1, 4, 100.00, '{[!QjA3Ng!]}', '功能与主治：
益气养阴，降逆。用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。

主要组成：
竹叶，生石膏，太子参，麦冬，甘草，制半夏。', 6, 1, 1, 0, -10.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '竹叶石膏颗粒', '益气养阴，降逆。 用于热病初愈，馀热未清，气津两伤，身热多汗，心胸烦躁，气逆欲呕，口干多，烦躁不寐。', '2019-10-07 22:41:19', '2022-09-05 03:31:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (672, 'BASIC', '眩晕颗粒', '眩晕颗粒S', 'B077', 1, 4, 100.00, '{[!QjA3Nw!]}', '功能与主治:
缓解咳嗽，减少粘痰。

主要组成：
杏仁，茯苓，枳壳，橘红，钟乳石，制半夏，瓜篓子，桑白皮。', 10, 1, 1, 0, -16.000000, 0, 2, 1, 0, 42.000000, null, 10, 10, 10, 10, '眩晕颗粒', '缓解咳嗽，减少粘痰。', '2019-10-07 22:42:26', '2021-11-02 06:36:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (673, 'BASIC', '参灵五子颗粒', '参灵五子颗粒S', 'B078', 1, 4, 100.00, '{[!QjA3OA!]}', '功能与主治：
滋补肝肾，养阴益精。用于下元亏损，未老先衰，肾阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。

主要组成：
枸杞子，菟丝子，车前子，覆盆子，党参，五味子，淫羊藿。', 8, 1, 1, 0, -41.000000, 0, 2, 1, 0, 43.000000, null, 10, 10, 10, 10, '参灵五子颗粒', '滋补肝肾，养阴益精。 用于下元亏损，未老先衰，肾 阴不足，腰背酸痛，胃寒肢冷，精神疲劳，小便余滴不尽及少年早衰等症。', '2019-10-07 22:43:47', '2022-09-13 04:36:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (674, 'BASIC', '川芎茶调颗粒', '川芎茶调颗粒S', 'B079', 1, 4, 100.00, '{[!QjA3OQ!]}', '功能与主治：
因风寒感胃引起头晕目眩，偏正头痛，发热恶寒等症。

主要组成：
川芎，荆芥，白芷，茶叶，姜活，防风，甘草。川芎茶调片', 3, 1, 1, 0, -3.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '川芎茶调颗粒', '因风寒感胃引起头景目眩，偏正头痛，发热恶寒等症。', '2019-10-07 22:47:19', '2022-08-16 03:38:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (675, 'BASIC', '解表化饮颗粒', '解表化饮颗粒S', 'B080', 1, 4, 100.00, '{[!QjA4MA!]}', '解表化饮颗粒', 13, 1, 1, 0, null, 0, 2, 1, 0, 41.000000, null, 10, 10, 10, 10, '解表化饮颗粒', null, '2019-10-07 22:49:08', '2021-11-02 06:36:57', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (676, 'BASIC', '丹参颗粒', '复方丹参颗粒S', 'B081', 1, 4, 100.00, '{[!QjA4MQ!]}', '功能与主治：
理气活血。用于血瘀气滞，心腹胃膈疼痛。

主要组成：
丹参，砂仁，檀香。丹参颗粒', 4, 1, 1, 0, -45.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '丹参颗粒', '理气活血。用于血瘀气滞，心腹胃膈疼痛。', '2019-10-07 22:51:50', '2022-09-13 04:36:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (677, 'BASIC', '沙参麦冬颗粒', '沙参麦冬颗粒S', 'B082', 1, 4, 100.00, '{[!QjA4Mg!]}', '功能与主治：
滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。

主要组成：
北沙参，玉竹，甘草，桑叶，麦冬，扁豆，天花粉。', 7, 1, 1, 0, -7.000000, 0, 2, 1, 0, 43.000000, null, 10, 10, 10, 10, '沙参麦冬颗粒', '滋阴润燥，津液亏损，咳嗽痰少而粘，咽干口燥。', '2019-10-07 22:53:53', '2022-09-14 03:44:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (678, 'BASIC', '当归四逆颗粒', '当归四逆颗粒S', 'B083', 1, 4, 100.00, '{[!QjA4Mw!]}', '功能与主治：
用于寒凝经脉，手足厥冷，肢体痹痛等症。

主要组成：
当归，桂枝，白芍，大枣，炙甘草等。', 6, 1, 1, 0, -12.000000, 0, 2, 1, 0, 40.000000, null, 10, 10, 10, 10, '当归四逆颗粒', '用于寒凝经脉，手足厥冷，肢体痹痛等症。', '2019-10-07 23:01:04', '2022-06-27 03:55:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (679, 'BASIC', '五苓颗粒', '五苓颗粒S', 'B084', 1, 4, 100.00, '{[!QjA4NA!]}', '功能与主治：
化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。

主要组成：
猪芩，茯苓，泽泻，白术，肉桂。', 4, 1, 1, 0, -5.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '五苓颗粒', '化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。', '2019-10-07 23:02:27', '2022-08-16 03:38:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (680, 'BASIC', '桂枝颗粒', '桂枝颗粒S', 'B085', 1, 4, 100.00, '{[!QjA4NQ!]}', '功能与主治：
疏风解表，调和营卫。主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。

主要组成：
桂枝，白芍，生姜，大枣，炙甘草。', 10, 1, 1, 0, -11.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '桂枝颗粒', '疏风解表，调和营卫。 主治风寒外感，发热，头项强痛，汗出恶风，鼻鸣，脉浮缓。', '2019-10-07 23:03:47', '2022-09-13 03:17:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (681, 'BASIC', '苓桂术甘颗粒', '苓桂术甘颗粒S', 'B086', 1, 4, 100.00, '{[!QjA4Ng!]}', '功能与主治：
胸胁胀满，眩景心悸，大便溏，短气肺咳等症。

主要组成：
茯苓，桂枝，白术，甘草。', 8, 1, 1, 0, -15.000000, 0, 2, 1, 0, 41.000000, null, 10, 10, 10, 10, '苓桂术甘颗粒', '胸胁胀满，眩景心悸，大便溏，短气肺咳等症。', '2019-10-07 23:05:47', '2022-05-17 02:29:15', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (682, 'BASIC', '开胃消食颗粒', '开胃消食颗粒S', 'B087', 1, 4, 100.00, '{[!QjA4Nw!]}', '功能与主治：
开胃消食。小儿厌食症，食欲不振，消化不良。

主要组成：
神曲，麦芽，山楂，槟榔，陈皮，木香，炙甘草。', 4, 1, 1, 0, -4.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '开胃消食颗粒', '开胃消食。小儿厌食症，食欲不振，消化不良。', '2019-10-07 23:11:36', '2022-04-11 03:50:11', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (683, 'BASIC', '仙方活命颗粒', '仙方活命颗粒S', 'B088', 1, 4, 100.00, '{[!QjA4OA!]}', '功能与主治：
清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。

主要组成：
白芷，当归尾，金银花，陈皮，防风，皂角刺，浙贝母，乳香，天花粉，甘草，赤芍，没药。', 5, 1, 1, 0, -12.000000, 0, 2, 1, 0, 44.000000, null, 10, 10, 10, 10, '仙方活命颗粒', '清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。', '2019-10-07 23:12:59', '2021-11-02 06:38:28', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (684, 'BASIC', '头痛片', '头痛片S', 'P002', 1, 3, 1000.00, '{[!UDAwMg!]}', '功能与主治：
祛风止痛。用于两额头痛，巅顶痛，头痛兼有表症者。

主要组成：
防风，蔓荆子，藁本，白芷，甘草，菊花。', 5, 1, 1, 0, -524.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '头痛片', '祛风止痛。用于两额头痛，巅顶痛，头痛兼有表症者。', '2019-10-07 23:16:15', '2022-09-27 03:39:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (685, 'BASIC', '复方山豆根片', '复方山豆根片S', 'P003', 1, 3, 1000.00, '{[!UDAwMw!]}', '复方山豆根片', 9, 1, 1, 0, -241.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '复方山豆根片', null, '2019-10-07 23:17:49', '2022-09-13 04:38:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (686, 'BASIC', '复方板兰根片', '复方板兰根片S', 'P004', 1, 3, 1000.00, '{[!UDAwNA!]}', '复方板兰根片', 9, 1, 1, 0, -719.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '复方板兰根片', null, '2019-10-07 23:19:30', '2022-09-23 09:32:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (687, 'BASIC', '桑菊饮片', '桑菊饮片S', 'P006', 1, 3, 1000.00, '{[!UDAwNg!]}', '桑菊饮片', 10, 1, 1, 0, -1189.000000, 0, 2, 1, 0, 70.000000, null, 10, 10, 10, 10, '桑菊饮片', '传统上用于外感风热及咳嗽头痛。', '2019-10-07 23:21:43', '2022-09-28 06:28:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (688, 'BASIC', '穿心莲片', '穿心莲片S', 'P007', 1, 3, 1000.00, '{[!UDAwNw!]}', '功能与主治：
清热解毒，消炎止痛。急性扁桃体炎，咽喉炎，急性肠胃炎，尿道炎，膀胱炎，细菌性痢痰及脓肿痕瘠。

主要组成：
穿心莲。', 9, 1, 1, 0, -1508.000000, 0, 2, 1, 0, 60.000000, null, 10, 10, 10, 10, '穿心莲片', '清热解毒，消炎止痛。急性扁桃体炎，咽喉炎，急性肠胃炎，尿道炎，膀胱炎，细菌性痢痰及脓肿痕瘠。', '2019-10-14 00:15:08', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (689, 'BASIC', '清火口糜片', '清火口糜片S', 'P009', 1, 3, 1000.00, '{[!UDAwOQ!]}', '功能与主治：
滋阴降火，清热解毒。用于虚火上升牙龈肿烂，口舌生疮，小便短赤等症。

主要组成：
竹叶，生地，黄精，洋参，通草，丹皮，玄参，金银花，车前子，板兰根。', 11, 1, 1, 0, -766.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '清火口糜片', '滋阴降火，清热解毒。用于虚火上升牙龈肿烂，口舌生疮，小便短赤等症。', '2019-10-14 00:21:59', '2022-09-26 08:38:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (690, 'BASIC', '强力银翘片', '强力银翘片S', 'P011', 1, 3, 1000.00, '{[!UDAxMQ!]}', '强力银翘片', 12, 1, 1, 0, -4290.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '强力银翘片', '传统上用于感冒发热，咳嗽，伤风，头痛。', '2019-10-14 00:27:10', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (691, 'BASIC', '鼻咽金丹片', '鼻咽金丹片S', 'P012', 1, 3, 1000.00, '{[!UDAxMg!]}', '鼻咽金丹片', 13, 1, 1, 0, -401.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '鼻咽金丹片', '传统上用于消炎解毒，鼻咽肿痛。', '2019-10-14 00:31:29', '2022-09-27 02:16:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (692, 'BASIC', '丹枝逍遥片', '丹枝逍遥片S', 'P016', 1, 3, 1000.00, '{[!UDAxNg!]}', '功能与主治：
疏肝健脾，养血调经。用治肝脾，血虚郁热，头晕目眩，全身搔痒，胸胁腹痛，口燥咽干，食少嗑卧，小便涩滞，月事不调等症。

主要组成：
陈皮，当归，白术，茯苓，甘草，白芍，丹皮，扼子，柴胡，薄荷，生姜。', 4, 1, 1, 0, -4287.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '丹枝逍遥片', '疏肝健脾，养血调经。用治肝脾，血虚郁热，头晕目眩，全身搔痒，胸胁腹痛，口燥咽干，食少嗑卧，小便涩滞，月事不调等症。', '2019-10-14 00:33:06', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (693, 'BASIC', '甘露清热片', '甘露清热片S', 'P017', 1, 3, 1000.00, '{[!UDAxNw!]}', '功能与主治:
用于夏日肠胃性发热，黄疽，喉炎，耳下腺炎及胸闷，溺赤等症。

主要组成:
茵陈，通草，连翘，薄荷，射干，黄芩，滑石，石菖蒲，广藿香，川贝母，白豆蔻', 5, 1, 1, 0, -1684.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '甘露清热片', '用于夏日肠胃性发热，黄疽，喉炎，耳下腺炎及胸闷，溺赤等症。', '2019-10-14 00:35:27', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (694, 'BASIC', '祛湿清热片', '祛湿清热片S', 'P020', 1, 3, 1000.00, '{[!UDAyMA!]}', '功能与主治：
去湿利水，清热解毒，清心火。适用于喉痛，牙痛，耳痛，头痛，发热，不思饮食。口鼻生疮，面生暗疮，大便燥结，肠胃湿热，舌苔粗厚，痰多咳嗽，胃湿口臭，烟酒过多，小便赤黄，大便不通，眼起红根，喉乾鼻热。

主要组成：
枝子，黄芩，白芍，桔梗，甘草，桑叶，连翘，穿心莲，板蓝根，金银花。', 9, 1, 1, 0, -1161.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '祛湿清热片', '去湿利水，清热解毒，清心火。适用于喉痛，牙痛，耳痛，头痛，发热，不思饮食。口鼻生疮，面生暗疮，大便燥结，肠胃湿热，舌苔粗厚，痰多咳嗽，胃湿口臭，烟酒过多，小便赤黄，大便不通，眼起红根，喉乾鼻热。', '2019-10-14 00:37:20', '2022-09-28 06:28:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (695, 'BASIC', '藿香正气片', '藿香正气片S', 'P021', 1, 3, 1000.00, '{[!UDAyMQ!]}', '功能与主治：
解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。

主要组成：
霍香，紫苏叶，陈皮，苍术，神曲，茯苓，桔梗，法夏，大腹皮，炙甘草等。', 19, 1, 1, 0, -4435.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '藿香正气片', '解表和中，理气化湿。用于感冒及消化不良引起的腹痛，吐泻。', '2019-10-14 00:42:40', '2022-09-27 07:17:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (696, 'BASIC', '十全大补片', '十全大补片S', 'P022', 1, 3, 1000.00, '{[!UDAyMg!]}', '功能与主治:
温补气血。用于气血两虚，面色苍白气短心悸，体倦乏力，四肢不温。

主要组成:
人参，茯苓，当归，川芎，黄芪，白术，甘草，白芍，熟地，肉桂，生姜，大枣。', 2, 1, 1, 0, -149.000000, 0, 2, 1, 0, 70.000000, null, 10, 10, 10, 10, '十全大补片', '温补气血。用于气血两虚，面色苍白气短心悸，体倦乏力，四肢不温。', '2019-10-14 00:45:27', '2022-09-24 12:03:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (697, 'BASIC', '女科八珍片', '女科八珍片S', 'P023', 1, 3, 1000.00, '{[!UDAyMw!]}', '功能与主治:
平补血气。用于气弱血亏，型容憔悴，四肢倦怠，妇女月经不调，产后病后衰弱。

主要组成:
熟地黄，白芍，当归，川芎， 党参，白术，茯苓，炙甘草。', 4, 1, 1, 0, -999.000000, 0, 2, 1, 0, 70.000000, null, 10, 10, 10, 10, '女科八珍片', '平补血气。用于气弱血亏，型容憔悴，四肢倦怠，妇女月经不调，产后病后衰弱。', '2019-10-14 00:46:25', '2022-09-26 03:24:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (698, 'BASIC', '桂枝茯苓片', '桂枝茯苓片S', 'P024', 1, 3, 1000.00, '{[!UDAyNA!]}', '功能与主治：
活血化瘀，消症。妇女小腹有积块按痛，腹孪急心及妇身困难或闭腹痛或产后恶露不尽，腹热炽等症。

主要组成：
桂枝，桃仁，赤芍，莪术，茯苓，丹皮，三棱。', 10, 1, 1, 0, -1340.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '桂枝茯苓片', '活血化瘀，消症。妇女小腹有积块按痛，腹孪急心及妇身困难或闭腹痛或产后恶露不尽，腹热炽等症。', '2019-10-14 00:48:16', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (699, 'BASIC', '天麻田七片', '天麻田七片S', 'P025', 1, 3, 1000.00, '{[!UDAyNQ!]}', '功能与主治：
祛风，通血脉。眩晕眼黑，头风头痛，肢体麻木。

主要组成：
天麻，田七，首乌，女贞子，五味子。', 4, 1, 1, 0, -567.000000, 0, 2, 1, 0, 93.000000, null, 10, 10, 10, 10, '天麻田七片', '祛风，通血脉。眩晕眼黑，头风头痛，肢体麻木。', '2019-10-14 00:49:47', '2022-09-27 02:16:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (700, 'BASIC', '消肿活血片', '消肿活血片S', 'P027', 1, 3, 1000.00, '{[!UDAyNw!]}', '功能与主治：
活血消肿，舒筋接骨。跌打刀伤，脱臼，骨折裂，跌打肿痛，扭伤挫伤，关节扭伤之屈伸障碍等。

主要组成：
续断，赤芍，泽兰，桂枝，牛膝，当归，田七，大丁香。', 10, 1, 1, 0, -1144.000000, 0, 2, 1, 0, 95.000000, null, 10, 10, 10, 10, '消肿活血片', '活血消肿，舒筋接骨。跌打刀伤，脱臼，骨折裂，跌打肿痛，扭伤挫伤，关节扭伤之屈伸障碍等。', '2019-10-14 00:54:51', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (701, 'BASIC', '偏头痛片', '偏头痛片S', 'P028', 1, 3, 1000.00, '{[!UDAyOA!]}', '偏头痛片', 11, 1, 1, 0, -369.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '偏头痛片', null, '2019-10-14 01:00:39', '2022-09-27 01:40:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (702, 'BASIC', '筋骨跌伤片', '筋骨跌伤片S', 'P030', 1, 3, 1000.00, '{[!UDAzMA!]}', '功能与主治：
舒筋活络，散瘀止痛。跌打损伤，瘀血疼痛，扭伤，挫伤，风湿关节痛。

主要组成：
当归，首乌，姜黄，砂仁，郁金，田七，红花，青皮，蒲黄，骨碎补。', 12, 1, 1, 0, -1122.000000, 0, 2, 1, 0, 90.000000, null, 10, 10, 10, 10, '筋骨跌伤片', '舒筋活络，散瘀止痛。跌打损伤，瘀血疼痛，扭伤，挫伤，风湿关节痛。', '2019-10-14 01:07:06', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (703, 'BASIC', '天王补心片', '天王补心片S', 'P034', 1, 3, 1000.00, '{[!UDAzNA!]}', '功能与主治:
滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。

主要组成:
生地，党参，玄参，丹参，茯苓，桔梗，远志，酸枣仁，柏子仁，天冬，当归，麦冬， 五味子。', 4, 1, 1, 0, -2116.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '天王补心片', '滋阴清热，补心安神。用于治心血不足，神志不宁，津液枯竭，健忘怔忡，大便不利，口舌生疮。', '2019-10-14 01:30:29', '2022-09-26 07:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (704, 'BASIC', '生脉饮片', '生脉饮片S', 'P035', 1, 3, 1000.00, '{[!UDAzNQ!]}', '功能与主治：
益气生津，敛阴止汗。主治气阴不足，症见多汗口渴，气短体倦，脉细弱以久咳伤肺，气阴两伤之自汗气短者。

主要组成：
人参，麦冬，五味子。', 5, 1, 1, 0, -1656.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '生脉饮片', '益气生津，敛阴止汗。主治气阴不足，症见多汗口渴，气短体倦，脉细弱以久咳伤肺，气阴两伤之自汗气短者。', '2019-10-14 01:31:37', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (705, 'BASIC', '龙胆泻肝片', '龙胆泻肝片S', 'P036', 1, 3, 1000.00, '{[!UDAzNg!]}', '功能与主治：
泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。

主要组成：
泽泻，生地，柴胡，通草，甘草，黄芩，栀子，当归，龙胆草，车前子。', 5, 1, 1, 0, -3570.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '龙胆泻肝片', '泻肝胆经湿热。用于肝胆实火上扰所致头痛，目赤，胁痛，口苦易怒，耳聋耳肿及小便淋涩等症。', '2019-10-14 01:33:53', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (706, 'BASIC', '安神定志片', '安神定志片S', 'P037', 1, 3, 1000.00, '{[!UDAzNw!]}', '安神定志片', 6, 1, 1, 0, -1192.000000, 0, 2, 1, 0, 82.000000, null, 10, 10, 10, 10, '安神定志片', null, '2019-10-14 01:34:57', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (707, 'BASIC', '安睡枕中片', '安睡枕中片S', 'P038', 1, 3, 1000.00, '{[!UDAzOA!]}', '功能与主治：
补益气血，滋阴降火，镇心安神，增强记忆。阴虚火旺所致之心悸怔仲，多梦，头痛耳鸣，并治神经分裂症。

主要组成：
知母，丹参，远志，麦冬，白术，酸枣仁，石菖蒲，五味子。', 6, 1, 1, 0, -994.000000, 0, 2, 1, 0, 86.000000, null, 10, 10, 10, 10, '安睡枕中片', '补益气血，滋阴降火，镇心安神，增强记忆。阴虚火旺所致之心悸怔仲，多梦，头痛耳鸣，并治神经分裂症。', '2019-10-14 01:58:28', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (708, 'BASIC', '复方丹参片', '复方丹参片S', 'P040', 1, 3, 1000.00, '{[!UDA0MA!]}', '功能与主治：
活血化瘀，芳香开窍，理气止痛，强心生脉。本品为治疗冠心病药，适用於胸闷及心绞痛。

主要组成：
丹参，三七，人参，麦冬，苏合香。', 9, 1, 1, 0, -3402.000000, 0, 2, 1, 0, 90.000000, null, 10, 10, 10, 10, '复方丹参片', '活血化瘀，芳香开窍，理气止痛，强心生脉。本品为治疗冠心病药，适用於胸闷及心绞痛。', '2019-10-14 02:01:20', '2022-09-28 04:35:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (709, 'BASIC', '补中益气片', '补中益气片S', 'P042', 1, 3, 1000.00, '{[!UDA0Mg!]}', '功能与主治：
补中益气，升清降浊。中气不足，肠胃衰弱，食欲不振，精神倦怠，头痛懒言，阳虚自汗。

主要组成：
黄芪，党参，当归，陈皮，白术，甘草，升麻，柴胡，大枣，生姜。', 7, 1, 1, 0, -2530.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '补中益气片', '补中益气，升清降浊。中气不足，肠胃衰弱，食欲不振，精神倦怠，头痛懒言，阳虚自汗。', '2019-10-14 02:02:47', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (710, 'BASIC', '复方山楂降脂片', '复方山楂降脂片S', 'P044', 1, 3, 1000.00, '{[!UDA0NA!]}', '功能与主治：
活血化瘀，降脂减肥。用於高血压，伴有脑动脉硬化，冠心病，肥胖等症。

主要组成：
山楂，田七，丹参，泽泻，川芎，党参，首乌，当归，黄精。', 9, 1, 1, 0, -2400.000000, 0, 2, 1, 0, 88.000000, null, 10, 10, 10, 10, '复方山楂降脂片', '活血化瘀，降脂减肥。用於高血压，伴有脑动脉硬化，冠心病，肥胖等症。', '2019-10-14 02:04:07', '2022-09-23 09:31:45', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (711, 'BASIC', '六味地黄片', '六味地黄片S', 'P049', 1, 3, 1000.00, '{[!UDA0OQ!]}', '功能与主治:
滋阴降火。身体虚弱，肝肾阴虚，头目晕眩，耳鸣耳聋，舌燥喉痛，腰膝酸痛。

主要组成:
熟地，丹皮，淮山，茯苓，泽泻，山茱萸。', 4, 1, 1, 0, -2546.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '六味地黄片', '滋阴降火。身体虚弱，肝肾阴虚，头目晕眩，耳鸣耳聋，舌燥喉痛，腰膝酸痛。', '2019-10-14 02:05:28', '2022-09-26 03:59:45', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (712, 'BASIC', '平胃片', '平胃片S', 'P051', 1, 3, 1000.00, '{[!UDA1MQ!]}', '功能与主治：
消化不良，食欲不振及神经性之胃痛。健胃，整肠，适用於消化障碍，呕吐，腹痛，胃酸过多，腹气胀等。

主要组成：
苍术，枳壳，陈皮，甘草。', 5, 1, 1, 0, -3792.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '平胃片', '消化不良，食欲不振及神经性之胃痛。健胃，整肠，适用於消化障碍，呕吐，腹痛，胃酸过多，腹气胀等。', '2019-10-14 02:06:29', '2022-09-26 07:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (713, 'BASIC', '归脾片', '归脾片S', 'P052', 1, 3, 1000.00, '{[!UDA1Mg!]}', '功能与主治：
健脾养心，益气补血。用于治心力衰弱，神经衰弱，脾臓不运，食少倦怠及因贫血引起的失眠心悸，精神性头痛及月事不调。

主要组成：
当归，黄芪，白术，茯苓，党参，生姜，远志，大枣，木香，甘草，酸枣仁，桂元肉。', 5, 1, 1, 0, -2170.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '归脾片', '健脾养心，益气补血。用于治心力衰弱，神经衰弱，脾臓不运，食少倦怠及因贫血引起的失眠心悸，精神性头痛及月事不调。', '2019-10-14 19:08:17', '2022-09-26 07:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (714, 'BASIC', '芳香化湿片', '芳香化湿片S', 'P053', 1, 3, 1000.00, '{[!UDA1Mw!]}', '功能与主治：
芳香化湿，理气和中，清热化痰。外感风寒，湿热内阻，痰浊上扰。症见发热恶寒，不思饮食，胸膈满闷，呕吐痰延，或脘腹胀痛，肠鸣泄泻，舌苔厚腻等。

主要组成：
藿香，陈皮，仓术，茯苓，泽泻，佩兰，地肤子，白鲜皮。', 7, 1, 1, 0, -104.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '芳香化湿片', '芳香化湿，理气和中，清热化痰。外感风寒，湿热内阻，痰浊上扰。症见发热恶寒，不思饮食，胸膈满闷，呕吐痰延，或脘腹胀痛，肠鸣泄泻，舌苔厚腻等。', '2019-10-14 19:17:19', '2022-09-13 04:14:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (715, 'BASIC', '参苓白术片', '参苓白术片S', 'P054', 1, 3, 1000.00, '{[!UDA1NA!]}', '功能与主治：
补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷诸症。

主要组成：
人参，莲子，桔梗，山药，甘草，白术，茯苓，砂仁，薏苡仁，白扁豆，。', 8, 1, 1, 0, -1890.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '参苓白术片', '补脾胃，益肺气。用于脾胃虚弱，食少便溏，肢倦乏力，气短咳嗽，胸脘满闷诸症。', '2019-10-14 19:26:27', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (716, 'BASIC', '保和片', '保和片S', 'P055', 1, 3, 1000.00, '{[!UDA1NQ!]}', '功能与主治：
消食和胃。食积停滞，胸脘痞滞，腹胀时痛，嗳腐吞酸，厌食呕恶，或大便稀烂，苔厚脉滑者。

主要组成：
山楂，茯苓，连翘，神曲，麦芽，陈皮，莱菔子，制半夏。', 9, 1, 1, 0, -2573.000000, 0, 2, 1, 0, 70.000000, null, 10, 10, 10, 10, '保和片', '消食和胃。食积停滞，胸脘痞滞，腹胀时痛，嗳腐吞酸，厌食呕恶，或大便稀烂，苔厚脉滑者。', '2019-10-14 19:28:09', '2022-09-22 07:47:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (717, 'BASIC', '香砂六君子片', '香砂六君子片S', 'P056', 1, 3, 1000.00, '{[!UDA1Ng!]}', '功能与主治：
消化不良，胸脘满闷，恶呕腹痛，肠鸣泄泻。

主要组成：
木香，砂仁，党参，白术，茯苓，甘草，陈皮，生姜，大枣，制法夏。', 9, 1, 1, 0, -1915.000000, 0, 2, 1, 0, 77.000000, null, 10, 10, 10, 10, '香砂六君子片', '消化不良，胸脘满闷，恶呕腹痛，肠鸣泄泻。', '2019-10-14 19:30:01', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (718, 'BASIC', '香砂养胃片', '香砂养胃片S', 'P057', 1, 3, 1000.00, '{[!UDA1Nw!]}', '功能与主治：
健胃消食，助气止痛。用於胃肠衰弱，消化不良，胸腹痛，呕吐，肠鸣泄泻。

主要组成：
陈皮、甘草、木香、白术、藿香、香附、茯苓、苍术、砂仁、积宽、豆蔻、生姜、大枣、制半夏。', 9, 1, 1, 0, -2322.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '香砂养胃片', '健胃消食，助气止痛。用於胃肠衰弱，消化不良，胸腹痛，呕吐，肠鸣泄泻。', '2019-10-14 19:31:14', '2022-09-26 07:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (719, 'BASIC', '益气缩泉片', '益气缩泉片S', 'P058', 1, 3, 1000.00, '{[!UDA1OA!]}', '功能与主治：
开窍益智，缩尿益气。日夜小便频数，遗滴不固，腰酸腿软，各种遗尿症。

主要组成：
党参，巴戟，益智仁，石菖蒲，五味子，菟丝子，肉蓰蓉，桑螵蛸，枸杞子，补骨脂。', 10, 1, 1, 0, -693.000000, 0, 2, 1, 0, 84.000000, null, 10, 10, 10, 10, '益气缩泉片', '开窍益智，缩尿益气。日夜小便频数，遗滴不固，腰酸腿软，各种遗尿症。', '2019-10-14 19:32:43', '2022-09-19 08:13:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (720, 'BASIC', '六君子片', '六君子片S', 'P060', 1, 3, 1000.00, '{[!UDA2MA!]}', '功能与主治：
胃肠衰弱，营养障碍，体力不足，排痰困难。

主要组成：
党参，白术，茯苓，陈皮，甘草，制半夏。', 4, 1, 1, 0, -1186.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '六君子片', '胃肠衰弱，营养障碍，体力不足，排痰困难。', '2019-10-14 19:35:22', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (721, 'BASIC', '脱痔片', '脱痔片S', 'P061', 1, 3, 1000.00, '{[!UDA2MQ!]}', '功能与主治：
清热润肠，止疼止血，消瘀散结，消肿生肌。用于外痔，内痨，脱肛痨，凸肠头痔，血痔，血栓痔，久痔以及上述诸痔的便后出血。

主要组成：
田七，槐角，槐花，地榆，紫珠，甘草，当归，金银花，盐霜柏。', 11, 1, 1, 0, -512.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '脱痔片', '清热润肠，止疼止血，消瘀散结，消肿生肌。用于外痔，内痨，脱肛痨，凸肠头痔，血痔，血栓痔，久痔以及上述诸痔的便后出血。', '2019-10-14 19:38:16', '2022-09-26 03:21:41', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (722, 'BASIC', '仙方活命片', '仙方活命片S', 'P062', 1, 3, 1000.00, '{[!UDA2Mg!]}', '功能与主治：
清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。

主要组成：
白芷，当归尾，金银花，陈皮，防风，皂角刺，浙贝母，乳香，天花粉，甘草，赤芍，没药。', 5, 1, 1, 0, -1727.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '仙方活命片', '清热解毒，消肿溃坚，活血止痛。用于主治疮疡肿毒初起，患部红肿热痛，或发热微恶寒，苔薄白或微黄，脉数有力。', '2019-10-14 19:47:02', '2022-09-27 01:22:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (723, 'BASIC', '风疹止痒灵片', '风疹止痒灵片S', 'P064', 1, 3, 1000.00, '{[!UDA2NA!]}', '功能与主治：
养血熄风，祛湿止痒，急慢性麻疹，湿疹阴瘠，血虚血热以致之皮肤搔痒症性皮肤病等症。

主要组成：
生地，当归，赤芍，丹皮，白术，紫草，苦参，蝉蜕，荆芥穗，蛇床子，苍耳子，地虏子，土茯苓。', 4, 1, 1, 0, -1007.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '风疹止痒灵片', '养血熄风，祛湿止痒，急慢性麻疹，湿疹阴瘠，血虚血热以致之皮肤搔痒症性皮肤病等症。', '2019-10-14 19:49:43', '2022-09-22 07:51:17', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (724, 'BASIC', '皮肤止痒片', '皮肤止痒片S', 'P065', 1, 3, 1000.00, '{[!UDA2NQ!]}', '功能与主治：
清热燥湿，祛风解毒。用于急慢性湿疹，风疹，阴囊炎等症。

主要组成：
菊花，丹皮，茯苓，黄芩，苦参，通草，蝉蜕，防风，栀子，赤芍，地肤子，白疾藜。', 5, 1, 1, 0, -818.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '皮肤止痒片', '清热燥湿，祛风解毒。用于急慢性湿疹，风疹，阴囊炎等症。', '2019-10-14 19:51:32', '2022-09-22 01:17:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (725, 'BASIC', '湿毒痒痛灵片', '湿毒痒痛灵片S', 'P067', 1, 3, 1000.00, '{[!UDA2Nw!]}', '湿毒痒痛灵片', 12, 1, 1, 0, -776.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '湿毒痒痛灵片', null, '2019-10-14 19:53:27', '2022-09-23 09:32:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (726, 'BASIC', '四藤片', '四藤片S', 'P070', 1, 3, 1000.00, '{[!UDA3MA!]}', '功能与主治：
镇痛袪风，适用於风湿性关节炎。

主要组成：
石楠藤，海风藤，鸡血藤，忍冬藤。', 5, 1, 1, 0, -576.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '四腾片', '镇痛袪风，适用於风湿性关节炎。', '2019-10-14 19:56:38', '2022-09-28 06:58:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (727, 'BASIC', '田七杜仲片', '田七杜仲片S', 'P071', 1, 3, 1000.00, '{[!UDA3MQ!]}', '田七杜仲片', 5, 1, 1, 0, -873.000000, 0, 2, 1, 0, 96.000000, null, 10, 10, 10, 10, '田七杜仲片', null, '2019-10-14 19:59:37', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (728, 'BASIC', '关节骨痛片', '关节骨痛片S', 'P073', 1, 3, 1000.00, '{[!UDA3Mw!]}', '功能与主治：
驱风怯湿，通络止痛。风湿骨痛，腰膝酸痛，四肢痹痛及关节炎等。

主要组成：
桑枝，独活，姜活，石膏，防风，桂枝，丁公藤，豨签草。', 6, 1, 1, 0, -522.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '关节骨痛片', '驱风怯湿，通络止痛。风湿骨痛，腰膝酸痛，四肢痹痛及关节炎等。', '2019-10-14 20:00:45', '2022-09-24 12:08:58', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (729, 'BASIC', '足跟痛片', '足跟痛片S', 'P075', 1, 3, 1000.00, '{[!UDA3NQ!]}', '功能与主治：
益肝壮腰，补筋强骨。用于足跟痛，腰腿酸痛，肝肾虚弱等症。

主要组成：
黄芪，地龙，白芍，熟地，杞子，当归，赤芍，生地，山药，牛膝，车前子，五味子。', 7, 1, 1, 0, -645.000000, 0, 2, 1, 0, 88.000000, null, 10, 10, 10, 10, '足跟痛片', '益肝壮腰，补筋强骨。用于足跟痛，腰腿酸痛，肝肾虚弱等症。', '2019-10-14 20:08:08', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (730, 'BASIC', '独活寄生片', '独活寄生片S', 'P079', 1, 3, 1000.00, '{[!UDA3OQ!]}', '功能与主治：
祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。

主要组成：
独活，牛膝，秦艽，茯苓，肉桂，防风，川芎，党参，甘草，当归，白芍，杜仲，桑寄生，熟地黄。', 9, 1, 1, 0, -2797.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '独活寄生片', '祛风湿，止痹痛，益肝肾，补气血。用于肝肾两亏，气血不足，受风湿邪，腰膝冷痛，冷痹无力，屈伸不利。', '2019-10-14 20:17:12', '2022-09-28 06:58:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (731, 'BASIC', '复方鸡血藤片', '复方鸡血藤片S', 'P081', 1, 3, 1000.00, '{[!UDA4MQ!]}', '功能与主治：
补血行血，袪风除湿，舒筋活络，补肝壮骨。筋骨酸软，四肢麻木，腰膝酸痛，筋脉拘挛等症。

主要组成：
当归，牛膝，鸡血藤，豆鼓姜，海风藤，半枫荷叶，枫香寄生。', 9, 1, 1, 0, -460.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '复方鸡血腾片', '补血行血，袪风除湿，舒筋活络，补肝壮骨。筋骨酸软，四肢麻木，腰膝酸痛，筋脉拘挛等症。', '2019-10-14 20:18:42', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (732, 'BASIC', '通血活络片', '通血活络片S', 'P084', 1, 3, 1000.00, '{[!UDA4NA!]}', '功能与主治：
活血祛瘀，袪风通络，利关节。关节骨痛，四肢麻痹，风湿性关节炎等症。

主要组成：
乳香，丹参，秦艽，杜仲，黄芪，没药，桑枝，石楠藤，海风藤，忍冬藤。', 10, 1, 1, 0, -124.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '通血活络片', '活血祛瘀，袪风通络，利关节。关节骨痛，四肢麻痹，风湿性关节炎等症。', '2019-10-14 20:23:35', '2022-09-22 03:19:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (733, 'BASIC', '鸡血腾片', '鸡血腾片S', 'P085', 1, 3, 1000.00, '{[!UDA4NQ!]}', '鸡血腾片', 7, 1, 1, 0, -605.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '鸡血腾片', null, '2019-10-14 20:28:19', '2022-09-26 08:38:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (734, 'BASIC', '野木瓜片', '野木瓜片S', 'P086', 1, 3, 1000.00, '{[!UDA4Ng!]}', '功能与主治：
袪风止痛，舒筋活筋。三叉神经痛，坐骨神经痛，神经性头痛，风湿性关节痛。

主要组成：
野木瓜', 11, 1, 1, 0, -184.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '野木瓜片', '袪风止痛，舒筋活筋。三叉神经痛，坐骨神经痛，神经性头痛，风湿性关节痛。', '2019-10-14 20:29:48', '2022-09-06 07:32:24', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (735, 'BASIC', '舒筋活络片', '舒筋活络片S', 'P088', 1, 3, 1000.00, '{[!UDA4OA!]}', '功能与主治：
养血补血，强壮筋骨，活血袪风，通络止痛。急慢性风湿关节炎，腰腿酸痛。对平素气血虚弱而患有慢性风湿的老人和妇女，疗效尤为可靠。

主要组成：
田七，牛膝，独活，当归，鸡血藤，海风藤，石楠藤，枫香寄生，半枫荷叶。', 12, 1, 1, 0, -2845.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '舒筋活络片', '养血补血，强壮筋骨，活血袪风，通络止痛。急慢性风湿关节炎，腰腿酸痛。对平素气血虚弱而患有慢性风湿的老人和妇女，疗效尤为可靠。', '2019-10-14 20:33:33', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (736, 'BASIC', '舒脊灵片', '舒脊灵片S', 'P089', 1, 3, 1000.00, '{[!UDA4OQ!]}', '功能与主治：
通络活血，利湿强筋骨。项强，颈肩臂痛，用於脊柱病等症。

主要组成：
丹参，熟地，当归，白芍，川芎，独活，葛根，鹿衔草，薏苡仁。', 12, 1, 1, 0, -275.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '舒脊灵片', '通络活血，利湿强筋骨。项强，颈肩臂痛，用於脊柱病等症。', '2019-10-15 00:11:30', '2022-09-24 12:05:15', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (737, 'BASIC', '腰腿痛片', '腰腿痛片S', 'P090', 1, 3, 1000.00, '{[!UDA5MA!]}', '功能与主治：
捕益肝肾。强筋状骨。肝肾虚弱，腰膝酸痛，足跟痛等症。

主要组成：
北芪，牛膝，桂枝，当归，白芍，赤芍，生地，白芷，独活，木瓜， 炙甘草。', 13, 1, 1, 0, -272.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '腰腿痛片', '捕益肝肾。强筋状骨。肝肾虚弱，腰膝酸痛，足跟痛等症。', '2019-10-15 00:14:38', '2022-09-27 02:17:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (738, 'BASIC', '膝痹灵片', '膝痹灵片S', 'P091', 1, 3, 1000.00, '{[!UDA5MQ!]}', '功能与主治:
温通经络，祛风利湿。腰膝酸痛无力，风寒湿痹，双膝关节不利。慢性与风寒湿较实用。

主要组成:
木瓜，生姜，陈片，牛膝，桔梗，槟榔，桑枝，杜仲，独活，紫苏叶，吳茱萸。', 15, 1, 1, 0, -613.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '膝痹灵片', '温通经络，祛风利湿。腰膝酸痛无力，风寒湿痹，双膝关节不利。慢性与风寒湿较实用。', '2019-10-15 00:16:30', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (739, 'BASIC', '复方四藤祛风片', '复方四藤祛风片S', 'P092', 1, 3, 1000.00, '{[!UDA5Mg!]}', '功能与主治：
袪风除湿，舒筋活络，通血壮骨。风湿性关节炎，腰腿酸痛，以及气血不通引起的四肢麻木痹痛等症。

主要组成：
当归，甘草，石楠藤，穿根藤，忍冬藤，海风藤，饭团藤，淫羊藿，千年健，毛冬青。', 9, 1, 1, 0, -667.000000, 0, 2, 1, 0, 86.000000, null, 10, 10, 10, 10, '复方四腾祛风片', '袪风除湿，舒筋活络，通血壮骨。风湿性关节炎，腰腿酸痛，以及气血不通引起的四肢麻木痹痛等症。', '2019-10-15 00:22:39', '2022-09-22 07:47:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (740, 'BASIC', '抗骨增生片', '抗骨增生片S', 'P093', 1, 3, 1000.00, '{[!UDA5Mw!]}', '功能与主治：
壮腰键肾，强壮筋骨，养血止痛。用於增生性脊椎炎肥大性胸椎炎，颈椎综合症，骨刺等骨质增生症。

主要组成：
狗脊，牛膝，熟地黄，淫羊藿，鸡血藤，肉蓰蓉，莱菔子，骨碎补，女贞子。', 7, 1, 1, 0, -1264.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '抗骨增生片', '壮腰键肾，强壮筋骨，养血止痛。用於增生性脊椎炎肥大性胸椎炎，颈椎综合症，骨刺等骨质增生症。
​', '2019-10-15 00:25:18', '2022-09-28 06:58:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (741, 'BASIC', '气管炎咳喘片', '气管炎咳喘片S', 'P095', 1, 3, 1000.00, '{[!UDA5NQ!]}', '功能与主治：
散风缜咳，祛痰定喘。感冒风邪，气管炎，肺热咳嗽，气促气喘不能躺卧，喉中作痒，痰涎壅盛，胸腹满闷，老年痰喘，支气管扩张，支气管缩萎等症。

主要组成：
前胡，远志，大枣，桑叶，生姜，陈皮，贝母，杏仁，党参，款冬花，枇杷叶，五味子等。', 10, 1, 1, 0, -929.000000, 0, 2, 1, 0, 82.000000, null, 10, 10, 10, 10, '气管炎咳喘片', '散风缜咳，祛痰定喘。感冒风邪，气管炎，肺热咳嗽，气促气喘不能躺卧，喉中作痒，痰涎壅盛，胸腹满闷，老年痰喘，支气管扩张，支气管缩萎等症。', '2019-10-15 00:32:34', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (742, 'BASIC', '止咳化痰片', '止咳化痰片S', 'P096', 1, 3, 1000.00, '{[!UDA5Ng!]}', '功能与主治：
滋阴清肺，化痰止咳，平喘。急慢性支气管炎，肺炎，痰多气喘，久咳不愈，有肺热者，也适用於诸般咳嗽。

主要组成：
苏子，知母，陈皮，白芷，黄芩，百合，制半夏，五味子，葶苈子。', 4, 1, 1, 0, -1002.000000, 0, 2, 1, 0, 82.000000, null, 10, 10, 10, 10, '止咳化痰片', '滋阴清肺，化痰止咳，平喘。急慢性支气管炎，肺炎，痰多气喘，久咳不愈，有肺热者，也适用於诸般咳嗽。', '2019-10-15 00:34:30', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (743, 'BASIC', '顺气化痰止咳片', '顺气化痰止咳片S', 'P097', 1, 3, 1000.00, '{[!UDA5Nw!]}', '功能与主治：
顺气化痰止咳。慢性支气管疾病，老中性支气管疾病，感冒咳嗽。

主要组成：
桂枝，白芍，甘草，五味子，制半夏。', 9, 1, 1, 0, -38.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '顺气化痰止咳片', '顺气化痰止咳。慢性支气管疾病，老中性支气管疾病，感冒咳嗽。', '2019-10-15 00:46:32', '2022-09-27 06:05:11', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (744, 'BASIC', '精制蛤蚧顺气片', '精制蛤蚧顺气片S', 'P098', 1, 3, 1000.00, '{[!UDA5OA!]}', '功能与主治：
滋阴清肺，化痰止咳，益肾顺气。慢性支气管疾病，支气管哮喘，肺气肿等咳症。

主要组成：
龟甲，石膏，紫苑，蛤蚧，龙胆，黄芩，麦冬，百合，甘草，龙骨，瓜蒌仁，虾石膏，紫苏子。', 14, 1, 1, 0, -14.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '精制蛤蚧顺气片', '滋阴清肺，化痰止咳，益肾顺气。慢性支气管疾病，支气管哮喘，肺气肿等咳症。', '2019-10-15 00:52:27', '2022-03-13 06:24:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (745, 'BASIC', '复方罗布麻片', '复方罗布麻片S', 'P100', 1, 3, 1000.00, '{[!UDEwMA!]}', '功能与主治：
降压药，清热，平肝，安神。用于髙血压，神经衰弱引起的头晕，心悸，失眠等症。

主要组成：
山楂，牛膝，钩藤，泽泻，菊花，杜仲，罗布麻，夏枯草，珍珠母，龙胆草。', 9, 1, 1, 0, -790.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '复方罗布麻片', '降压药，清热，平肝，安神。用于髙血压，神经衰弱引起的头晕，心悸，失眠等症。', '2019-10-15 00:54:11', '2022-09-27 03:39:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (746, 'BASIC', '左归片', '左归片S', 'P101', 1, 3, 1000.00, '{[!UDEwMQ!]}', '功能与主治：
真阳肾水不足，精髄内亏。证见头晕目花，腰酸腿软，自汗盗汗，遗精，滑泄，口干咽燥，渴欲饮水，舌光少苔，脉细数。

主要组成：
牛膝，阿胶，山药，熟地黄，菟丝子，龟板胶，山茱萸，枸杞子。', 5, 1, 1, 0, -613.000000, 0, 2, 1, 0, 135.000000, null, 10, 10, 10, 10, '左归片', '真阳肾水不足，精髄内亏。证见头晕目花，腰酸腿软，自汗盗汗，遗精，滑泄，口干咽燥，渴欲饮水，舌光少苔，脉细数。', '2019-10-15 00:59:42', '2022-09-26 03:59:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (747, 'BASIC', '右归片', '右归片S', 'P102', 1, 3, 1000.00, '{[!UDEwMg!]}', '功能与主治：
元阳不足，命门虚冷。证见久病气怯神疲，畏寒肢冷；或阳痿遗精，或阳衰无子；或小便自遗；或腰膝软弱，下肢浮肿；或饮食少进，大便不实。

主要组成：
熟地，山药，杜仲，当归，肉桂，干姜，枸杞子，菟丝子，鹿角胶，山茱萸。', 5, 1, 1, 0, -1009.000000, 0, 2, 1, 0, 135.000000, null, 10, 10, 10, 10, '右归片', '元阳不足，命门虚冷。证见久病气怯神疲，畏寒肢冷；或阳痿遗精，或阳衰无子；或小便自遗；或腰膝软弱，下肢浮肿；或饮食少进，大便不实。', '2019-10-15 01:06:13', '2022-09-26 03:59:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (748, 'BASIC', '防风通圣片', '防风通圣片S', 'P105', 1, 3, 1000.00, '{[!UDEwNQ!]}', '功能与主治：
感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。

主要组成：
防风，荆芥，薄荷，桂枝，大黄，芒硝，栀子，滑石，桔梗，石膏，川芎，当归，白芍，黄芩，连翘，甘草，白术。', 6, 1, 1, 0, -574.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '防风通圣片', '感冒，憎寒发热，头痛身痛，鼻塞咳嗽，口舌干燥，大便秘结，小便短赤，兼治皮肤风痒各症。', '2019-10-15 01:08:13', '2022-09-26 03:21:41', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (749, 'BASIC', '清肺抑火片', '清肺抑火片S', 'P106', 1, 3, 1000.00, '{[!UDEwNg!]}', '功能与主治：
清肺止咳，降火生津。肺热咳嗽，痰涎壅盛，咽喉脾痛，口鼻生疮，牙齿疼痛，牙根出血，大便乾燥，小便赤黄。

主要组成：
黄芩，枝子，大黄，苦参，知母，桔梗，前胡，穿心莲，天花粉，浙贝母。', 11, 1, 1, 0, -1223.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '清肺抑火片', '清肺止咳，降火生津。肺热咳嗽，痰涎壅盛，咽喉脾痛，口鼻生疮，牙齿疼痛，牙根出血，大便乾燥，小便赤黄。', '2019-10-15 01:26:47', '2022-09-23 09:32:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (750, 'BASIC', '牛黄解毒片', '牛黄解毒片S', 'P107', 1, 3, 1000.00, '{[!UDEwNw!]}', '功能与主治：
头痛眩景，咽喉脾痛，胃火口疮，牙根出血，暴发火眼，咽肿发颐，耳痛鼻腺，风火牙痛，小儿内热，停食停乳，呕吐结滞。

主要组成：
牛黄，桔梗，薄荷，白芷，黄芩，黄连，大黄，栀子，金银花。', 4, 1, 1, 0, -958.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '牛黄解毒片', '头痛眩景，咽喉脾痛，胃火口疮，牙根出血，暴发火眼，咽肿发颐，耳痛鼻腺，风火牙痛，小儿内热，停食停乳，呕吐结滞。', '2019-10-15 01:28:31', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (751, 'BASIC', '枝子清火片', '枝子清火片S', 'P110', 1, 3, 1000.00, '{[!UDExMA!]}', '功能与主治：
清火解毒，凉血消肺，用于咽喉脯痛，牙痛自赤，身热懊恼，虚烦不眠等症。

主要组成：
栀子，麦冬，穿心莲。', 8, 1, 1, 0, -22.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '枝子清火片', '清火解毒，凉血消肺，用于咽喉脯痛，牙痛自赤，身热懊恼，虚烦不眠等症。', '2019-10-15 01:29:54', '2021-11-02 08:58:02', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (752, 'BASIC', '导赤片', '导赤片S', 'P114', 1, 3, 1000.00, '{[!UDExNA!]}', '功能与主治：
疏散风热，宣肺气，止咳嗽。适用于胃肠积热，口舌生疮，咽喉脾痛，牙根出血，腮颊肿痛，大便不适。

主要组成：
生地，茯苓，通草，栀子，赤芍，滑石，大黄。', 6, 1, 1, 0, -345.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '导赤片', '疏散风热，宣肺气，止咳嗽。适用于胃肠积热，口舌生疮，咽喉脾痛，牙根出血，腮颊肿痛，大便不适。', '2019-10-15 01:31:18', '2022-09-27 03:39:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (753, 'BASIC', '小青龙片', '小青龙片S', 'P115', 1, 3, 1000.00, '{[!UDExNQ!]}', '功能与主治：
解表散寒，温肺化软。用于支气管炎之咳喘，百日咳，发热，恶寒，头痛等症。

主要组成：
桂枝，白术，五味子，制半夏，干姜，甘草等。', 3, 1, 1, 0, -947.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '小青龙片', '解表散寒，温肺化软。用于支气管炎之咳喘，百日咳，发热，恶寒，头痛等症。', '2019-10-15 01:35:30', '2022-09-27 01:56:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (754, 'BASIC', '补血调经片', '补血调经片S', 'P117', 1, 3, 1000.00, '{[!UDExNw!]}', '补血调经片', 7, 1, 1, 0, -567.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '补血调经片', null, '2019-10-15 01:36:52', '2022-09-22 07:47:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (755, 'BASIC', '复方痹症片', '复方痹症片S', 'P118', 1, 3, 1000.00, '{[!UDExOA!]}', '复方痹症片', 9, 1, 1, 0, -23.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '复方痹症片', null, '2019-10-15 01:47:56', '2022-01-18 11:32:41', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (756, 'BASIC', '清毒消炎片', '清毒消炎片S', 'P121', 1, 3, 1000.00, '{[!UDEyMQ!]}', '清毒消炎片', 10, 1, 1, 0, -408.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '消毒消炎片', null, '2019-10-15 01:49:41', '2022-09-07 03:05:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (758, 'BASIC', '喉疾灵片', '喉疾灵片S', 'P123', 1, 3, 1000.00, '{[!UDEyMw!]}', '喉疾灵片', 12, 1, 1, 0, -11.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '喉疾灵片', null, '2019-10-15 01:59:15', '2022-06-14 08:49:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (759, 'BASIC', '桔红片', '桔红片S', 'P125', 1, 3, 1000.00, '{[!UDEyNQ!]}', '功能与主治：
用于咳嗽痰多，痰不易出，胸闷口干。

主要组成：
茯苓，生地，紫菀，陈皮，石膏，麦冬，甘草，杏仁，苏子，桔梗，制半夏，瓜箕皮，浙贝母，款冬花，化橘红。', 10, 1, 1, 0, -256.000000, 0, 2, 2, 0, 93.000000, null, 10, 10, 10, 10, '桔红片', '用于咳嗽痰多，痰不易出，胸闷口干。', '2019-10-15 02:04:20', '2022-09-26 07:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (760, 'BASIC', '养阴清肺片', '养阴清肺片S', 'P128', 1, 3, 1000.00, '{[!UDEyOA!]}', '功能与主治：
养阴清肺，凉血解毒。主治白喉，症见喉间起白斑点如腐，不易拭去，呼吸有声，或咳或不咳，发热，鼻乾唇燥，舌红苔白薄。

主要组成：
生地，麦冬，玄参，丹皮，白芍，甘草，薄荷，浙贝母。', 9, 1, 1, 0, -1037.000000, 0, 2, 2, 0, 77.000000, null, 10, 10, 10, 10, '养阴清肺片', '养阴清肺，凉血解毒。主治白喉，症见喉间起白斑点如腐，不易拭去，呼吸有声，或咳或不咳，发热，鼻乾唇燥，舌红苔白薄。', '2019-11-26 23:00:14', '2022-09-27 02:17:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (761, 'BASIC', '降脂片', '降脂片S', 'P129', 1, 3, 1000.00, '{[!UDEyOQ!]}', '功能与主治：
髙血脂，冠心痛，髙血压，肥胖等症。

主要组成：
山楂，首乌，黄精，木香，泽泻，决明子，桑寄生，金樱子。', 9, 1, 1, 0, -415.000000, 0, 2, 2, 0, 85.000000, null, 10, 10, 10, 10, '降脂片', '髙血脂，冠心痛，髙血压，肥胖等症。', '2019-11-26 23:08:52', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (762, 'BASIC', '百咳片', '百咳片S', 'P131', 1, 3, 1000.00, '{[!UDEzMQ!]}', '功能与主治：
疏风解热，止咳化痰。用于感冒热咳，痰多气促。

主要组成：
竹茹，藿香，石膏，杏仁，沉香，枇杷叶，制半夏，葶苈子，石菖蒲，款冬花，紫苏子，桑白皮，。', 5, 1, 1, 0, -298.000000, 0, 2, 2, 0, 82.000000, null, 10, 10, 10, 10, '百咳片', '疏风解热，止咳化痰。用于感冒热咳，痰多气促。', '2019-11-26 23:09:57', '2022-09-26 03:24:32', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (763, 'BASIC', '大黃片', '大黃片S', 'P134', 1, 3, 1000.00, '{[!UDEzNA!]}', '大黃片', 3, 1, 1, 0, -3199.000000, 0, 2, 2, 0, 70.000000, null, 10, 10, 10, 10, '大黃片', null, '2019-11-26 23:11:01', '2022-09-26 08:38:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (764, 'BASIC', '坐骨神经片', '坐骨神经片S', 'P135', 1, 3, 1000.00, '{[!UDEzNQ!]}', '功能与主治：
坐骨神经痛，骨质增生性，骨关节炎，风湿性骨关节炎，腰腿疼痛，四肢麻木，筋骨酸痛。

主要组成：
乳香，狗脊，川芎，千斤扒，豨莶草，鸡血藤，板蓝根，金樱子，桑寄生。', 7, 1, 1, 0, -1078.000000, 0, 2, 2, 0, 75.000000, null, 10, 10, 10, 10, '坐骨神经片', '坐骨神经痛，骨质增生性，骨关节炎，风湿性骨关节炎，腰腿疼痛，四肢麻木', '2019-11-26 23:12:26', '2022-09-27 02:17:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (765, 'BASIC', '五苓散片', '五苓散片S', 'P138', 1, 3, 1000.00, '{[!UDEzOA!]}', '功能与主治：
化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。

主要组成：
猪芩，茯苓，泽泻，白术，肉桂。', 4, 1, 1, 0, -1732.000000, 0, 2, 2, 0, 74.000000, null, 10, 10, 10, 10, '五苓散片', '化气行水。用于浮肿腹胀，呕逆泄泻，渴不思饮，小便不利等诸症。', '2019-11-26 23:16:08', '2022-09-26 08:38:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (766, 'BASIC', '复方穿心莲片', '复方穿心莲片S', 'P139', 1, 3, 1000.00, '{[!UDEzOQ!]}', '功能与主治：
用于各种急性炎症，发热，化脓性感染。(如耳，鼻，喉科炎症，腮腺炎，疮疖肿痛等。）

主要组成：
穿心莲，板兰根，蒲公英，紫花地丁。', 9, 1, 1, 0, -44.000000, 0, 2, 1, 0, 70.000000, null, 10, 10, 10, 10, '复方穿心莲片', '用于各种急性炎症，发热，化脓性感染。(如耳，鼻，喉科炎症，腮腺炎，疮疖肿痛等。）', '2019-11-26 23:17:20', '2022-09-26 08:39:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (767, 'BASIC', '通络化痹片', '通络化痹片S', 'P140', 1, 3, 1000.00, '{[!UDE0MA!]}', '功能与主治：
痹症（坐骨神经痛，风温关节炎等）。用于肢体骨节酸楚，麻木，疼痛。

主要组成：
木瓜，陈皮，香附，郁金，钩藤，川芎，柴胡，乳香，没药，木香，蜂房，白芷，鸡血藤，丝瓜络。', 10, 1, 1, 0, -1375.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '通络化痹片', '痹症（坐骨神经痛，风温关节炎等）。用于肢体骨节酸楚，麻木，疼痛。', '2019-11-28 22:11:39', '2022-09-22 07:47:22', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (768, 'BASIC', '酸枣仁汤片', '酸枣仁汤片S', 'P141', 1, 3, 1000.00, '{[!UDE0MQ!]}', '功能与主治:
治心烦，烦躁不眠，惊悸怔忡，健忘等神经衰弱症。

主要组成:
川芎，茯苓，知母，甘草，酸枣仁。', 14, 1, 1, 0, -1738.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '酸枣仁汤片', '治心烦，烦躁不眠，惊悸怔忡，健忘等神经衰弱症。', '2019-11-28 22:15:04', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (769, 'BASIC', '复方野木瓜片', '复方野木瓜片S', 'P142', 1, 3, 1000.00, '{[!UDE0Mg!]}', '功能与主治：
治风湿痹痛，三冬神经痛，坐骨神经痛，神经性头痛。

主要组成：
木瓜，骨碎补。', 9, 1, 1, 0, -45.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '复方野木瓜片', '治风湿痹痛，三冬神经痛，坐骨神经痛，神经性头痛。', '2019-11-28 22:19:03', '2022-07-17 13:05:15', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (770, 'BASIC', '障眼明片', '障眼明片S', 'P145', 1, 3, 1000.00, '{[!UDE0NQ!]}', '功能与主治:
补益肝肾，健脾调中，升阳利窍，明目。用于初期及中期老年白内障，肝肾气血不足之白内障。

主要组成:
升麻，党参，川芎，菊花，黄芪，蕤仁，山萸肉，肉蓰蓉，蔓荆子，枸杞子，密蒙花，右菖蒲。', 13, 1, 1, 0, -423.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '障眼明片', '补益肝肾，健脾调中，升阳利窍，明目。用于初期及中期老年白内障，肝肾气血不足之白内障。', '2019-11-28 22:20:37', '2022-09-23 09:32:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (771, 'BASIC', '鼻舒适片', '鼻舒适片S', 'P147', 1, 3, 1000.00, '{[!UDE0Nw!]}', '功能与主治:
清热消炎，去风通窍。用于治疗慢性鼻炎引起之喷嚏，流塞，头痛过敏性鼻炎，慢性鼻窦炎症。

主要组成:
防风，白芍，蒺藜，菊花，白芷，甘草，苍耳子，墨旱莲，鹅不食草。', 14, 1, 1, 0, -463.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '鼻舒适片', '清热消炎，去风通窍。用于治疗慢性鼻炎引起之喷嚏，流塞，头痛过敏性鼻炎，慢性鼻窦炎症。', '2019-11-28 22:22:00', '2022-09-19 03:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (772, 'BASIC', '舒颈葛根片', '舒颈葛根片S', 'P152', 1, 3, 1000.00, '{[!UDE1Mg!]}', '功能与主治：
舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。

主要组成：
葛根，白芷，丹参，姜活，桂枝，地龙，赤芍，大枣，白芍，当归，甘草，鸡血藤。', 12, 1, 1, 0, -2967.000000, 0, 2, 1, 0, 84.000000, null, 10, 10, 10, 10, '舒颈葛根片', '舒筋活络。用于颈项转折不灵，颈项强硬，颈椎综合症。', '2019-11-28 22:26:59', '2022-09-28 02:19:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (773, 'BASIC', '肺热咳嗽片', '肺热咳嗽片S', 'P154', 1, 3, 1000.00, '{[!UDE1NA!]}', '功能与主治：
清肺热，止咳，化痰。用于肺热咳嗽，痰多粘稠。

主要组成：
芦根，甘草，桔梗，石膏，连翘，桃仁，杏仁，淡豆鼓，淡竹叶，白花蛇舌草，板蓝根，冬瓜子，鱼腥草，牛蒡子，生薏仁，金银花。', 8, 1, 1, 0, -463.000000, 0, 2, 1, 0, 84.000000, null, 10, 10, 10, 10, '肺热咳嗽片', '清肺热，止咳，化痰。用于肺热咳嗽，痰多粘稠。', '2019-11-28 23:09:02', '2022-09-26 03:21:41', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (774, 'BASIC', '蒲公英解毒片', '蒲公英解毒片S', 'P159', 1, 3, 1000.00, '{[!UDE1OQ!]}', '蒲公英解毒片', 13, 1, 1, 0, -998.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '蒲公英解毒片', null, '2019-11-28 23:15:21', '2022-09-19 04:09:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (775, 'BASIC', '复方川贝片', '复方川贝片S', 'P166', 1, 3, 1000.00, '{[!UDE2Ng!]}', '功能与主治：
止咳，化痰，平喘，润肺。用于咳嗽，痰喘，急慢性支气管炎，风寒感冒咳嗽。

主要组成：
桔梗，陈皮，远志，甘草，生姜，川贝母，制半夏，五味子。', 9, 1, 1, 0, -299.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '复方川贝片', '止咳，化痰，平喘，润肺。用于咳嗽，痰喘，急慢性支气管炎，风寒感冒咳嗽。', '2019-11-28 23:17:01', '2022-09-19 04:06:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (776, 'BASIC', '小柴胡片', '小柴胡片S', 'P169', 1, 3, 1000.00, '{[!UDE2OQ!]}', '功能与主治：
伤寒，恶风，恶寒往来，胸胁苦满，食欲不振，咳嗽，发热等症。

主要组成：
柴胡，黄芩，党参，甘草，生姜，大枣，制半夏。', 3, 1, 1, 0, -2695.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '小柴胡片', '伤寒，恶风，恶寒往来，胸胁苦满，食欲不振，咳嗽，发热等症。', '2019-11-28 23:18:45', '2022-09-27 01:55:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (777, 'BASIC', '杞菊地黄片', '杞菊地黄片S', 'P170', 1, 3, 1000.00, '{[!UDE3MA!]}', '功能与主治：
养肝，明目，滋阴补腰，肝肾阴虚，头晕目眩，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。

主要组成：
杞子，熟地，淮山，泽泻，菊花，丹皮，茯苓，山茱萸。', 7, 1, 1, 0, -1513.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '杞菊地黄片', '养肝，明目，滋阴补腰，肝肾阴虚，头晕目眩，目赤肿痛，遇光流泪，头痛，潮热盗汗等症。', '2019-11-28 23:20:06', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (778, 'BASIC', '风湿止痛片', '风湿止痛片S', 'P174', 1, 3, 1000.00, '{[!UDE3NA!]}', '功能与主治：
祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。

主要组成：
独活，姜活，牛膝，木瓜，黄芩，防风，豨莶草，臭梧桐，粉萆解。', 4, 1, 1, 0, -888.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '风湿止痛片', '祛风湿，止痹痛。用于风湿痹痛，肢体麻木，筋脉拘孪，骨节屈伸不利等症。', '2019-11-28 23:21:44', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (779, 'BASIC', '千金止帶片', '千金止帶片S', 'P176', 1, 3, 1000.00, '{[!UDE3Ng!]}', '千金止帶片', 3, 1, 1, 0, -319.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '千金止帶片', null, '2019-11-28 23:23:04', '2022-09-27 02:11:10', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (780, 'BASIC', '腰痛膝酸片', '腰痛膝酸片S', 'P177', 1, 3, 1000.00, '{[!UDE3Nw!]}', '功能与主治:
祛风通络，壮筋骨止痛。用于腰痛，关节酸痛。

主要组成:
牛膝，续断，甘草，杜仲，狗脊，豨签草，穿山龙，桑寄生。', 13, 1, 1, 0, -798.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '腰痛膝酸片', '祛风通络，壮筋骨止痛。用于腰痛，关节酸痛。', '2019-11-28 23:24:28', '2022-09-27 07:17:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (781, 'BASIC', '知柏地黄片', '知柏地黄片S', 'P178', 1, 3, 1000.00, '{[!UDE3OA!]}', '功能与主治：
滋阴降火。用于阴虚火旺，潮热盗汗，口干咽痛，耳鸣遗精，小便短赤。

主要组成：
知母，茯苓，黄芩，山药，熟地，丹皮，泽泻，山茱萸。', 8, 1, 1, 0, -3325.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '知柏地黄片', '滋阴降火。用于阴虚火旺，潮热盗汗，口干咽痛，耳鸣遗精，小便短赤。', '2019-11-28 23:25:49', '2022-09-27 02:17:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (782, 'BASIC', '红花跌打片', '红花跌打片S', 'P179', 1, 3, 1000.00, '{[!UDE3OQ!]}', '功能与主治：
活血散瘀，消肿止痛。用于跌打损伤，积瘀肿痛。

主要组成：
大黄，当归，香附，郁金，丹皮，防风，乌药，陈皮，白芨，三棱，赤芍，蒲黄，枳实，青皮，红花，续断，莪术，独活，木香，三七，砂仁，五灵脂，骨碎补。', 6, 1, 1, 0, -613.000000, 0, 2, 1, 0, 90.000000, null, 10, 10, 10, 10, '红花跌打片', '活血散瘀，消肿止痛。用于跌打损伤，积瘀肿痛。', '2019-11-28 23:27:16', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (783, 'BASIC', '防芷鼻炎片', '防芷鼻炎片S', 'P180', 1, 3, 1000.00, '{[!UDE4MA!]}', '功能与主治:
清热消炎，祛风通络。用于治疗慢性鼻炎引起的喷嚏，鼻塞，头痛，过敏性鼻炎，慢性鼻窦炎。

主要组成:
白芷，防风，白芍，甘草，蒺藜，苍耳子，野菊花，墨旱莲，胆南星，鹅不食草。', 6, 1, 1, 0, -1078.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '防芷鼻炎片', '清热消炎，祛风通络。用于治疗慢性鼻炎引起的喷嚏，鼻塞，头痛，过敏性鼻炎，慢性鼻窦炎。', '2019-11-28 23:28:45', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (784, 'BASIC', '通宣理肺片', '通宣理肺片S', 'P181', 1, 3, 1000.00, '{[!UDE4MQ!]}', '功能与主治：
解毒散寒，宣肺止嗽。用于感冒咳嗽，发热恶寒，鼻塞流涕，头痛无汗，肢体酸痛。

主要组成：
前胡，桔梗，陈皮，茯苓，黄芩，杏仁，甘草，枳殻，紫苏叶，制半夏。', 10, 1, 1, 0, -47.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '通宣理肺片', '解毒散寒，宣肺止嗽。用于感冒咳嗽，发热恶寒，鼻塞流涕，头痛无汗，肢体酸痛。', '2019-11-28 23:50:42', '2022-09-21 02:45:03', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (785, 'BASIC', '胃痛定片', '胃痛定片S', 'P182', 1, 3, 1000.00, '{[!UDE4Mg!]}', '功能与主治：
舒气，化郁，逐寒止痛。用于胃寒痛，胃气痛，食积痛。

主要组成：
肉桂，人参，丁香，木香，红花，枳殻，沉香，芫花，蜂房，高姜良，肉豆蔻，白胡椒，五灵脂。', 9, 1, 1, 0, -460.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '胃痛定片', '舒气，化郁，逐寒止痛。用于胃寒痛，胃气痛，食积痛。', '2019-11-29 00:23:26', '2022-09-15 02:51:11', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (786, 'BASIC', '上清片', '上清片S', 'P183', 1, 3, 1000.00, '{[!UDE4Mw!]}', '功能与主治：
清热散风，解毒通便。用于头晕耳鸣，目赤，鼻窦炎，口舌生疮，牙龈肿痛，大便秘结。

主要组成：
菊花，川芎，荆芥，桔梗，栀子，白芷，防风，连翘，黄芩，大黄，薄荷，龙胆草。', 3, 1, 1, 0, null, 0, 2, 1, 0, 67.000000, null, 10, 10, 10, 10, '上清片', '清热散风，解毒通便。用于头晕耳鸣，目赤，鼻窦炎，口舌生疮，牙龈肿痛，大便秘结。', '2019-11-29 00:25:51', '2021-06-17 16:42:33', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (787, 'BASIC', '复方桔梗镇咳片', '复方桔梗镇咳片S', 'P184', 1, 3, 1000.00, '{[!UDE4NA!]}', '功能与主治：
祛痰镇咳。用于一般咳嗽，祛痰，镇咳作用。

主要组成：
桔梗，甘草，远志，款冬花。', 9, 1, 1, 0, -190.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '复方桔梗镇咳片', '祛痰镇咳。用于一般咳嗽，祛痰，镇咳作用。', '2019-11-29 00:28:50', '2022-09-15 06:04:42', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (788, 'BASIC', '活血壮筋片', '活血壮筋片S', 'P185', 1, 3, 1000.00, '{[!UDE4NQ!]}', '活血壮筋片', 9, 1, 1, 0, -22.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '活血壮筋片', null, '2019-11-29 00:30:17', '2022-05-10 08:21:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (789, 'BASIC', '越鞠保和片', '越鞠保和片S', 'P187', 1, 3, 1000.00, '{[!UDE4Nw!]}', '功能与主治：
疏肝解郁，开胃消食。用于气郁停滞，倒饱嘈杂，胸腹胀痛，消化不良。

主要组成：
栀子，香附，苍术，神曲，槟榔，川芎，木香。', 12, 1, 1, 0, -612.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '越鞠保和片', '疏肝解郁，开胃消食。用于气郁停滞，倒饱嘈杂，胸腹胀痛，消化不良。', '2019-11-29 00:31:53', '2022-09-27 08:06:40', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (790, 'BASIC', '丹田降脂片', '丹田降脂片S', 'P188', 1, 3, 1000.00, '{[!UDE4OA!]}', '丹田降脂片', 4, 1, 1, 0, -11.000000, 0, 2, 1, 0, 88.000000, null, 10, 10, 10, 10, '丹田降脂片', null, '2019-11-29 00:37:17', '2022-09-20 03:33:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (791, 'BASIC', '喉痛解毒片', '喉痛解毒片S', 'P189', 1, 3, 1000.00, '{[!UDE4OQ!]}', '功能与主治：
清热解毒，消炎止痛。用于喉痹乳蛾，疔疖肿痛，以及口舌生疮。

主要组成：
青果，玄参，黄芩，麦冬，连翘，大黄，板蓝根，山豆根。', 12, 1, 1, 0, -56.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '喉痛解毒片', '清热解毒，消炎止痛。用于喉痹乳蛾，疔疖肿痛，以及口舌生疮。', '2019-11-29 00:38:42', '2022-09-27 06:05:11', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (792, 'BASIC', '润肺止咳片', '润肺止咳片S', 'P190', 1, 3, 1000.00, '{[!UDE5MA!]}', '润肺止咳片', 10, 1, 1, 0, -177.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '润肺止咳片', null, '2019-11-29 00:40:18', '2022-09-23 09:32:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (793, 'BASIC', '回春再造片', '回春再造片S', 'P191', 1, 3, 1000.00, '{[!UDE5MQ!]}', '功能与主治：
活血化瘀，舒筋通络。

主要组成：
当归，川芎，红花，桃仁，丹参，地龙，蜈蚣，全蝎，僵蚕，木瓜，鸡血藤，忍冬藤，络石藤，土鳖虫，伸筋草，川牛膝，茺蔚子，千年健，金钱白花蛇。', 6, 1, 1, 0, -11.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '回春再造片', '活血化瘀，舒筋通络。', '2019-11-29 00:41:50', '2022-08-07 15:18:55', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (794, 'BASIC', '痛风尿酸清片', '痛风尿酸清片S', 'P192', 1, 3, 1000.00, '{[!UDE5Mg!]}', '功能与主治：
热痹，关节肿痛，一般服用一个疗程後，关节肿痛均可得到不同程度的改善，核査血尿酸也有明显降低。

主要组成：
生地，丹参，通草，苍术，赤芍，桑枝，黄芪，甘草，茯苓，防风，秦艽，桂枝，丹皮，石决明，桑寄生，海桐皮，豨签草，粉萆解，珍珠母，忍冬藤，薏苡仁。', 12, 1, 1, 0, -2006.000000, 0, 2, 1, 0, 93.000000, null, 10, 10, 10, 10, '痛风尿酸清片', '热痹，关节肿痛，一般服用一个疗程後，关节肿痛均可得到不同程度的改善，核査血尿酸也有明显降低。', '2019-11-29 00:43:29', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (795, 'BASIC', '骨松宝片', '骨松宝片S', 'P193', 1, 3, 1000.00, '{[!UDE5Mw!]}', '功能与主治：
补肾活血，强筋壮骨。用于骨痿（骨质疏松）引起骨折，骨痛，骨关节炎，以及预防更年期骨质疏松。

主要组成：
川芎，三棱，续断，知母，生地，赤芍，莪术，杜蛎，淫羊藿。', 9, 1, 1, 0, -38.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '骨松宝片', '补肾活血，强筋壮骨。用于骨痿（骨质疏松）引起骨折，骨痛，骨关节炎，以及预防更年期骨质疏松。', '2019-11-29 00:45:24', '2022-08-12 07:10:57', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (796, 'BASIC', '复方杜仲片', '复方杜仲片S', 'P194', 1, 3, 1000.00, '{[!UDE5NA!]}', '功能与主治：
补肾，平肝，清热。用于肾虚肝旺之髙血压症。

主要组成：
杜仲，钩藤，黄芩，当归，川芎，黄芪，生地，元肉，藁本，愧花，夏枯草，益母草。', 9, 1, 1, 0, -21.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '复方杜仲片', '补肾，平肝，清热。用于肾虚肝旺之髙血压症。', '2019-11-29 00:48:08', '2022-09-20 03:33:56', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (797, 'BASIC', '更年宁片', '更年宁片S', 'P195', 1, 3, 1000.00, '{[!UDE5NQ!]}', '更年宁片', 7, 1, 1, 0, -1749.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '更年宁片', null, '2019-11-29 00:49:25', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (798, 'BASIC', '降脂化瘀片', '降脂化瘀片S', 'P196', 1, 3, 1000.00, '{[!UDE5Ng!]}', '功能与主治：
健脾利水，降脂，活血化瘀。用于肥胖症，髙血脂症。

主要组成：
茯苓，丹参，麦芽，首乌，山楂，白术，当归，赤芍，柴胡，黄芩，丹皮，青皮，陈皮，甘草，玉米须。', 8, 1, 1, 0, -53.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '降脂化瘀片', '健脾利水，降脂，活血化瘀。用于肥胖症，髙血脂症。', '2019-11-29 00:52:30', '2022-09-26 12:16:04', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (799, 'BASIC', '荊防敗毒片', '荆防败毒片S', 'P197', 1, 3, 1000.00, '{[!UDE5Nw!]}', '荆防败毒片', 9, 1, 1, 0, -464.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '荆防败毒片', null, '2019-11-29 00:53:46', '2022-09-19 03:54:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (800, 'BASIC', '羚羊感冒片', '羚羊感冒片S', 'P198', 1, 3, 1000.00, '{[!UDE5OA!]}', '羚羊感冒片', 11, 1, 1, 0, -9.000000, 0, 2, 1, 0, 76.000000, null, 10, 10, 10, 10, '羚羊感冒片', null, '2019-11-29 00:57:55', '2022-03-17 03:48:09', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (801, 'BASIC', '盘龙追风片', '盘龙追风片S', 'P199', 1, 3, 1000.00, '{[!UDE5OQ!]}', '功能与主治：
舒筋活血，散风化瘀。用于筋骨软弱，手足麻木，腰背疼痛，行步艰难。

主要组成：
三七，红花，杜仲，牛膝，陆英，重楼，盘龙七，银线草。', 11, 1, 1, 0, -16.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '盘龙追风片', '舒筋活血，散风化瘀。用于筋骨软弱，手足麻木，腰背疼痛，行步艰难。', '2019-11-29 00:59:17', '2021-11-02 09:05:24', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (802, 'BASIC', '湿毒清片', '湿毒清片S', 'P200', 1, 3, 1000.00, '{[!UDIwMA!]}', '湿毒清片', 12, 1, 1, 0, -513.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '湿毒清片', null, '2019-11-29 01:00:50', '2022-09-26 05:01:26', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (803, 'BASIC', '舒筋祛风片', '舒筋祛风片S', 'P201', 1, 3, 1000.00, '{[!UDIwMQ!]}', '功能与主治：
祛风除湿，化瘀通络，行气消肿。

主要组成：
独活，木瓜，红花，续断，树寄生，海风藤，老鹤草。', 12, 1, 1, 0, -355.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '舒筋祛风片', '祛风除湿，化瘀通络，行气消肿。', '2019-11-29 01:29:08', '2022-09-24 13:10:45', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (804, 'BASIC', '身痛逐瘀片', '身痛逐瘀片S', 'P202', 1, 3, 1000.00, '{[!UDIwMg!]}', '功能与主治：
肢体疼痛，肩胛，腰背酸痛，跌打损伤瘀痛，多发性周围神经炎，坐骨神经炎，中风后遗症，类风湿性关结炎，组织病变，神经性偏头痛，三叉神经痛，痛风。

主要组成：
秦艽，川芎，桃仁，红花，甘草，姜活，没药，当归，香附，牛膝，地龙，五灵脂。', 7, 1, 1, 0, -1375.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '身痛逐瘀片', '肢体疼痛，肩胛，腰背酸痛，跌打损伤瘀痛，多发性周围神经炎，坐骨神经炎，中风后遗症，类风湿性关结炎，组织病变，神经性偏头痛，三叉神经痛，痛风。', '2019-11-29 01:49:20', '2022-09-27 01:56:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (805, 'BASIC', '升阳益胃片', '升阳益胃片S', 'P203', 1, 3, 1000.00, '{[!UDIwMw!]}', '升阳益胃片', 4, 0, 1, 0, -17.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '升阳益胃片', null, '2019-11-29 01:50:45', '2021-11-02 09:04:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (806, 'BASIC', '柴葛解肌片', '柴葛解肌片S', 'P205', 1, 3, 1000.00, '{[!UDIwNQ!]}', '功能与主治：
解肌退热，兼清里热。主治感冒风寒，症见恶寒渐轻，身热增盛，头痛肢楚，眼眶痛，苔薄黄，脉浮稍洪者。

主要组成：
柴胡，葛根，石膏，黄芩，白芍，姜活，白芷，甘草，桔梗，生姜，大枣。', 10, 1, 1, 0, -524.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '柴葛解肌片', '解肌退热，兼清里热。主治感冒风寒，症见恶寒渐轻，身热增盛，头痛肢楚，眼眶痛，苔薄黄，脉浮稍洪者。', '2019-11-29 01:52:09', '2022-09-27 03:39:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (807, 'BASIC', '天麻钩藤片', '天麻钩藤片S', 'P207', 1, 3, 1000.00, '{[!UDIwNw!]}', '功能与主治：
肝肠上亢功能症，头景，面色如醉，项强，头痛，肢体不利。

主要组成：
天麻，钩藤，杜仲，牛膝，栀子，黄芩，茯苓，桑寄生，益母草，夜交藤，石决明。', 4, 1, 1, 0, -1791.000000, 0, 2, 1, 0, 88.000000, null, 10, 10, 10, 10, '天麻钩藤片', '肝肠上亢功能症，头景，面色如醉，项强，头痛，肢体不利。', '2019-11-29 01:53:33', '2022-09-28 06:41:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (808, 'BASIC', '凉膈散片', '凉膈散片S', 'P208', 1, 3, 1000.00, '{[!UDIwOA!]}', '功能与主治：
清上，泻下。主治上，中二焦盛，症见身热烦渴，胸膈灼热如焚，口舌生疮，便秘溲赤，或胃热发斑，发狂，舌红，苔黄或白，脉数等。

主要组成：
连翘，栀子，黄芩，大黄，甘草，薄荷，淡竹叶，玄明粉。', 10, 1, 1, 0, -418.000000, 0, 2, 1, 0, 77.000000, null, 10, 10, 10, 10, '凉膈散片', '清上，泻下。主治上，中二焦盛，症见身热烦渴，胸膈灼热如焚，口舌生疮，便秘溲赤，或胃热发斑，发狂，舌红，苔黄或白，脉数等。', '2019-11-29 01:54:36', '2022-09-14 03:51:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (809, 'BASIC', '健步虎潜片', '健步虎潜片S', 'P209', 1, 3, 1000.00, '{[!UDIwOQ!]}', '健步虎潜片', 10, 1, 1, 0, -1209.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '健步虎潜片', null, '2019-11-29 01:56:35', '2022-09-27 01:28:43', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (810, 'BASIC', '健脑片', '健脑片S', 'P211', 1, 3, 1000.00, '{[!UDIxMQ!]}', '健脑片', 10, 1, 1, 0, -187.000000, 0, 2, 1, 0, 81.000000, null, 10, 10, 10, 10, '健脑片', null, '2019-11-29 01:58:07', '2022-09-02 06:51:59', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (811, 'BASIC', '舒肝片', '舒肝片S', 'P212', 1, 3, 1000.00, '{[!UDIxMg!]}', '功能与主治：
舒气开胃，助消化，消积滞，止痛除烦。用于肝郁气滞，两肋刺痛，饮食无味，消化不良，呕吐酸水，周身串痛。

主要组成：
苍术，川芎，姜黄，香附，豆蔻，积实，沉香，甘草，丹皮，郁香，木香。', 12, 1, 1, 0, -2194.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '舒肝片', '舒气开胃，助消化，消积滞，止痛除烦。用于肝郁气滞，两肋刺痛，饮食无味，消化不良，呕吐酸水，周身串痛。', '2019-11-29 01:59:24', '2022-09-28 06:28:29', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (812, 'BASIC', '槐榆片', '槐榆片S', 'P213', 1, 3, 1000.00, '{[!UDIxMw!]}', '功能与主治：
清热解毒，止血便通。用于痨疮下出血，大便秘结，肛痛。

主要组成：
槐花米，地榆，侧柏叶，黄芩，仙鹤草，枳壳，蒲公英，金银花。', 13, 1, 1, 0, -399.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '槐榆片', '清热解毒，止血便通。用于痨疮下出血，大便秘结，肛痛。', '2019-11-29 02:00:44', '2022-09-19 10:47:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (813, 'BASIC', '滋补生发片', '滋补生发片S', 'P214', 1, 3, 1000.00, '{[!UDIxNA!]}', '功能与主治：
滋补肝肾，益气养容，活络生发。用于脱发症。

主要组成：
当归，川芎，党参，木瓜，姜活，熟地，桑椹，女贞子，枸杞子，黑芝麻，何首乌。', 12, 1, 1, 0, -78.000000, 0, 2, 1, 0, 82.000000, null, 10, 10, 10, 10, '滋补生发片', '滋补肝肾，益气养容，活络生发。用于脱发症。', '2019-11-29 02:02:08', '2022-09-11 13:36:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (814, 'BASIC', '乌须黑发片', '乌须黑发片S', 'P215', 1, 3, 1000.00, '{[!UDIxNQ!]}', '功能与主治：
滋阴补肾，养血固精。用于肾水亏损，气血不足，须发早白。

主要组成：
当归，牛膝，茯苓，何首乌，菟丝子，枸杞子，补骨脂。', 4, 1, 1, 0, -42.000000, 0, 2, 1, 0, 90.000000, null, 10, 10, 10, 10, '乌须黑发片', '滋阴补肾，养血固精。用于肾水亏损，气血不足，须发早白。', '2019-11-29 02:03:38', '2022-09-15 04:32:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (815, 'BASIC', '固精补肾片', '固精补肾片S', 'P216', 1, 3, 10000.00, '{[!UDIxNg!]}', '功能与主治：
温补脾肾虚实，食减神疲，腰酸体倦，早泄梦遗.

主要组成：
熟地，牛膝，杜仲，山药，茯苓，远志，甘草，枸杞子，覆盆子，楮实子，金樱子，肉蓰蓉，菟丝子，山茱萸，五味子，石菖蒲，小茴香，巴戟天。', 8, 1, 1, 0, -1124.000000, 0, 2, 1, 0, 90.000000, null, 10, 10, 10, 10, '固精补肾片', '温补脾肾虚实，食减神疲，腰酸体倦，早泄梦遗.', '2019-12-02 01:17:35', '2022-09-27 03:39:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (816, 'BASIC', '浙贝片', '浙贝片S', 'P217', 1, 3, 1000.00, '{[!UDIxNw!]}', '功能与主治：
清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。

主要组成：
浙贝母，桔梗，杏仁，枇杷叶，黄芩，麦冬，甘草。', 10, 1, 1, 0, -95.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '浙贝片', '清热润肺，化痰止咳。用于痰热或燥热咳嗽，痰黄粘稠难咯，或干咳痰少，甚则气促者。', '2019-12-02 01:19:15', '2022-09-13 09:37:28', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (817, 'BASIC', '减肥降脂片', '减肥降脂片S', 'P218', 1, 3, 1000.00, '{[!UDIxOA!]}', '功能与主治：
活血化瘀，降脂减肥。用于各型髙血脂症，心脑血管硬化，肥胖等症。

主要组成：
丹参，田七，川芎，泽泻，山楂，党参，当归，黄精。', 12, 1, 1, 0, -67.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '减肥降脂片', '活血化瘀，降脂减肥。用于各型髙血脂症，心脑血管硬化，肥胖等症。', '2019-12-02 01:25:08', '2022-09-14 12:55:35', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (818, 'BASIC', '明目地黄片', '明目地黄片S', 'P219', 1, 3, 1000.00, '{[!UDIxOQ!]}', '功能与主治：
滋肾养肝明目。用于肝肾阳虚，眼目干涩，视物模糊，及阴虚阳亢症候。

主要组成：
菊花，当归，熟地，淮山，蒺藜，山茱萸，丹皮，泽泻，石决明，茯苓，枸杞，白芍。', 8, 1, 1, 0, -432.000000, 0, 2, 1, 0, 73.000000, null, 10, 10, 10, 10, '明目地黄片', '滋肾养肝明目。用于肝肾阳虚，眼目干涩，视物模糊，及阴虚阳亢症候。', '2019-12-02 01:28:29', '2022-09-27 01:57:52', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (819, 'BASIC', '金匮肾气片', '金匮肾气片S', 'P221', 1, 3, 1000.00, '{[!UDIyMQ!]}', '功能与主治：
温补肾阳，化气行水。用于肾虚水肿，腰酸腿软。

主要组成：
地黄，山药，茯苓，泽泻，丹皮，肉桂，桂枝，山茱萸。', 8, 1, 1, 0, -2996.000000, 0, 2, 1, 0, 82.000000, null, 10, 10, 10, 10, '金匮肾气片', '温补肾阳，化气行水。用于肾虚水肿，腰酸腿软。', '2019-12-02 01:31:11', '2022-09-27 02:11:10', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (820, 'BASIC', '腰椎痹痛片', '腰椎痹痛片S', 'P222', 1, 3, 1000.00, '{[!UDIyMg!]}', '功能与主治:
祛风湿，补精壮髄，壮筋健骨，通络止痛。用于骨质增生症，肥大性腰椎炎，风湿关节炎及腰肌劳损等症。

主要组成:
桂枝，防风，萆解，红花，白芷，当归，桃仁，赤芍，独活，秦艽，续断，五加皮，骨碎补，桑寄生，千年健，海风藤。', 13, 1, 1, 0, -778.000000, 0, 2, 1, 0, 88.000000, null, 10, 10, 10, 10, '腰椎痹痛片', '祛风湿，补精壮髄，壮筋健骨，通络止痛。用于骨质增生症，肥大性腰椎炎，风湿关节炎及腰肌劳损等症。', '2019-12-02 01:32:46', '2022-09-28 04:53:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (821, 'BASIC', '逍遥片', '逍遥片S', 'P227', 1, 3, 1000.00, '{[!UDIyNw!]}', '功能与主治：
用于血虚火旺，头痛目眩，烦赤苦，寒热咳嗽。

主要组成：
当归，白术，茯苓，白芍，柴胡，生姜，甘草，薄荷。', 10, 1, 1, 0, -938.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '逍遥片', '用于血虚火旺，头痛目眩，烦赤苦，寒热咳嗽。', '2019-12-02 01:34:32', '2022-09-28 03:09:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (822, 'BASIC', '川芎茶调片', '川芎茶调片S', 'P228', 1, 3, 1000.00, '{[!UDIyOA!]}', '功能与主治：
因风寒感胃引起头晕目眩，偏正头痛，发热恶寒等症。

主要组成：
川芎，荆芥，白芷，茶叶，姜活，防风，甘草。', 3, 1, 1, 0, -659.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '川芎茶调片', '因风寒感胃引起头景目眩，偏正头痛，发热恶寒等症。', '2019-12-02 01:35:59', '2022-09-19 09:02:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (823, 'BASIC', '胃得安片', '胃得安片S', 'P229', 1, 3, 1000.00, '{[!UDIyOQ!]}', '功能与主治：
健脾消稍，和胃止痛。用于胃溃疡，十二指肠溃疡，慢性胃炎等病。

主要组成：
白术，黄芩，麦芽，川芎，砂仁，泽泻，神曲，香附，苍术，甘草，谷芽，积壳，莱菔子，瓜蒌仁。', 9, 1, 1, 0, -1190.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '胃得安片', '健脾消稍，和胃止痛。用于胃溃疡，十二指肠溃疡，慢性胃炎等病。', '2019-12-02 01:37:17', '2022-09-28 06:40:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (824, 'BASIC', '清火片', '清火片S', 'P235', 1, 3, 1000.00, '{[!UDIzNQ!]}', '清火片', 11, 1, 1, 0, -16.000000, 0, 2, 1, 0, 79.000000, null, 10, 10, 10, 10, '清火片', null, '2019-12-02 01:38:43', '2022-09-26 07:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (825, 'BASIC', '养阴降糖片', '养阴降糖片S', 'P236', 1, 3, 1000.00, '{[!UDIzNg!]}', '养阴降糖片', 9, 1, 1, 0, -797.000000, 0, 2, 1, 0, 83.000000, null, 10, 10, 10, 10, '养阴降糖片', null, '2019-12-02 01:41:53', '2022-09-27 07:17:16', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (826, 'BASIC', '感冒片', '感冒片S', 'P239', 1, 3, 1000.00, '{[!UDIzOQ!]}', '功能与主治：
疏风清热。用于伤风感冒，身热恶寒，头痛鼻塞。

主要组成：
桔梗，荆芥，薄荷，金银花，牛蒡子，淡豆豉，连翘，淡竹叶，桑叶，白菊花，钩藤。', 13, 1, 1, 0, -67.000000, 0, 2, 1, 0, 78.000000, null, 10, 10, 10, 10, '感冒片', '疏风清热。用于伤风感冒，身热恶寒，头痛鼻塞。', '2019-12-02 01:43:30', '2022-06-15 12:38:21', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (827, 'BASIC', '银翘感冒片', '银翘感冒片S', 'P240', 1, 3, 1000.00, '{[!UDI0MA!]}', '银翘感冒片', 11, 0, 1, 0, -6.000000, 0, 2, 1, 0, 69.000000, null, 10, 10, 10, 10, '银翘感冒片', null, '2019-12-02 01:46:46', '2021-11-02 08:59:06', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (828, 'BASIC', '伤风片', '伤风片S', 'P241', 1, 3, 1000.00, '{[!UDI0MQ!]}', '伤风片', 6, 1, 1, 0, -15.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '伤风片', null, '2019-12-02 01:48:11', '2022-05-12 02:34:48', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (829, 'BASIC', '脑衰片', '脑衰片S', 'P242', 1, 3, 1000.00, '{[!UDI0Mg!]}', '脑衰片', 10, 1, 1, 0, -366.000000, 0, 2, 1, 0, 84.000000, null, 10, 10, 10, 10, '脑衰片', null, '2019-12-02 01:49:40', '2022-09-19 02:24:31', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (830, 'BASIC', '妇康宁片', '妇康宁片S', 'P244', 1, 3, 1000.00, '{[!UDI0NA!]}', '妇康宁片', 6, 1, 1, 0, -552.000000, 0, 2, 1, 0, 90.000000, null, 10, 10, 10, 10, '妇康宁片', null, '2019-12-02 01:51:32', '2022-09-20 07:12:54', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (831, 'BASIC', '黄芩上清片', '黄芩上清片S', 'P245', 1, 3, 1000.00, '{[!UDI0NQ!]}', '功能与主治：
清热解毒。用于发火眼，大便燥结，小便赤黄，消炎，解毒，消火，散风。

主要组成：
桑叶，川芎，荆芥，防风，黄芩，桔梗，石膏，菊花，白芷，甘草，蔓荆子。', 11, 1, 1, 0, -20.000000, 0, 2, 1, 0, 74.000000, null, 10, 10, 10, 10, '黄芩上清片', '清热解毒。用于发火眼，大便燥结，小便赤黄，消炎，解毒，消火，散风。', '2019-12-02 01:52:58', '2022-06-10 03:30:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (832, 'BASIC', '二陈片', '二陈片S', 'P247', 1, 3, 1000.00, '{[!UDI0Nw!]}', '功能与主治：
燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。

主要组成：
陈皮，茯苓，生姜，炙甘草，制半夏。', 2, 1, 1, 0, -991.000000, 0, 2, 1, 0, 70.000000, null, 10, 10, 10, 10, '二陈片', '燥湿化痰，理气和中。主治痰饮咳嗽，痰多易咯，胸膈痞闷，恶心呕吐，头晕心悸。', '2019-12-03 00:38:52', '2022-09-28 01:32:39', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (833, 'BASIC', '滋肾宁神片', '滋肾宁神片S', 'P248', 1, 3, 1000.00, '{[!UDI0OA!]}', '功能与主治：
用于宁心安神，头晕耳鸣，失眠多梦，腰酸逍泄，治疗肝肾亏损，神经衰弱等症。

主要组成：
熟地，茯苓，白芍，山药，丹参，黄精，金樱子，夜交藤，菟丝子，五味子，何首乌，酸枣仁，女贞子，牛蒡子，珍珠母，五指毛桃根。', 12, 1, 1, 0, -38.000000, 0, 2, 1, 0, 90.000000, null, 10, 10, 10, 10, '滋督宁神片', '用于宁心安神，头晕耳鸣，失眠多梦，腰酸逍泄，治疗肝肾亏损，神经衰弱等症。', '2019-12-03 00:40:15', '2022-09-05 08:13:49', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (834, 'BASIC', '结石通片', '结石通片S', 'P249', 1, 3, 1000.00, '{[!UDI0OQ!]}', '功能与主治：
清热利湿，通淋排石，镇痛止血。用于泌尿系统感染，膀胱炎，淋沥混浊，尿道灼痛。

主要组成：
石韦，茯苓，鸡骨草，海金砂草，玉米须，车前草，白茅根，广金钱草。', 9, 1, 1, 0, -665.000000, 0, 2, 1, 0, 85.000000, null, 10, 10, 10, 10, '结石通片', '清热利湿，通淋排石，镇痛止血。用于泌尿系统感染，膀胱炎，淋沥混浊，尿道灼痛。', '2019-12-03 00:41:38', '2022-09-26 07:55:30', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (835, 'BASIC', '清热暗苍片', '清热暗苍片S', 'P250', 1, 3, 1000.00, '{[!UDI1MA!]}', '清热暗苍片', 11, 1, 1, 0, -91.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '清热暗苍片', null, '2019-12-03 00:43:00', '2022-09-26 01:28:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (836, 'BASIC', '蛇胆陈皮散', '蛇胆陈皮散', 'S001', 5, 4, 100.00, '{[!UzAwMQ!]}', '功能与主治：
顺气化痰，祛风健胃。用于风寒咳嗽，痰多呕逆。

主要组成：
陈皮，蛇胆汁。', 11, 1, 1, 0, -56.000000, 0, 1, 1, 0, 75.000000, null, 10, 10, 10, 10, '蛇胆陈皮散', '顺气化痰，祛风健胃。用于风寒咳嗽，痰多呕逆。', '2019-12-17 20:29:44', '2022-08-26 04:40:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (837, 'BASIC', '蛇胆川贝散', '蛇胆川贝散', 'S002', 5, 4, 100.00, '{[!UzAwMg!]}', '功能与主治：
清肺，止咳，除痰。用于肺热咳嗽，痰多

主要组成：
天竺黄，蛇胆汁。', 11, 1, 1, 0, -190.000000, 0, 1, 1, 0, 80.000000, null, 10, 10, 10, 10, '蛇胆川贝散', '清肺，止咳，除痰。用于肺热咳嗽，痰多', '2019-12-17 20:31:40', '2022-09-14 02:12:20', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (838, 'BASIC', '保儿散', '保儿散', 'S003', 5, 4, 100.00, '{[!UzAwMw!]}', '功能与主治：
清热化痰，开窍定惊。急惊风，痰热蒙蔽心窍。证见发热气喘，烦躁神昏，或反胃呕吐，夜啼吐乳，腹痛泄泻，或满口痰涎，喉间痰鸣。

主要组成：
钩藤，檀香，枳殼，沉香，木香，天麻，陈皮，全蝎，僵蚕，甘草，草豆蔻，胆南星，制半夏，川贝母，天竺黄。', 9, 1, 1, 0, -648.000000, 0, 1, 1, 0, 35.000000, null, 10, 10, 10, 10, '保儿散', '清热化痰，开窍定惊。急惊风，痰热蒙蔽心窍。证见发热气喘，烦躁神昏，或反胃呕吐，夜啼吐乳，腹痛泄泻，或满口痰涎，喉间痰鸣。', '2019-12-17 20:32:47', '2022-09-27 01:58:46', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (839, 'BASIC', '理血王软胶囊', '理血王软胶囊', 'C001', 5, 3, 60.00, '{[!QzAwMQ!]}', '功能与主治：
改善血液循环功能。抑制血小板的聚集作用降低血粘度，促进高密度蛋白的合成，适度扩张血管。

主要组成：
三七。', 11, 1, 1, 0, -6588.000000, 0, 1, 1, 0, 75.000000, null, 10, 10, 10, 10, '理血王软胶囊', '特效药', '2019-12-17 20:34:20', '2022-09-27 01:36:37', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (840, 'BASIC', '空袋 （包）', '空袋', 'Z001', 1, 3, 1.00, '{[!WjAwMQ!]}', '空袋 （包）', 8, 1, 1, 0, -714.000000, 0, 1, 1, 0, 35.000000, null, 10, 10, 10, 10, '空袋 （包）', '包装品', '2019-12-17 20:38:52', '2022-09-23 09:35:00', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (841, 'BASIC', 'Sticker 一张', 'sticker', 'Z002', 1, 3, 1.00, '{[!WjAwMg!]}', 'Sticker 一张', 1, 1, 1, 0, -5156.000000, 0, 1, 1, 0, 0.600000, null, 10, 10, 10, 10, 'Sticker 一张', '包装品', '2019-12-17 20:53:13', '2022-09-27 07:17:27', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (842, 'BASIC', '药水瓶 200 ml', '药水瓶', 'Z003', 1, 3, 1.00, '{[!WjAwMw!]}', '药水瓶 200 ml', 9, 1, 1, 0, -9999.999999, 0, 1, 1, 0, 0.600000, null, 10, 10, 10, 10, '药水瓶 200 ml', '包装品', '2019-12-17 20:54:31', '2022-07-27 01:49:51', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (843, 'BASIC', '药水瓶 120ml', '药水瓶b', 'Z004', 1, 3, 1.00, '{[!WjAwNA!]}', '药水瓶 120ml', 1, 1, 1, 0, -9999.999999, 0, 1, 1, 0, 0.500000, null, 10, 10, 10, 10, '药水瓶 120ml', '包装品', '2019-12-17 22:24:04', '2022-08-26 08:25:43', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (844, 'BASIC', '蛇胆陈皮散', '蛇胆陈皮散s', 'S001', 1, 4, 100.00, '{[!UzAwMQ!]}', '功能与主治：
顺气化痰，祛风健胃。用于风寒咳嗽，痰多呕逆。

主要组成：
陈皮，蛇胆汁。', 11, 1, 1, 0, -48.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '蛇胆陈皮散', '顺气化痰，祛风健胃。用于风寒咳嗽，痰多呕逆。', '2019-12-18 01:49:28', '2022-08-22 04:14:25', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (845, 'BASIC', '蛇胆川贝散', '蛇胆川贝散S', 'S002', 1, 4, 100.00, '{[!UzAwMg!]}', '功能与主治：
清肺，止咳，除痰。用于肺热咳嗽，痰多。

主要组成：
天竺黄，蛇胆汁。', 11, 1, 1, 0, -65.000000, 0, 2, 1, 0, 80.000000, null, 10, 10, 10, 10, '蛇胆川贝散', '清肺，止咳，除痰。用于肺热咳嗽，痰多。', '2019-12-18 01:51:02', '2022-08-24 08:21:47', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (846, 'BASIC', '保儿散', '保儿散S', 'S003', 1, 4, 100.00, '{[!UzAwMw!]}', '功能与主治：
清热化痰，开窍定惊。急惊风，痰热蒙蔽心窍。证见发热气喘，烦躁神昏，或反胃呕吐，夜啼吐乳，腹痛泄泻，或满口痰涎，喉间痰鸣。

主要组成：
钩藤，檀香，枳殼，沉香，木香，天麻，陈皮，全蝎，僵蚕，甘草，草豆蔻，胆南星，制半夏，川贝母，天竺黄。', 9, 1, 1, 0, -79.000000, 0, 2, 1, 0, 35.000000, null, 10, 10, 10, 10, '保儿散', '清热化痰，开窍定惊。急惊风，痰热蒙蔽心窍。证见发热气喘，烦躁神昏，或反胃呕吐，夜啼吐乳，腹痛泄泻，或满口痰涎，喉间痰鸣。', '2019-12-18 01:51:56', '2022-09-27 03:39:19', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (847, 'BASIC', '理血王软胶囊', '理血王软胶囊S', 'C001', 1, 3, 60.00, '{[!QzAwMQ!]}', '功能与主治：
改善血液循环功能。抑制血小板的聚集作用降低血粘度，促进高密度蛋白的合成，适度扩张血管。

主要组成：
三七。', 11, 1, 1, 0, -1094.000000, 0, 2, 1, 0, 75.000000, null, 10, 10, 10, 10, '理血王软胶囊', '特效药', '2019-12-18 01:53:20', '2022-09-15 07:32:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (848, 'BASIC', '空袋', '空袋S', 'Z001', 1, 3, 1.00, '{[!WjAwMQ!]}', '空袋', 8, 1, 1, 0, -241.000000, 0, 2, 1, 0, 35.000000, null, 10, 10, 10, 10, '空袋 （包）', '包装品', '2019-12-18 01:54:40', '2022-08-05 01:32:14', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (849, 'BASIC', 'Sticker 一张', 'Sticker一张S', 'Z002', 1, 3, 1.00, '{[!WjAwMg!]}', 'Sticker 一张', 1, 1, 1, 0, -7855.000000, 0, 2, 1, 0, 0.600000, null, 10, 10, 10, 10, 'Sticker 一张', '包装品', '2019-12-18 01:56:45', '2022-11-01 16:30:44', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (850, 'BASIC', '药水瓶200ml', '药水瓶200ml', 'Z003', 1, 3, 1.00, '{[!WjAwMw!]}', '药水瓶200ml', 9, 1, 1, 0, -2901.000000, 0, 2, 1, 0, 0.600000, null, 10, 10, 10, 10, '药水瓶200ml', '单味药', '2019-12-18 01:58:58', '2022-05-13 06:17:01', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (851, 'BASIC', '药水瓶120ml', '药水瓶120ml', 'Z004', 1, 3, 1.00, '{[!WjAwNA!]}', '药水瓶120ml', 9, 1, 1, 0, -400.000000, 0, 2, 1, 0, 0.500000, null, 10, 10, 10, 10, '药水瓶120ml', '包装品', '2019-12-18 02:00:24', '2022-09-21 02:45:53', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (852, 'BASIC', '小柴胡颗粒', '小柴胡颗粒Y', 'B005', 1, 4, 100.00, '{[!QjAwNQ!]}', '功能与主治：
和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。

主要组成：
柴胡，党参，黄芩，大枣，甘草，生姜，制半夏。', 1, 1, 1, 0, -24.000000, 0, 2, 1, 0, 41.000000, null, 10, 10, 10, 10, '小柴胡颗粒', '和解少阳。用于少阳症，症见伤寒，恶风，寒恶往来，胸胁苦闷，食欲不振，咳嗽，虐疾，发热诸症。', '2020-02-23 19:31:17', '2022-08-23 08:18:36', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (853, 'BASIC', '小八味合剂', '小八味合剂S', 'M115', 1, 2, 500.00, '{[!TTExNQ!]}', '功能与主治：
滋阴降火。用于阴虚火旺，肾阴不足，骨蒸潮热。虚烦盗汗，烦渴耳鸣，咽干喉痛，目眩头景，口渴心烦，小便短赤及消渴症。

主要组成：
知母，熟地，淮山，泽泻，山茱萸，茯苓，丹皮，黄芩，甘草。', 3, 1, 1, 0, -2720.000000, 0, 2, 1, 0, 30.000000, null, 10, 10, 10, 10, '小八味合剂', '滋阴降火。用于阴虚火旺，肾阴不足，骨蒸潮热。虚烦盗汗，烦渴耳鸣，咽干喉痛，目眩头景，口渴心烦，小便短赤及消渴症。', '2020-02-23 19:40:52', '2022-09-28 05:18:12', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (854, 'BASIC', '通络活血合剂', '通络活血合剂S', 'M225', 1, 2, 500.00, '{[!TTIyNQ!]}', '功能与主治：
通络活血。主治劳伤，风寒所致的腰背，四肢关节酸痛，及妇女月事受阻腹痛。

主要组成：
桂枝，丹参，桃仁，红花，赤芍。', 9, 1, 1, 0, -446.000000, 0, 2, 1, 0, 31.500000, null, 10, 10, 10, 10, '通络活血合剂', '通络活血。主治劳伤，风寒所致的腰背，四肢关节酸痛，及妇女月事受阻腹痛。', '2020-02-23 19:48:51', '2022-09-22 02:16:23', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (855, 'BASIC', '舒筋颗粒', '舒筋颗粒S', 'B030', 1, 4, 100.00, '{[!QjAzMA!]}', '功能与主治：
舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。

主要组成：
姜黄，甘草，姜活，白术，当归，赤芍，海桐皮。', 1, 1, 1, 0, -75.000000, 0, 2, 1, 0, 39.000000, null, 10, 10, 10, 10, '舒筋颗粒', '舒筋活血，益肝活络。用于气血凝滞，经络不通，臂痛不能伸举及腰下疾患。', '2021-04-26 17:54:35', '2022-09-26 09:13:13', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (860, 'BASIC', '青蒿散火合剂S', '青蒿散火合剂S', 'K103', 1, 2, 500.00, null, null, 8, 1, 1, 0, null, 0, 1, 1, 0, 37.000000, null, 10, 10, 10, 10, null, null, '2022-07-08 07:24:26', '2022-07-08 07:39:11', 86.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (861, 'BASIC', '感冒清热止咳合剂', '感冒清热止咳合剂', 'K237', 1, 2, 500.00, null, null, 1, 0, 0, 0, null, 0, 1, 1, 0, 92.000000, null, 10, 10, 10, 10, null, null, '2022-08-25 02:31:24', '2022-09-27 06:11:23', 0.000000, 0, 'MAL22076153T', 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (864, 'BASIC', null, '', null, 1, 1, 1.00, null, null, 1, null, null, null, null, null, 1, 1, 0, null, null, null, null, null, null, null, null, '2022-11-02 09:24:59', '2022-11-02 09:24:59', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (865, 'BASIC', null, '-1', null, 1, 1, 1.00, null, null, 1, null, null, null, null, null, 1, 1, 0, null, null, null, null, null, null, null, null, '2022-11-02 09:25:08', '2022-11-02 09:25:08', 0.000000, 0, null, 0);
INSERT INTO avored_products (id, type, name, slug, sku, metric_unit_id, metric_unit_volume_id, qty_per_unit, autocount_itemid, description, stroke, status, in_stock, track_stock, qty, is_taxable, company_id, product_form_id, is_discountable, price, cost_price, weight, width, height, length, meta_title, meta_description, created_at, updated_at, non_tcm_price, stock, mal_license, show_mal_license) VALUES (866, 'BASIC', null, '-1', null, 1, 1, 1.00, null, null, 1, null, null, null, null, null, 1, 1, 0, null, null, null, null, null, null, null, null, '2022-11-02 09:25:12', '2022-11-02 09:25:12', 0.000000, 0, null, 0);
