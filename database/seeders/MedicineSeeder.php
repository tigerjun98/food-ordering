<?php

namespace Database\Seeders;

use App\Models\Medicine;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getMedicines() as $key => $var){
            if($key > 100) break;
            $model = new Medicine();
            // $model->type = array_rand(Medicine::getTypeList());
            foreach ($var as $col => $val){
                $model->{$col} = $val;
            }
            $model->save();
        }
    }

    public function getMedicines()
    {
        return array(
            array(
                'name_cn' => '滋阴地黄合剂',
                'sku' => 'K151',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '滋阴降火合剂',
                'sku' => 'K086',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鼻咽合剂',
                'sku' => 'K027',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '银翘解毒合剂',
                'sku' => 'K020',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '浙贝合剂',
                'sku' => 'K193',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '川贝枇杷合剂',
                'sku' => 'K178',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '一贯煎合剂',
                'sku' => 'K090',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '八正散合剂',
                'sku' => 'K040',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '二陈合剂',
                'sku' => 'K113',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '二母宁嗽合剂',
                'sku' => 'K174',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '二妙散合剂',
                'sku' => 'K233',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '九味姜活合剂',
                'sku' => 'K002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '十味温胆合剂',
                'sku' => 'K091',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '十味甘麦大枣合剂',
                'sku' => 'K092',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '川芎合剂',
                'sku' => 'K003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '川芎茶调合剂',
                'sku' => 'K004',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '三仁合剂',
                'sku' => 'K042',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '三消合剂',
                'sku' => 'K118',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '上中下通用痛风合剂',
                'sku' => 'K152',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小柴胡合剂',
                'sku' => 'K043',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小建中合剂',
                'sku' => 'K114',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小儿七星茶合剂',
                'sku' => 'K116',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小儿开胃合剂',
                'sku' => 'K117',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小儿止咳合剂',
                'sku' => 'K175',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小青龙合剂',
                'sku' => 'K176',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '千金苇茎合剂',
                'sku' => 'K177',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '五苓合剂',
                'sku' => 'K044',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '五味消毒合剂',
                'sku' => 'K070',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '五藤合剂',
                'sku' => 'K153',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六子衍宗合剂',
                'sku' => 'K120',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六味地黄合剂',
                'sku' => 'K121',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六君子合剂',
                'sku' => 'K122',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '木香顺气合剂',
                'sku' => 'K123',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '丹枝逍遥合剂',
                'sku' => 'K045',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '丹参合剂',
                'sku' => 'K214',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '天王补心合剂',
                'sku' => 'K093',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '天麻钩藤合剂',
                'sku' => 'K094',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '少腹逐瘀合剂',
                'sku' => 'K078',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '开胃消食合剂',
                'sku' => 'K130',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '风湿止痛合剂',
                'sku' => 'K159',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '止咳合剂',
                'sku' => 'K179',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '止嗽散合剂',
                'sku' => 'K181',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '化痰定喘合剂',
                'sku' => 'K183',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '四物合剂',
                'sku' => 'K058',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '四君子合剂',
                'sku' => 'K126',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '加味银翘合剂',
                'sku' => 'K006',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '外感回春合剂',
                'sku' => 'K009',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '白虎合剂',
                'sku' => 'K025',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '白果定喘合剂',
                'sku' => 'K185',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '石膏合剂',
                'sku' => 'K026',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '平瘿合剂',
                'sku' => 'K073',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '甘露合剂',
                'sku' => 'K028',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '甘露消毒合剂',
                'sku' => 'K048',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '生脉饮合剂',
                'sku' => 'K095',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '玉屏风合剂',
                'sku' => 'K096',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '玉女煎合剂',
                'sku' => 'K125',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '归脾合剂',
                'sku' => 'K059',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '仙方活命合剂',
                'sku' => 'K071',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '龙胆泻肝合剂',
                'sku' => 'K097',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '平胃合剂',
                'sku' => 'K128',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '半夏泻心合剂',
                'sku' => 'K129',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '半夏厚朴合剂',
                'sku' => 'K184',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '皮肤止痒合剂',
                'sku' => 'K211',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '辛夷合剂',
                'sku' => 'K010',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '杏苏饮合剂',
                'sku' => 'K011',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '竹叶石膏合剂',
                'sku' => 'K029',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '防风通圣合剂',
                'sku' => 'K030',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '导赤散合剂',
                'sku' => 'K046',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '妇科种子合剂',
                'sku' => 'K060',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '血府逐瘀合剂',
                'sku' => 'K082',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '血平合剂',
                'sku' => 'K100',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '安神合剂',
                'sku' => 'K101',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '芍药甘草合剂',
                'sku' => 'K134',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '当归拈痛合剂',
                'sku' => 'K155',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '当归四逆合剂',
                'sku' => 'K156',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '百合固金合剂',
                'sku' => 'K186',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '失笑散合剂',
                'sku' => 'K215',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '阳和合剂',
                'sku' => 'K218',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '壮腰益精合剂',
                'sku' => 'K224',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '杜仲合剂',
                'sku' => 'K083',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '补阳还五合剂',
                'sku' => 'K089',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '补中益气合剂',
                'sku' => 'K108',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '杞菊地黄合剂',
                'sku' => 'K131',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '芳香化湿合剂',
                'sku' => 'K135',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '苏子降气合剂',
                'sku' => 'K187',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '沙参麦冬合剂',
                'sku' => 'K247',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '參苓败毒合剂',
                'sku' => 'K001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '参灵五子合剂',
                'sku' => 'K140',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '参苓白术合剂',
                'sku' => 'K141',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '枝芩合剂',
                'sku' => 'K031',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '明目地黄合剂',
                'sku' => 'K039',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '软坚合剂',
                'sku' => 'K068',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '苦参合剂',
                'sku' => 'K074',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '炙甘草合剂',
                'sku' => 'K102',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '金樱缩泉合剂',
                'sku' => 'K136',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '肩痹合剂',
                'sku' => 'K157',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '狗脊合剂',
                'sku' => 'K158',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '泻白散合剂',
                'sku' => 'K180',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '苓桂术甘合剂',
                'sku' => 'K191',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '驱虫合剂',
                'sku' => 'K266',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '咽炎合剂',
                'sku' => 'K014',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '荆防败毒合剂',
                'sku' => 'K015',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '香薷饮合剂',
                'sku' => 'K016',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '香砂六君子合剂',
                'sku' => 'K138',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '养血熄风合剂',
                'sku' => 'K076',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '养阴清肺合剂',
                'sku' => 'K195',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复元活血合剂',
                'sku' => 'K088',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '济生肾气合剂',
                'sku' => 'K139',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '保和合剂',
                'sku' => 'K143',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '独活寄生合剂',
                'sku' => 'K160',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '姜活胜湿合剂',
                'sku' => 'K161',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '活络效灵合剂',
                'sku' => 'K162',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '胆汁川贝合剂',
                'sku' => 'K192',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '胃舒宁合剂',
                'sku' => 'K265',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桑菊合剂',
                'sku' => 'K017',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桂枝合剂',
                'sku' => 'K018',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '凉膈合剂',
                'sku' => 'K034',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '逍遥合剂',
                'sku' => 'K051',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桃红四物合剂',
                'sku' => 'K063',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '消风散合剂',
                'sku' => 'K075',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '消肿活血合剂',
                'sku' => 'K085',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '真武合剂',
                'sku' => 'K142',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '柴胡疏肝合剂',
                'sku' => 'K052',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '健脾补血合剂',
                'sku' => 'K065',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '健心合剂',
                'sku' => 'K106',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桑枝虎杖合剂',
                'sku' => 'K164',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桑杏合剂',
                'sku' => 'K189',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '通络化痹合剂',
                'sku' => 'K166',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '通窍活血合剂',
                'sku' => 'K239',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '铁笛合剂',
                'sku' => 'K202',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '眩晕合剂',
                'sku' => 'K210',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '调胃承气合剂',
                'sku' => 'K213',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '咳喘灵合剂',
                'sku' => 'K230',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '除湿合剂',
                'sku' => 'K236',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清热透表合剂',
                'sku' => 'K019',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清燥救肺合剂',
                'sku' => 'K199',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清肺平喘合剂',
                'sku' => 'K205',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '牵正解语合剂',
                'sku' => 'K105',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '旋覆代赭合剂',
                'sku' => 'K147',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '麻杏石甘合剂',
                'sku' => 'K200',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '普济消毒合剂',
                'sku' => 'K037',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '温经合剂',
                'sku' => 'K066',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '温胆合剂',
                'sku' => 'K107',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '疏肝和胃合剂',
                'sku' => 'K149',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒筋合剂',
                'sku' => 'K168',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒筋活络合剂',
                'sku' => 'K170',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒颈合剂',
                'sku' => 'K171',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒颈葛根合剂',
                'sku' => 'K212',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒筋立安合剂',
                'sku' => 'K235',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '感冒合剂',
                'sku' => 'K013',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鼻通灵合剂',
                'sku' => 'K023',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鼻通合剂',
                'sku' => 'K272',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '腰腿痛合剂',
                'sku' => 'K172',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '新柴胡疏肝合剂',
                'sku' => 'K271',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '酸枣仁合剂',
                'sku' => 'K109',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '镇肝熄风合剂',
                'sku' => 'K110',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '十全大补片',
                'sku' => 'A022',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '大黄片',
                'sku' => 'A134',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小柴胡片',
                'sku' => 'A169',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '上清片',
                'sku' => 'A183',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '乌须黑发片',
                'sku' => 'A215',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '丹枝逍遥片',
                'sku' => 'A016',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '女科八珍片',
                'sku' => 'A023',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '天麻田七片',
                'sku' => 'A025',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '天王补心片',
                'sku' => 'A034',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六味地黄片',
                'sku' => 'A049',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六君子片',
                'sku' => 'A060',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '风疹止痒片',
                'sku' => 'A064',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '乌梢止痒片',
                'sku' => 'A063',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '止咳化痰片',
                'sku' => 'A096',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '气管炎咳喘片',
                'sku' => 'A095',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '牛黄解毒片',
                'sku' => 'A107',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '五苓散片',
                'sku' => 'A138',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '丹田降脂片',
                'sku' => 'A188',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '天麻钩藤片',
                'sku' => 'A207',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '心可宁片',
                'sku' => 'A224',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '毛冬青片',
                'sku' => 'A255',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '目疾灵片',
                'sku' => 'A001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '头痛片',
                'sku' => 'A002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '甘露清热片',
                'sku' => 'A017',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '生田七片',
                'sku' => 'A026',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '生脉饮片',
                'sku' => 'A035',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '龙胆泻肝片',
                'sku' => 'A036',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '平胃片',
                'sku' => 'A051',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '归脾片',
                'sku' => 'A052',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '四藤片',
                'sku' => 'A070',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '田七杜仲片',
                'sku' => 'A071',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '左归片',
                'sku' => 'A101',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '右归片',
                'sku' => 'A102',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '百咳片',
                'sku' => 'A131',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '正骨紫金片',
                'sku' => 'A175',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '安睡枕中片',
                'sku' => 'A038',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '安神补心片',
                'sku' => 'A246',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '关节骨痛片',
                'sku' => 'A073',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '红花跌打片',
                'sku' => 'A179',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '防风通圣片',
                'sku' => 'A105',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '导赤片',
                'sku' => 'A114',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '防芷鼻炎片',
                'sku' => 'A180',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '回春再造片',
                'sku' => 'A191',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '补中益气片',
                'sku' => 'A042',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '芳香化湿片',
                'sku' => 'A053',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '足跟痛片',
                'sku' => 'A075',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鸡血藤片',
                'sku' => 'A085',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '抗骨增生片',
                'sku' => 'A093',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '坐骨神经片',
                'sku' => 'A135',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '杞菊地黄片',
                'sku' => 'A170',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '身痛逐瘀片',
                'sku' => 'A202',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '参苓白术片',
                'sku' => 'A054',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '苦参片',
                'sku' => 'A066',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '枝子清火片',
                'sku' => 'A110',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '金佛止痛片',
                'sku' => 'A111',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '金匮肾气片',
                'sku' => 'A221',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '降脂片',
                'sku' => 'A129',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '降脂化瘀片',
                'sku' => 'A196',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '肺热喘咳片',
                'sku' => 'A154',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '知柏地黄片',
                'sku' => 'A178',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '固精补肾片',
                'sku' => 'A216',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '固本强身片',
                'sku' => 'A262',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方山豆根片',
                'sku' => 'A003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方板兰根片',
                'sku' => 'A004',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方藿胆片',
                'sku' => 'A005',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方丹参片',
                'sku' => 'A040',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方山楂降脂片',
                'sku' => 'A044',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方白芷片',
                'sku' => 'A080',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方鸡血藤片',
                'sku' => 'A081',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方四藤祛风片',
                'sku' => 'A092',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方罗布麻片',
                'sku' => 'A100',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方活络片',
                'sku' => 'A118',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方感冒灵片',
                'sku' => 'A120',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方穿心莲片',
                'sku' => 'A139',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方野木瓜片',
                'sku' => 'A142',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方川贝片',
                'sku' => 'A166',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方杜仲片',
                'sku' => 'A194',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方桔梗镇咳片',
                'sku' => 'A184',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方鱼腥草片',
                'sku' => 'A210',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '穿心莲片',
                'sku' => 'A007',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '祛湿清热片',
                'sku' => 'A020',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '保和片',
                'sku' => 'A055',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '香砂六君子片',
                'sku' => 'A056',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '香砂养胃片',
                'sku' => 'A057',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '独活寄生片',
                'sku' => 'A079',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '顺气化痰止咳片',
                'sku' => 'A097',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '顺气止咳片',
                'sku' => 'A263',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '胃乃安片',
                'sku' => 'A104',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '胃痛定片',
                'sku' => 'A182',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '胃得安片',
                'sku' => 'A229',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '养阴清肺片',
                'sku' => 'A128',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '前列通片',
                'sku' => 'A146',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '活血解毒片',
                'sku' => 'A186',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '咳嗽定喘片',
                'sku' => 'A226',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '结石通片',
                'sku' => 'A249',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桑菊饮片',
                'sku' => 'A006',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '消肿活血片',
                'sku' => 'A027',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桂枝茯苓片',
                'sku' => 'A024',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '益氣缩泉片',
                'sku' => 'A058',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '热毒消肿片',
                'sku' => 'A019',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '热痹片',
                'sku' => 'A077',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '通血活络片',
                'sku' => 'A084',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '通络化痹片',
                'sku' => 'A140',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '通宣理肺片',
                'sku' => 'A181',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桔红片',
                'sku' => 'A125',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '骨松宝片',
                'sku' => 'A193',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '骨刺片',
                'sku' => 'A264',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '柴葛解肌片',
                'sku' => 'A205',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '凉膈散片',
                'sku' => 'A208',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '逍遙片',
                'sku' => 'A227',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清火口糜片',
                'sku' => 'A009',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '脱痔片',
                'sku' => 'A061',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '野木瓜片',
                'sku' => 'A086',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清肺抑火片',
                'sku' => 'A106',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清热润肠片',
                'sku' => 'A112',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清气化痰片',
                'sku' => 'A251',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清热止咳平喘片',
                'sku' => 'A260',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '黄莲上清片',
                'sku' => 'A113',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '黄芩上清片',
                'sku' => 'A245',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '颈肩痛片',
                'sku' => 'A149',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '银黄片',
                'sku' => 'A165',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '羚羊感冒片',
                'sku' => 'A198',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '羚翘解毒片',
                'sku' => 'A230',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '盘龙追风片',
                'sku' => 'A199',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '减肥降脂片',
                'sku' => 'A218',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '强力银翘片',
                'sku' => 'A011',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '筋骨跌伤片',
                'sku' => 'A030',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒筋活络片',
                'sku' => 'A088',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒脊灵片',
                'sku' => 'A089',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒颈葛根片',
                'sku' => 'A152',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒筋祛风片',
                'sku' => 'A201',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒肝片',
                'sku' => 'A212',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '蛤蚧顺气片',
                'sku' => 'A098',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '越鞠保和片',
                'sku' => 'A187',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '喉痛解毒片',
                'sku' => 'A189',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '痛风尿酸清片',
                'sku' => 'A192',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '滋补生发片',
                'sku' => 'A214',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '滋肾宁神片',
                'sku' => 'A248',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鼻咽金丹片',
                'sku' => 'A012',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鼻舒适片',
                'sku' => 'A147',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '腰腿痛片',
                'sku' => 'A090',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '腰息痛片',
                'sku' => 'A094',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '腰痛膝酸片',
                'sku' => 'A177',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '腰椎痹痛片',
                'sku' => 'A222',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '腰痛片',
                'sku' => 'A254',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '障眼明片',
                'sku' => 'A145',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '酸枣仁汤片',
                'sku' => 'A141',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '膝痹灵片',
                'sku' => 'A091',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '藿香正气片',
                'sku' => 'A021',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '藿香正气合剂',
                'sku' => 'K053',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '藿朴夏苓合剂',
                'sku' => 'K055',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '一贯煎颗粒',
                'sku' => 'B035',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '九味姜活颗粒',
                'sku' => 'B018',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '十味甘麦大枣颗粒',
                'sku' => 'B022',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '十味化饮颗粒',
                'sku' => 'B060',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '二陈颗粒',
                'sku' => 'B023',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '二母宁嗽颗粒',
                'sku' => 'B027',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '小柴胡颗粒',
                'sku' => 'B005',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六味地黄颗粒',
                'sku' => 'B013',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '木香顺气颗粒',
                'sku' => 'B016',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '川贝枇杷颗粒',
                'sku' => 'B042',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '川芎茶调颗粒',
                'sku' => 'B079',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '风湿止痛颗粒',
                'sku' => 'B008',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '止嗽散颗粒',
                'sku' => 'B015',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '止咳颗粒',
                'sku' => 'B041',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六君子颗粒',
                'sku' => 'B036',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '六子衍宗颗粒',
                'sku' => 'B073',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '天王补心颗粒',
                'sku' => 'B039',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '五藤颗粒',
                'sku' => 'B053',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '五味消毒颗粒',
                'sku' => 'B056',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '五苓颗粒',
                'sku' => 'B084',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '丹枝逍遥颗粒',
                'sku' => 'B058',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '丹参颗粒',
                'sku' => 'B081',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '开胃消食颗粒',
                'sku' => 'B087',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '四物颗粒',
                'sku' => 'B007',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '四君子颗粒',
                'sku' => 'B020',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '归脾颗粒',
                'sku' => 'B009',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '甘露消毒颗粒',
                'sku' => 'B010',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '甘露颗粒',
                'sku' => 'B062',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '玉女煎颗粒',
                'sku' => 'B028',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '玉屏风颗粒',
                'sku' => 'B071',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '生脉饮颗粒',
                'sku' => 'B033',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '白果定喘颗粒',
                'sku' => 'B040',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '龙胆泻肝颗粒',
                'sku' => 'B043',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '平胃颗粒',
                'sku' => 'B047',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '仙方活命颗粒',
                'sku' => 'B088',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '血府逐瘀颗粒',
                'sku' => 'B026',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '当归拈痛颗粒',
                'sku' => 'B038',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '当归四逆颗粒',
                'sku' => 'B083',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '芍药甘草颗粒',
                'sku' => 'B044',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '百合固金颗粒',
                'sku' => 'B064',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '安神颗粒',
                'sku' => 'B066',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '竹叶石膏颗粒',
                'sku' => 'B076',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '防风通圣颗粒',
                'sku' => 'B055',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '杏苏饮颗粒',
                'sku' => 'B025',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '补中益气颗粒',
                'sku' => 'B049',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '杞菊地黄颗粒',
                'sku' => 'B059',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '沙参麦冬颗粒',
                'sku' => 'B082',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '参苓白术颗粒',
                'sku' => 'B045',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '参灵五子颗粒',
                'sku' => 'B078',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '肩痹颗粒',
                'sku' => 'B050',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '苓桂术甘颗粒',
                'sku' => 'B086',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方杜仲颗粒',
                'sku' => 'B003',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方浙贝颗粒',
                'sku' => 'B004',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方辛夷颗粒',
                'sku' => 'B006',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方苦参颗粒',
                'sku' => 'B019',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复方狗脊颗粒',
                'sku' => 'B024',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '复元活血颗粒',
                'sku' => 'B052',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '独活寄生颗粒',
                'sku' => 'B011',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '香砂六君子颗粒',
                'sku' => 'B014',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '荆防败毒颗粒',
                'sku' => 'B017',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '栀芩颗粒',
                'sku' => 'B021',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '咽炎颗粒',
                'sku' => 'B029',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '保和颗粒',
                'sku' => 'B034',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '活络效灵颗粒',
                'sku' => 'B046',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '姜活胜湿颗粒',
                'sku' => 'B048',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '养阴清肺颗粒',
                'sku' => 'B057',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '养血熄风颗粒',
                'sku' => 'B070',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桑菊颗粒',
                'sku' => 'B001',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桑枝虎杖颗粒',
                'sku' => 'B031',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桑杏颗粒',
                'sku' => 'B037',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桃红四物颗粒',
                'sku' => 'B002',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '消肿活血颗粒',
                'sku' => 'B054',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '桂枝颗粒',
                'sku' => 'B085',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '眩晕颗粒',
                'sku' => 'B077',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '柴胡疏肝颗粒',
                'sku' => 'B061',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '逍遥颗粒',
                'sku' => 'B067',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '银翘解毒颗粒',
                'sku' => 'B012',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '清热透表颗粒',
                'sku' => 'B072',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒筋颗粒',
                'sku' => 'B030',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '舒筋活络颗粒',
                'sku' => 'B069',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '滋阴地黄颗粒',
                'sku' => 'B068',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '疏肝和胃颗粒',
                'sku' => 'B074',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鼻通灵颗粒',
                'sku' => 'B051',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '鼻通颗粒',
                'sku' => 'B063',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '腰腿痛颗粒',
                'sku' => 'B075',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '解表化饮颗粒',
                'sku' => 'B080',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '酸枣仁颗粒',
                'sku' => 'B065',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '藿香正气颗粒',
                'sku' => 'B032',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '人参败毒合剂',
                'sku' => 'M001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '九味姜活合剂',
                'sku' => 'M002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '川芎合剂',
                'sku' => 'M003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '川芎茶调合剂',
                'sku' => 'M004',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '升麻葛根合剂',
                'sku' => 'M005',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '消痤合剂',
                'sku' => 'M007',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '辛夷合剂',
                'sku' => 'M010',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '杏苏散合剂',
                'sku' => 'M011',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '咽炎合剂',
                'sku' => 'M014',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '荆防败毒合剂',
                'sku' => 'M015',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '香薷饮合剂',
                'sku' => 'M016',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '感冒合剂',
                'sku' => 'M013',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桑菊饮合剂',
                'sku' => 'M017',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桂枝合剂',
                'sku' => 'M018',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '银翘解毒合剂',
                'sku' => 'M020',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清瘟解毒合剂',
                'sku' => 'M022',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '鼻通灵合剂',
                'sku' => 'M023',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '止泻合剂',
                'sku' => 'M024',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '白虎合剂',
                'sku' => 'M025',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '石膏合剂',
                'sku' => 'M026',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '鼻炎糖浆',
                'sku' => 'M027',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '甘露合剂',
                'sku' => 'M028',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '竹叶石膏合剂',
                'sku' => 'M029',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '防风通圣合剂',
                'sku' => 'M030',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '枝芩合剂',
                'sku' => 'M031',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '凉膈合剂',
                'sku' => 'M034',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '普济消毒合剂',
                'sku' => 'M037',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '明目地黄合剂',
                'sku' => 'M039',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '八正散合剂',
                'sku' => 'M040',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '治糖合剂',
                'sku' => 'M041',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '三仁合剂',
                'sku' => 'M042',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小柴胡合剂',
                'sku' => 'M043',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '五苓合剂',
                'sku' => 'M044',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '丹枝逍遥合剂',
                'sku' => 'M045',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '导赤散合剂',
                'sku' => 'M046',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '二仙合剂',
                'sku' => 'M047',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '甘露消毒合剂',
                'sku' => 'M048',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '葶苈大枣泄肺合剂',
                'sku' => 'M050',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '逍遥合剂',
                'sku' => 'M051',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '柴胡疏肝合剂',
                'sku' => 'M052',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '藿香正气合剂',
                'sku' => 'M053',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '健脑补血合剂',
                'sku' => 'M054',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '藿朴夏苓合剂',
                'sku' => 'M055',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '十全大补合剂',
                'sku' => 'M056',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '妇科大补合剂',
                'sku' => 'M057',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '四物合剂',
                'sku' => 'M058',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '归脾合剂',
                'sku' => 'M059',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '妇科种子合剂',
                'sku' => 'M060',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '妇炎清合剂',
                'sku' => 'M061',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桃红四物合剂',
                'sku' => 'M063',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '养血当归精合剂',
                'sku' => 'M064',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '温经合剂',
                'sku' => 'M066',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '七味消毒合剂',
                'sku' => 'M067',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '软坚合剂',
                'sku' => 'M068',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '内消清毒合剂',
                'sku' => 'M069',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '仙方活命合剂',
                'sku' => 'M071',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '乌梢止痒合剂',
                'sku' => 'M072',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '平瘿合剂',
                'sku' => 'M073',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '苦参合剂',
                'sku' => 'M074',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '消风散合剂',
                'sku' => 'M075',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '养血熄风合剂',
                'sku' => 'M076',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '槐榆合剂',
                'sku' => 'M077',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '少腹逐瘀合剂',
                'sku' => 'M078',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '头痛合剂',
                'sku' => 'M080',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '伤科杜仲合剂',
                'sku' => 'M081',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '血府逐瘀合剂',
                'sku' => 'M082',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '杜仲合剂',
                'sku' => 'M083',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '消肿活血合剂',
                'sku' => 'M085',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '滋阴降火合剂',
                'sku' => 'M086',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复元活血合剂',
                'sku' => 'M088',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '补阳还五合剂',
                'sku' => 'M089',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '一贯煎合剂',
                'sku' => 'M090',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '十味温胆合剂',
                'sku' => 'M091',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '十味甘麦大枣合剂',
                'sku' => 'M092',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '天王补心合剂',
                'sku' => 'M093',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '天麻钩藤合剂',
                'sku' => 'M094',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '生脉饮合剂',
                'sku' => 'M095',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '玉屏风合剂',
                'sku' => 'M096',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '龙胆泻肝合剂',
                'sku' => 'M097',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方大青叶合剂',
                'sku' => 'M098',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '平肝熄风合剂',
                'sku' => 'M099',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '安神合剂',
                'sku' => 'M101',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '炙甘草合剂',
                'sku' => 'M102',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '青蒿鳖甲合剂',
                'sku' => 'M103',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '牵正解语合剂',
                'sku' => 'M105',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '温胆合剂',
                'sku' => 'M107',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '补中益气合剂',
                'sku' => 'M108',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '酸枣仁合剂',
                'sku' => 'M109',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '镇肝熄风合剂',
                'sku' => 'M110',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '七味白术合剂',
                'sku' => 'M112',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '二陈合剂',
                'sku' => 'M113',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小建中合剂',
                'sku' => 'M114',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小儿七星茶合剂',
                'sku' => 'M116',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小儿开胃糖浆',
                'sku' => 'M117',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '消渴合剂',
                'sku' => 'M118',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '疏风解表合剂',
                'sku' => 'M119',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六子衍宗合剂',
                'sku' => 'M120',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六味地黄合剂',
                'sku' => 'M121',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六君子合剂',
                'sku' => 'M122',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '木香顺气合剂',
                'sku' => 'M123',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '口疡合剂',
                'sku' => 'M124',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '玉女煎合剂',
                'sku' => 'M125',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '四君子合剂',
                'sku' => 'M126',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '平胃合剂',
                'sku' => 'M128',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '开胃消食合剂',
                'sku' => 'M130',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '杞菊地黄合剂',
                'sku' => 'M131',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '附子理中合剂',
                'sku' => 'M132',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '附桂八味合剂',
                'sku' => 'M133',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '芍药甘草合剂',
                'sku' => 'M134',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '芳香化湿合剂',
                'sku' => 'M135',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '金樱缩泉合剂',
                'sku' => 'M136',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '吴茱萸合剂',
                'sku' => 'M137',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '香砂六君子合剂',
                'sku' => 'M138',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '济生肾气合剂',
                'sku' => 'M139',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '参灵五子合剂',
                'sku' => 'M140',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '参苓白术合剂',
                'sku' => 'M141',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '保和合剂',
                'sku' => 'M143',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '理中合剂',
                'sku' => 'M146',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '旋覆代赭合剂',
                'sku' => 'M147',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '萆解分清合剂',
                'sku' => 'M148',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '滋阴地黄合剂',
                'sku' => 'M151',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '上中下通用痛风合剂',
                'sku' => 'M152',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '五藤合剂',
                'sku' => 'M153',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '关节骨痛合剂',
                'sku' => 'M154',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '当归拈痛合剂',
                'sku' => 'M155',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '当归四逆合剂',
                'sku' => 'M156',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '肩痹合剂',
                'sku' => 'M157',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '狗脊合剂',
                'sku' => 'M158',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '风湿止痛合剂',
                'sku' => 'M159',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '独活寄生合剂',
                'sku' => 'M160',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '姜活胜湿合剂',
                'sku' => 'M161',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '活络效灵合剂',
                'sku' => 'M162',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桑枝虎杖合剂',
                'sku' => 'M164',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒筋合剂',
                'sku' => 'M168',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒颈合剂',
                'sku' => 'M171',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '二母宁嗽合剂',
                'sku' => 'M174',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小儿止咳糖剂',
                'sku' => 'M175',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小青龙合剂',
                'sku' => 'M176',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '千金苇茎合剂',
                'sku' => 'M177',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '川贝枇杷合剂',
                'sku' => 'M178',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '止咳合剂',
                'sku' => 'M179',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '泻白散合剂',
                'sku' => 'M180',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '止嗽散合剂',
                'sku' => 'M181',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '化痰定喘合剂',
                'sku' => 'M183',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '半夏厚朴合剂',
                'sku' => 'M184',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '白果定喘合剂',
                'sku' => 'M185',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '苏子降气合剂',
                'sku' => 'M187',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '纳气平喘合剂',
                'sku' => 'M188',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桑杏合剂',
                'sku' => 'M189',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '苓桂术甘合剂',
                'sku' => 'M191',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '浙贝合剂',
                'sku' => 'M193',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '养阴清肺合剂',
                'sku' => 'M195',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '增液合剂',
                'sku' => 'M198',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清燥救肺合剂',
                'sku' => 'M199',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '麻杏石甘合剂',
                'sku' => 'M200',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '铁笛合剂',
                'sku' => 'M202',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '皮肤止痒合剂',
                'sku' => 'M211',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒颈葛根合剂',
                'sku' => 'M212',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '丹参合剂',
                'sku' => 'M214',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '流感合剂',
                'sku' => 'M217',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '八珍合剂',
                'sku' => 'M221',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '七味头晕方合剂',
                'sku' => 'M223',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '壮腰益精合剂',
                'sku' => 'M224',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '茵陈篙汤合剂',
                'sku' => 'M227',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '宽膈去郁汤合剂',
                'sku' => 'M228',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '咳喘灵合剂',
                'sku' => 'M230',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小儿喜食合剂',
                'sku' => 'M231',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '平咳糖浆',
                'sku' => 'M232',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '二妙散合剂',
                'sku' => 'M233',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '强肝合剂',
                'sku' => 'M234',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒筋立安合剂',
                'sku' => 'M235',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '除湿合剂',
                'sku' => 'M236',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '益母胜金合剂',
                'sku' => 'M237',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '通窍活血合剂',
                'sku' => 'M239',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '芡实合剂',
                'sku' => 'M240',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '大青蚤休合剂',
                'sku' => 'M241',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '半枝莲合剂',
                'sku' => 'M245',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '参芪首乌合剂',
                'sku' => 'M246',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '沙参麦冬合剂',
                'sku' => 'M247',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '薏苡仁合剂',
                'sku' => 'M249',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '伤科乳香合剂',
                'sku' => 'M250',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '和中消滞合剂',
                'sku' => 'M259',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '胃舒宁合剂',
                'sku' => 'M265',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '阳和合剂',
                'sku' => 'M218',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '参苏饮合剂',
                'sku' => 'M038',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '目疾灵片',
                'sku' => 'P001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桑菊颗粒',
                'sku' => 'B001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桃红四物颗粒',
                'sku' => 'B002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方杜仲颗粒',
                'sku' => 'B003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方浙贝颗粒',
                'sku' => 'B004',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方辛夷颗粒',
                'sku' => 'B006',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '四物颗粒',
                'sku' => 'B007',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '风湿止痛颗粒',
                'sku' => 'B008',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '归脾颗粒',
                'sku' => 'B009',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '甘露消毒颗粒',
                'sku' => 'B010',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '独活寄生颗粒',
                'sku' => 'B011',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '银翘解毒颗粒',
                'sku' => 'B012',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六味地黄颗粒',
                'sku' => 'B013',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '香砂六君子颗粒',
                'sku' => 'B014',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '止嗽散颗粒',
                'sku' => 'B015',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '木香顺气颗粒',
                'sku' => 'B016',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '荆防败毒颗粒',
                'sku' => 'B017',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '九味姜活颗粒',
                'sku' => 'B018',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方苦参颗粒',
                'sku' => 'B019',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '四君子颗粒',
                'sku' => 'B020',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '栀芩颗粒',
                'sku' => 'B021',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '十味甘麦大枣颗粒',
                'sku' => 'B022',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '二陈颗粒',
                'sku' => 'B023',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方狗脊颗粒',
                'sku' => 'B024',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '杏苏饮颗粒',
                'sku' => 'B025',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '血府逐瘀颗粒',
                'sku' => 'B026',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '二母宁嗽颗粒',
                'sku' => 'B027',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '玉女煎颗粒',
                'sku' => 'B028',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '咽炎颗粒',
                'sku' => 'B029',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桑枝虎杖颗粒',
                'sku' => 'B031',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '藿香正气颗粒',
                'sku' => 'B032',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '生脉饮颗粒',
                'sku' => 'B033',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '保和颗粒',
                'sku' => 'B034',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '一贯煎颗粒',
                'sku' => 'B035',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六君子颗粒',
                'sku' => 'B036',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桑杏颗粒',
                'sku' => 'B037',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '当归拈痛颗粒',
                'sku' => 'B038',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '天王补心颗粒',
                'sku' => 'B039',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '白果定喘颗粒',
                'sku' => 'B040',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '止咳颗粒',
                'sku' => 'B041',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '川贝枇杷颗粒',
                'sku' => 'B042',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '龙胆泻肝颗粒',
                'sku' => 'B043',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '芍药甘草颗粒',
                'sku' => 'B044',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '参苓白术颗粒',
                'sku' => 'B045',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '活络效灵颗粒',
                'sku' => 'B046',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '平胃颗粒',
                'sku' => 'B047',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '姜活胜湿颗粒',
                'sku' => 'B048',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '补中益气颗粒',
                'sku' => 'B049',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '肩痹颗粒',
                'sku' => 'B050',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '鼻通灵颗粒',
                'sku' => 'B051',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复元活血颗粒',
                'sku' => 'B052',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '五藤颗粒',
                'sku' => 'B053',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '消肿活血颗粒',
                'sku' => 'B054',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '防风通圣颗粒',
                'sku' => 'B055',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '五味消毒颗粒',
                'sku' => 'B056',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '养阴清肺颗粒',
                'sku' => 'B057',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '丹枝逍遥颗粒',
                'sku' => 'B058',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '杞菊地黄颗粒',
                'sku' => 'B059',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '十味化饮颗粒',
                'sku' => 'B060',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '柴胡疏肝颗粒',
                'sku' => 'B061',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '甘露颗粒',
                'sku' => 'B062',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '鼻通颗粒',
                'sku' => 'B063',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '百合固金颗粒',
                'sku' => 'B064',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '酸枣仁颗粒',
                'sku' => 'B065',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '安神颗粒',
                'sku' => 'B066',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '逍遥颗粒',
                'sku' => 'B067',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '滋阴地黄颗粒',
                'sku' => 'B068',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒筋活络颗粒',
                'sku' => 'B069',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '养血熄风颗粒',
                'sku' => 'B070',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '玉屏风颗粒',
                'sku' => 'B071',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清热透表颗粒',
                'sku' => 'B072',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六子衍宗颗粒',
                'sku' => 'B073',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '疏肝和胃颗粒',
                'sku' => 'B074',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '腰腿痛颗粒',
                'sku' => 'B075',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '竹叶石膏颗粒',
                'sku' => 'B076',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '眩晕颗粒',
                'sku' => 'B077',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '参灵五子颗粒',
                'sku' => 'B078',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '川芎茶调颗粒',
                'sku' => 'B079',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '解表化饮颗粒',
                'sku' => 'B080',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '丹参颗粒',
                'sku' => 'B081',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '沙参麦冬颗粒',
                'sku' => 'B082',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '当归四逆颗粒',
                'sku' => 'B083',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '五苓颗粒',
                'sku' => 'B084',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桂枝颗粒',
                'sku' => 'B085',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '苓桂术甘颗粒',
                'sku' => 'B086',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '开胃消食颗粒',
                'sku' => 'B087',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '仙方活命颗粒',
                'sku' => 'B088',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '头痛片',
                'sku' => 'P002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方山豆根片',
                'sku' => 'P003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方板兰根片',
                'sku' => 'P004',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桑菊饮片',
                'sku' => 'P006',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '穿心莲片',
                'sku' => 'P007',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清火口糜片',
                'sku' => 'P009',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '强力银翘片',
                'sku' => 'P011',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '鼻咽金丹片',
                'sku' => 'P012',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '丹枝逍遥片',
                'sku' => 'P016',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '甘露清热片',
                'sku' => 'P017',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '祛湿清热片',
                'sku' => 'P020',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '藿香正气片',
                'sku' => 'P021',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '十全大补片',
                'sku' => 'P022',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '女科八珍片',
                'sku' => 'P023',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桂枝茯苓片',
                'sku' => 'P024',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '天麻田七片',
                'sku' => 'P025',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '消肿活血片',
                'sku' => 'P027',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '偏头痛片',
                'sku' => 'P028',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '筋骨跌伤片',
                'sku' => 'P030',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '天王补心片',
                'sku' => 'P034',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '生脉饮片',
                'sku' => 'P035',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '龙胆泻肝片',
                'sku' => 'P036',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '安神定志片',
                'sku' => 'P037',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '安睡枕中片',
                'sku' => 'P038',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方丹参片',
                'sku' => 'P040',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '补中益气片',
                'sku' => 'P042',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方山楂降脂片',
                'sku' => 'P044',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六味地黄片',
                'sku' => 'P049',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '平胃片',
                'sku' => 'P051',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '归脾片',
                'sku' => 'P052',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '芳香化湿片',
                'sku' => 'P053',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '参苓白术片',
                'sku' => 'P054',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '保和片',
                'sku' => 'P055',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '香砂六君子片',
                'sku' => 'P056',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '香砂养胃片',
                'sku' => 'P057',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '益气缩泉片',
                'sku' => 'P058',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '六君子片',
                'sku' => 'P060',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '脱痔片',
                'sku' => 'P061',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '仙方活命片',
                'sku' => 'P062',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '风疹止痒灵片',
                'sku' => 'P064',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '皮肤止痒片',
                'sku' => 'P065',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '湿毒痒痛灵片',
                'sku' => 'P067',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '四藤片',
                'sku' => 'P070',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '田七杜仲片',
                'sku' => 'P071',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '关节骨痛片',
                'sku' => 'P073',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '足跟痛片',
                'sku' => 'P075',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '独活寄生片',
                'sku' => 'P079',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方鸡血藤片',
                'sku' => 'P081',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '通血活络片',
                'sku' => 'P084',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '鸡血腾片',
                'sku' => 'P085',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '野木瓜片',
                'sku' => 'P086',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒筋活络片',
                'sku' => 'P088',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒脊灵片',
                'sku' => 'P089',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '腰腿痛片',
                'sku' => 'P090',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '膝痹灵片',
                'sku' => 'P091',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方四藤祛风片',
                'sku' => 'P092',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '抗骨增生片',
                'sku' => 'P093',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '气管炎咳喘片',
                'sku' => 'P095',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '止咳化痰片',
                'sku' => 'P096',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '顺气化痰止咳片',
                'sku' => 'P097',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '精制蛤蚧顺气片',
                'sku' => 'P098',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方罗布麻片',
                'sku' => 'P100',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '左归片',
                'sku' => 'P101',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '右归片',
                'sku' => 'P102',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '防风通圣片',
                'sku' => 'P105',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清肺抑火片',
                'sku' => 'P106',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '牛黄解毒片',
                'sku' => 'P107',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '枝子清火片',
                'sku' => 'P110',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '导赤片',
                'sku' => 'P114',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小青龙片',
                'sku' => 'P115',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '补血调经片',
                'sku' => 'P117',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方痹症片',
                'sku' => 'P118',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清毒消炎片',
                'sku' => 'P121',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '喉疾灵片',
                'sku' => 'P123',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '桔红片',
                'sku' => 'P125',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '养阴清肺片',
                'sku' => 'P128',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '降脂片',
                'sku' => 'P129',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '百咳片',
                'sku' => 'P131',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '大黃片',
                'sku' => 'P134',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '坐骨神经片',
                'sku' => 'P135',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '五苓散片',
                'sku' => 'P138',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方穿心莲片',
                'sku' => 'P139',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '通络化痹片',
                'sku' => 'P140',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '酸枣仁汤片',
                'sku' => 'P141',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方野木瓜片',
                'sku' => 'P142',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '障眼明片',
                'sku' => 'P145',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '鼻舒适片',
                'sku' => 'P147',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒颈葛根片',
                'sku' => 'P152',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '肺热咳嗽片',
                'sku' => 'P154',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '蒲公英解毒片',
                'sku' => 'P159',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方川贝片',
                'sku' => 'P166',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小柴胡片',
                'sku' => 'P169',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '杞菊地黄片',
                'sku' => 'P170',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '风湿止痛片',
                'sku' => 'P174',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '千金止帶片',
                'sku' => 'P176',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '腰痛膝酸片',
                'sku' => 'P177',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '知柏地黄片',
                'sku' => 'P178',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '红花跌打片',
                'sku' => 'P179',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '防芷鼻炎片',
                'sku' => 'P180',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '通宣理肺片',
                'sku' => 'P181',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '胃痛定片',
                'sku' => 'P182',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '上清片',
                'sku' => 'P183',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方桔梗镇咳片',
                'sku' => 'P184',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '活血壮筋片',
                'sku' => 'P185',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '越鞠保和片',
                'sku' => 'P187',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '丹田降脂片',
                'sku' => 'P188',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '喉痛解毒片',
                'sku' => 'P189',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '润肺止咳片',
                'sku' => 'P190',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '回春再造片',
                'sku' => 'P191',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '痛风尿酸清片',
                'sku' => 'P192',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '骨松宝片',
                'sku' => 'P193',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '复方杜仲片',
                'sku' => 'P194',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '更年宁片',
                'sku' => 'P195',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '降脂化瘀片',
                'sku' => 'P196',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '荊防敗毒片',
                'sku' => 'P197',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '羚羊感冒片',
                'sku' => 'P198',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '盘龙追风片',
                'sku' => 'P199',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '湿毒清片',
                'sku' => 'P200',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒筋祛风片',
                'sku' => 'P201',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '身痛逐瘀片',
                'sku' => 'P202',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '升阳益胃片',
                'sku' => 'P203',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '柴葛解肌片',
                'sku' => 'P205',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '天麻钩藤片',
                'sku' => 'P207',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '凉膈散片',
                'sku' => 'P208',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '健步虎潜片',
                'sku' => 'P209',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '健脑片',
                'sku' => 'P211',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒肝片',
                'sku' => 'P212',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '槐榆片',
                'sku' => 'P213',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '滋补生发片',
                'sku' => 'P214',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '乌须黑发片',
                'sku' => 'P215',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '固精补肾片',
                'sku' => 'P216',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '浙贝片',
                'sku' => 'P217',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '减肥降脂片',
                'sku' => 'P218',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '明目地黄片',
                'sku' => 'P219',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '金匮肾气片',
                'sku' => 'P221',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '腰椎痹痛片',
                'sku' => 'P222',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '逍遥片',
                'sku' => 'P227',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '川芎茶调片',
                'sku' => 'P228',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '胃得安片',
                'sku' => 'P229',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清火片',
                'sku' => 'P235',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '养阴降糖片',
                'sku' => 'P236',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '感冒片',
                'sku' => 'P239',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '银翘感冒片',
                'sku' => 'P240',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '伤风片',
                'sku' => 'P241',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '脑衰片',
                'sku' => 'P242',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '妇康宁片',
                'sku' => 'P244',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '黄芩上清片',
                'sku' => 'P245',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '二陈片',
                'sku' => 'P247',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '滋肾宁神片',
                'sku' => 'P248',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '结石通片',
                'sku' => 'P249',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '清热暗苍片',
                'sku' => 'P250',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '蛇胆陈皮散',
                'sku' => 'S001',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '蛇胆川贝散',
                'sku' => 'S002',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '保儿散',
                'sku' => 'S003',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 4,
                'company_id' => 1
            ),
            array(
                'name_cn' => '理血王软胶囊',
                'sku' => 'C001',
                'metric_unit_id' => 5,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '空袋 （包）',
                'sku' => 'Z001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => 'Sticker 一张',
                'sku' => 'Z002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '药水瓶 200 ml',
                'sku' => 'Z003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '药水瓶 120ml',
                'sku' => 'Z004',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 1
            ),
            array(
                'name_cn' => '蛇胆陈皮散',
                'sku' => 'S001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '蛇胆川贝散',
                'sku' => 'S002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '保儿散',
                'sku' => 'S003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '理血王软胶囊',
                'sku' => 'C001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '空袋',
                'sku' => 'Z001',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => 'Sticker 一张',
                'sku' => 'Z002',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '药水瓶200ml',
                'sku' => 'Z003',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '药水瓶120ml',
                'sku' => 'Z004',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 3,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小柴胡颗粒',
                'sku' => 'B005',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '小八味合剂',
                'sku' => 'M115',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '通络活血合剂',
                'sku' => 'M225',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 2
            ),
            array(
                'name_cn' => '舒筋颗粒',
                'sku' => 'B030',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 4,
                'company_id' => 2
            ),
            array(
                'name_cn' => '青蒿散火合剂',
                'sku' => 'K103',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            ),
            array(
                'name_cn' => '感冒清热止咳合剂',
                'sku' => 'K237',
                'metric_unit_id' => 1,
                'metric_unit_volume_id' => 2,
                'company_id' => 1
            )
        );
    }
}
