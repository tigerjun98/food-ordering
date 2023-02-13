<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Option;
use App\Models\Setting;
use App\Models\Specialist;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getListing() as $var){
            $model = new Option();
            foreach ($var as $col => $val){
                $model->{$col} = $val;
            }
            $model->type = 'specialist';
            $model->admin_id = Admin::all()->random()->id;
            $model->save();
        }
    }

    public function getListing()
    {
        // https://www.webmd.com/health-insurance/insurance-doctor-types
        return array(
            array(
                'name_cn' => '针刺治疗',
                'name_en' => 'Acupuncture',
                'desc_cn' => '针刺治疗是以毫针刺激特定穴位，并通过全身经络的传导来达到调和气血、调整脏腑功能的作用，达到“扶正祛邪”、“治病保健”的目的。',
                'desc_en' => 'Acupuncture is a Traditional Chinese Medicine (TCM) technique that involves the insertion of thin needles into specific points on the body. The goal is to promote physical and emotional well-being. These thin needles are inserted into “acupoints” on the body to relieve pain or other symptoms.',
            ),
            array(
                'name_cn' => '耳穴疗法',
                'name_en' => 'Auricular Acupuncture',
                'desc_cn' => '耳穴是人体分布于耳廓上的腧穴，也是反应点。耳穴的适用范围广阔，各类疾病如头痛，失眠，过敏性体质，荷尔蒙相关疾病，肥胖问题，精神相关疾病等等皆能采用耳穴治疗。本中心采用天然耳豆置于耳廓相关刺激点，患者只需定期自行刺激，便能达到一定的疗效。',
                'desc_en' => 'Also known as ear seeds therapy, auricular acupuncture is a form of popular acupuncture that involves stimulating pressure points on the ear. This stimulation can provide relief from a variety of conditions, both mental and physical.',
            ),
            array(
                'name_cn' => '拔罐',
                'name_en' => 'Chinese Hot Pack',
                'desc_cn' => '拔罐疗法是一种替代医学形式，其历史可追溯到古埃及、中国和中东文化。此疗法是基于对“气”或生命能量的理解。其主要的目的是促进愈合，缓解疼痛并改善关节活动范围与肌肉的柔韧性。',
                'desc_en' => 'The Chinese Herbal hot pack or also known as herbal pillow, is a special type of treatment in Thomson TCM. The hot-pack is formulated with various types of premium quality herbs, forming a prescription that has a special effect for those having muscle strains or aches, pelvic inflammatory disease (PID), as well as menstrual cramps.',
            ),
            array(
                'name_cn' => '刮痧',
                'name_en' => 'Gua-Sha',
                'desc_cn' => '刮痧疗程包括使用光滑圆润的工具来按摩你的身体。其主要目的是释放毒素、改善血液循环、缓解疼痛及促进愈合。刮痧疗法一般被认为对急性和慢性健康问题都有益处，也可用于预防保健。',
                'desc_en' => 'Gua Sha is a popular Chinese healing technique that has been used for centuries to promote wellness and treat various conditions.',
            ),
            array(
                'name_cn' => '过敏症专家',
                'name_en' => 'Allergists',
                'desc_cn' => '他们治疗免疫系统疾病，如哮喘、湿疹、食物过敏、昆虫叮咬过敏和一些自身免疫性疾病。',
                'desc_en' => 'They treat immune system disorders such as asthma, eczema, food allergies, insect sting allergies, and some autoimmune diseases.',
            ),
            array(
                'name_cn' => '心脏病',
                'name_en' => 'Cardiologists',
                'desc_cn' => '专家他们是心脏和血管方面的专家。您可能会因为心力衰竭、心脏病发作、高血压或心律不齐而看到它们。',
                'desc_en' => 'They’re experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat.',
            ),
            array(
                'name_cn' => '皮肤科医生',
                'name_en' => 'Dermatologists',
                'desc_cn' => '您的皮肤、头发、指甲有问题吗？您有痣、疤痕、痤疮或皮肤过敏吗？皮肤科医生可以提供帮助。',
                'desc_en' => 'Have problems with your skin, hair, nails? Do you have moles, scars, acne, or skin allergies? Dermatologists can help.',
            ),
            array(
                'name_cn' => '泌尿科医师',
                'name_en' => 'Urologists',
                'desc_cn' => '这些外科医生负责治疗男性和女性的泌尿道问题，例如膀胱漏水。他们还治疗男性不育症并进行前列腺检查。',
                'desc_en' => 'These are surgeons who care for men and women for problems in the urinary tract, like a leaky bladder. They also treat male infertility and do prostate exams.',
            ),
            array(
                'name_cn' => '普通外科医生',
                'name_en' => 'General Surgeons',
                'desc_cn' => '这些医生可以对您身体的所有部位进行手术。他们可以切除肿瘤、阑尾或胆囊并修复疝气。许多外科医生都有子专科，例如癌症、手部或血管外科。',
                'desc_en' => 'These doctors can operate on all parts of your body. They can take out tumors, appendices, or gallbladders and repair hernias. Many surgeons have subspecialties, like cancer, hand, or vascular surgery.',
            ),
            array(
                'name_cn' => '运动医学专家',
                'name_en' => 'Sports Medicine Specialists',
                'desc_cn' => '这些医生诊断、治疗和预防与运动和锻炼相关的伤害。',
                'desc_en' => 'These doctors diagnose, treat, and prevent injuries related to sports and exercise.',
            ),
            array(
                'name_cn' => '睡眠医学专家',
                'name_en' => 'Sleep Medicine Specialists',
                'desc_cn' => '他们发现并治疗导致睡眠不佳的原因。他们可能有睡眠实验室或给您带回家的测试来绘制您的睡眠-觉醒模式。',
                'desc_en' => 'They find and treat causes behind your poor sleep. They may have sleep labs or give you take-home tests to chart your sleep-wake patterns.',
            ),
            array(
                'name_cn' => '风湿病学家',
                'name_en' => 'Rheumatologists',
                'desc_cn' => '他们专攻关节炎和其他关节、肌肉、骨骼和肌腱疾病。您可能会因为骨质疏松症（骨骼脆弱）、背痛、痛风、运动或反复受伤引起的肌腱炎以及纤维肌痛而看到它们。',
                'desc_en' => 'They specialize in arthritis and other diseases in your joints, muscles, bones, and tendons. You might see them for your osteoporosis (weak bones), back pain, gout, tendinitis from sports or repetitive injuries, and fibromyalgia.',
            ),
            array(
                'name_cn' => '放射科医生',
                'name_en' => 'Radiologists',
                'desc_cn' => '他们使用 X 光、超声波和其他成像测试来诊断疾病。他们还可以专注于放射肿瘤学，以治疗癌症等疾病。',
                'desc_en' => 'They use X-rays, ultrasound, and other imaging tests to diagnose diseases. They can also specialize in radiation oncology to treat conditions like cancer.',
            ),
            array(
                'name_cn' => '肺科医生',
                'name_en' => 'Pulmonologists',
                'desc_cn' => '您会看到这些专科医生治疗肺癌、肺炎、哮喘、肺气肿和呼吸问题引起的睡眠困难等问题。',
                'desc_en' => 'You would see these specialists for problems like lung cancer, pneumonia, asthma, emphysema, and trouble sleeping caused by breathing issues.',
            ),
            array(
                'name_cn' => '精神科',
                'name_en' => 'Psychiatrists',
                'desc_cn' => '医生 这些医生与患有精神、情感或成瘾性疾病的人一起工作。他们可以诊断和治疗抑郁症、精神分裂症、药物滥用、焦虑症以及性和性别认同问题。一些精神科医生专注于儿童、青少年或老年人。',
                'desc_en' => 'These doctors work with people with mental, emotional, or addictive disorders. They can diagnose and treat depression, schizophrenia, substance abuse, anxiety disorders, and sexual and gender identity issues. Some psychiatrists focus on children, adolescents, or the elderly.',
            ),
            array(
                'name_cn' => '预防医学专家',
                'name_en' => 'Preventive Medicine Specialists',
                'desc_cn' => '他们专注于让您保持健康。他们可能在公共卫生部门或医院工作。有些专注于治疗成瘾者、因接触药物、化学品和毒药而患病的人，以及其他领域。',
                'desc_en' => 'They focus on keeping you well. They may work in public health or at hospitals. Some focus on treating people with addictions, illnesses from exposure to drugs, chemicals, and poisons, and other areas.',
            ),
            array(
                'name_cn' => '足病医生',
                'name_en' => 'Podiatrists',
                'desc_cn' => '他们关心您脚踝和足部的问题。这可能包括事故或运动造成的伤害，或糖尿病等持续健康状况造成的伤害。一些足病医生在足部的其他亚专科方面接受过高级培训。',
                'desc_en' => 'They care for problems in your ankles and feet. That can include injuries from accidents or sports or from ongoing health conditions like diabetes. Some podiatrists have advanced training in other subspecialties of the foot.',
            ),
            array(
                'name_cn' => '整形外科医生',
                'name_en' => 'Plastic Surgeons',
                'desc_cn' => '您可以称他们为整容外科医生。它们重建或修复您的皮肤、面部、手部、乳房或身体。这可能发生在受伤或疾病之后或出于美容原因。',
                'desc_en' => 'You might call them cosmetic surgeons. They rebuild or repair your skin, face, hands, breasts, or body. That can happen after an injury or disease or for cosmetic reasons.',
            ),
            array(
                'name_cn' => '物理医生',
                'name_en' => 'Physiatrists',
                'desc_cn' => '这些物理医学和康复方面的专家治疗颈部或背部疼痛、运动或脊髓损伤以及其他由事故或疾病引起的残疾。',
                'desc_en' => 'These specialists in physical medicine and rehabilitation treat neck or back pain and sports or spinal cord injuries as well as other disabilities caused by accidents or diseases.',
            ),
            array(
                'name_cn' => '儿科医生',
                'name_en' => 'Pediatricians',
                'desc_cn' => '他们照顾从出生到成年的儿童。一些儿科医生专门研究青春期前和青少年、虐待儿童或儿童发育问题。',
                'desc_en' => 'They care for children from birth to young adulthood. Some pediatricians specialize in pre-teens and teens, child abuse, or children\'s developmental issues.',
            ),
            array(
                'name_cn' => '病理学家',
                'name_en' => 'Pathologists',
                'desc_cn' => '这些实验室医生通过在显微镜下检查身体组织和体液来确定疾病的原因。',
                'desc_en' => 'These lab doctors identify the causes of diseases by examining body tissues and fluids under microscopes.',
            ),
            array(
                'name_cn' => '耳鼻喉科医生',
                'name_en' => 'Otolaryngologists',
                'desc_cn' => '他们治疗耳、鼻、喉、鼻窦、头、颈和呼吸系统的疾病。他们还可以对您的头部和颈部进行重建和整形手术。',
                'desc_en' => 'They treat diseases in the ears, nose, throat, sinuses, head, neck, and respiratory system. They also can do reconstructive and plastic surgery on your head and neck.',
            ),
            array(
                'name_cn' => '整骨',
                'name_en' => 'Osteopaths',
                'desc_cn' => '医生 整骨医生 (DO) 与 MD 一样，都是获得完全许可的医生。他们的训练强调“全身”方法。整骨医师使用最新的医疗技术，但也利用人体自然的自愈能力。',
                'desc_en' => 'Doctors of osteopathic medicine (DO) are fully licensed medical doctors just like MDs. Their training stresses a “whole body” approach. Osteopaths use the latest medical technology but also the body’s natural ability to heal itself.',
            ),
            array(
                'name_cn' => '眼科医生',
                'desc_cn' => '你称他们为眼科医生。他们可以配眼镜或隐形眼镜并诊断和治疗青光眼等疾病。与验光师不同，他们是医生，可以治疗各种眼部疾病，也可以对眼睛进行手术。',
                'name_en' => 'Ophthalmologists',
                'desc_en' => 'You call them eye doctors. They can prescribe glasses or contact lenses and diagnose and treat diseases like glaucoma. Unlike optometrists, they’re medical doctors who can treat every kind of eye condition as well as operate on the eyes.',
            ),
            array(
                'name_cn' => '肿瘤学家',
                'desc_cn' => '这些内科医生是癌症专家。他们进行化学疗法治疗，并经常与放射肿瘤学家和外科医生合作来照顾癌症患者。',
                'name_en' => 'Oncologists',
                'desc_en' => 'These internists are cancer specialists. They do chemotherapy treatments and often work with radiation oncologists and surgeons to care for someone with cancer.',
            ),
            array(
                'name_cn' => '产科医生和妇科医生',
                'name_en' => 'Obstetricians and Gynecologists',
                'desc_cn' => '通常被称为 OB/GYN，这些医生专注于妇女的健康，包括怀孕和分娩。他们进行子宫颈抹片检查、盆腔检查和妊娠检查。妇产科医师在这两个领域都接受过培训。但他们中的一些人可能专注于女性的生殖健康（妇科医生），而其他人则专门照顾孕妇（产科医生）。',
                'desc_en' => 'Often called OB/GYNs, these doctors focus on women\'s health, including pregnancy and childbirth. They do Pap smears, pelvic exams, and pregnancy checkups. OB/GYNs are trained in both areas. But some of them may focus on women\'s reproductive health (gynecologists), and others specialize in caring for pregnant women (obstetricians).',
            ),
            array(
                'name_cn' => '神经科医生',
                'name_en' => 'Neurologists',
                'desc_cn' => '这些是神经系统专家，包括大脑、脊髓和神经。他们治疗中风、脑和脊柱肿瘤、癫痫、帕金森病和阿尔茨海默病。',
                'desc_en' => 'These are specialists in the nervous system, which includes the brain, spinal cord, and nerves. They treat strokes, brain and spinal tumors, epilepsy, Parkinson\'s disease, and Alzheimer\'s disease.',
            ),
            array(
                'name_cn' => '肾病学家',
                'name_en' => 'Nephrologists',
                'desc_cn' => '他们治疗肾脏疾病以及高血压以及与肾脏疾病相关的体液和矿物质失衡。',
                'desc_en' => 'They treat kidney diseases as well as high blood pressure and fluid and mineral imbalances linked to kidney disease.',
            ),
            array(
                'name_cn' => '医学遗传学家',
                'name_en' => 'Medical Geneticists',
                'desc_cn' => '他们诊断和治疗从父母传给孩子的遗传性疾病。这些医生也可能提供遗传咨询和筛查测试。',
                'desc_en' => 'They diagnose and treat hereditary disorders passed down from parents to children. These doctors may also offer genetic counseling and screening tests.',
            ),
            array(
                'name_cn' => '内科医生',
                'name_en' => 'Internists',
                'desc_cn' => '这些初级保健医生治疗常见疾病和复杂疾病，通常只治疗成人。如果出现任何情况，您可能会先去看他们或您的家庭医生。内科医生通常接受过许多亚专业的高级培训，例如心脏病、癌症或青少年或睡眠医学。通过额外的培训（称为研究金），内科医生可以专注于心脏病学、胃肠病学、内分泌学、肾脏病学、肺病学和其他医学子专业。',
                'desc_en' => 'These primary-care doctors treat both common and complex illnesses, usually only in adults. You’ll likely visit them or your family doctor first for any condition. Internists often have advanced training in a host of subspecialties, like heart disease, cancer, or adolescent or sleep medicine. With additional training (called a fellowship), internists can specialize in cardiology, gastroenterology, endocrinology, nephrology, pulmonology, and other medical sub-specialties.',
            ),
            array(
                'name_cn' => '传染病专家',
                'name_en' => 'Infectious Disease Specialists',
                'desc_cn' => '他们诊断和治疗您身体任何部位的感染，例如发烧、莱姆病、肺炎、肺结核以及HIV 和 AIDS。其中一些专攻预防医学或旅行医学。',
                'desc_en' => 'They diagnose and treat infections in any part of your body, like fevers, Lyme disease, pneumonia, tuberculosis, and HIV and AIDS. Some of them specialize in preventive medicine or travel medicine.',
            ),
            array(
                'name_cn' => '临终关怀和姑息治疗专家',
                'name_en' => 'Hospice and Palliative Medicine Specialists',
                'desc_cn' => '他们与濒临死亡的人一起工作。他们是疼痛管理方面的专家。他们与其他医生团队合作，以保持您的生活质量。',
                'desc_en' => 'They work with people who are nearing death. They’re experts in pain management. They work with a team of other doctors to keep up your quality of life.',
            ),
            array(
                'name_cn' => '血液学家这些是血液、脾脏和淋巴腺',
                'name_en' => 'Hematologists',
                'desc_cn' => '疾病方面的专家，如镰状细胞病、贫血、血友病和白血病。',
                'desc_en' => 'These are specialists in diseases of the blood, spleen, and lymph glands, like sickle cell disease, anemia, hemophilia, and leukemia.',
            ),
            array(
                'name_cn' => '老年医学专家',
                'name_en' => 'Geriatric Medicine Specialists',
                'desc_cn' => '这些医生照顾老年人。他们可以在家中、医生办公室、疗养院、辅助生活中心和医院为人们提供治疗。',
                'desc_en' => 'These doctors care for the elderly. They can treat people in their homes, doctors\' offices, nursing homes, assisted-living centers, and hospitals.',
            ),
            array(
                'name_cn' => '胃肠病学家',
                'name_en' => 'Gastroenterologists',
                'desc_cn' => '他们是消化器官方面的专家，包括胃、肠、胰腺、肝脏和胆囊。您可能会因为腹痛、溃疡、腹泻、黄疸或消化器官癌症而看到它们。他们还进行结肠镜检查和其他结肠癌检查。',
                'desc_en' => 'They’re specialists in digestive organs, including the stomach, bowels, pancreas, liver, and gallbladder. You might see them for abdominal pain, ulcers, diarrhea, jaundice, or cancers in your digestive organs. They also do a colonoscopy and other tests for colon cancer.',
            ),
            array(
                'name_cn' => '家庭医生',
                'name_en' => 'Family Physicians',
                'desc_cn' => '他们照顾整个家庭，包括儿童、成人和老人。他们进行例行检查和筛查测试，为您提供流感和免疫接种，并管理糖尿病和其他持续的医疗状况。',
                'desc_en' => 'They care for the whole family, including children, adults, and the elderly. They do routine checkups and screening tests, give you flu and immunization shots, and manage diabetes and other ongoing medical conditions.',
            ),
            array(
                'name_cn' => '急诊医学专家',
                'name_en' => 'Emergency Medicine Specialists',
                'desc_cn' => '这些医生通常在急诊室为病人和受伤的人做出生死攸关的决定。他们的工作是拯救生命，避免或降低残疾的机会。',
                'desc_en' => 'These doctors make life-or-death decisions for sick and injured people, usually in an emergency room. Their job is to save lives and to avoid or lower the chances of disability.',
            ),
            array(
                'name_cn' => '内分泌学家',
                'name_en' => 'Endocrinologists',
                'desc_cn' => '这些是激素和新陈代谢方面的专家。他们可以治疗糖尿病、甲状腺问题、不孕症以及钙和骨骼疾病等疾病。',
                'desc_en' => 'These are experts on hormones and metabolism. They can treat conditions like diabetes, thyroid problems, infertility, and calcium and bone disorders.',
            ),
            array(
                'name_cn' => '重症监护医学专家',
                'name_en' => 'Critical Care Medicine Specialists',
                'desc_cn' => '他们照顾重病或重伤的人，通常是医院重症监护病房的负责人。如果您的心脏或其他器官出现故障，或者您遇到了事故，您可能会看到它们。',
                'desc_en' => 'They care for people who are critically ill or injured, often heading intensive care units in hospitals. You might see them if your heart or other organs are failing or if you’ve been in an accident. ',
            ),
            array(
                'name_cn' => '结肠和直肠外科医生',
                'name_en' => 'Colon and Rectal Surgeons',
                'desc_cn' => '如果您的小肠、结肠和底部有问题，您会去看这些医生。它们可以治疗结肠癌、痔疮和炎症性肠病。 ',
                'desc_en' => 'You would see these doctors for problems with your small intestine, colon, and bottom. They can treat colon cancer, hemorrhoids, and inflammatory bowel disease. ',
            ),
            array(
                'name_cn' => '麻醉师',
                'name_en' => 'Anesthesiologists',
                'desc_cn' => '这些医生会给你药物来麻痹你的疼痛，或者在手术、分娩或其他程序中让你处于低位。他们会在您处于麻醉状态时监测您的生命体征。',
                'desc_en' => 'These doctors give you drugs to numb your pain or to put you under during surgery, childbirth, or other procedures. They monitor your vital signs while you’re under anesthesia.',
            ),
        );
    }
}
