# php word segmentation for laravel
php segment analysis

# 使用方式

$pa = PhpAnalysis::SetSource('浙江省杭州市余杭区');

$pa->resultType = 1;

$pa->differMax  = true;

$pa->StartAnalysis();

dump($pa->GetFinallyKeywords());
