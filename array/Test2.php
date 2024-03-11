<?php
$params = [
    'type'              => 4,
    'page_size'         => 100,
    'page_num'          => 1,
    'version'           => 'v1.0.0',
    'userid'            => 456 ?? '',
    'xesid'             => '',
    'ua'                => '',
    'exp_tag'           => '',
    'devid'             => '',
    'client_identifier' => '',
    'extend_info'       => '',
    'province_ids'      => 100,
    'is_full'           => 'asc',
    'promotion_id'      => 222,
    'rule_id'           => 3333,
    'promotion_status'  => 1,
    'center_status'     => [0, 1],
    'aggs_list'         => ["lego_grade_ids ^ 1 ^ 20", "lego_subject_3_ids ^ 1 ^ 20", "lego_course_type_id ^ 1 ^ 20", "lego_term_ids ^ 1 ^ 20", "lego_difficulty_id ^ 1 ^ 20", "lego_version_id ^ 1 ^ 20", "lego_category_map_id ^ 1 ^ 20", "lego_type_2_id ^ 1 ^ 20", "lego_course_date ^ 1 ^ 20", "lego_time_slot ^ 1 ^ 20"],
    'brand'             => 100,
];

//query共用参数
$queryParams = ['req_type2', 'req_type1', 'creator_size', 'creator_num', 'type', 'page_num', 'page_size', 'version', 'userid', 'xesid', 'ua', 'exp_tag', 'devid', 'client_identifier', 'extend_info', 'query', 'sort_type', 'version_tag', 'page_grade', 'app_version', 'rate', 'group_list'];
//筛选列表参数
$chooseListParams = ['lego_course_type_id', 'lego_category_map_id', 'create_time_stamp', 'province_ids', 'lego_teach_content', 'lego_grade_ids', 'lego_subject_3_ids', 'lego_difficulty_id', 'lego_version_id', 'lego_term_ids', 'lego_course_date', 'lego_time_slot', 'lego_type_2_id', 'lego_subject_2_ids', 'lego_learning_stage', 'lego_learning_stage_suffix', 'teacher_ids', 'top_teacher_id', 'promotion_id', 'rule_id', 'is_full', 'lego_label_id', 'category', 'device_id', 'teacher_id', 'teacher_type', 'center_status', 'id', 'cross_fields', 'lego_textbook_id', 'date_phase', 'time_phase', 'teacher_ids_str', 'outline_ids_str', 'school_schedule', 'time_week', 'time_slot', 'type_1_id', 'is_recommend', 'public_status', 'course_status', 'type_2_id', 'brand', 'promotion_status'];
//排序列表参数
$sortListParams = ['min_start_time', 'is_full'];
//属性筛选条件列表参数
$aggsListParams = ['lego_difficulty_id', 'lego_term_ids', 'lego_course_date', 'lego_time_slot', 'lego_type_2_id', 'lego_label_id', 'lego_subject_2_ids', 'lego_learning_stage', 'lego_learning_stage_suffix'];

$queryListParams = compact('chooseListParams', 'sortListParams', 'aggsListParams', 'queryParams');
//参数默认值
$defaultParams = [
    'type' => 1,
];
//搜索不需要参数
$searchNoNeedParams = ['type', 'exp_tag', 'version'];
//过滤不需要的参数
$listParams = array_intersect_key($params, array_flip(array_merge($chooseListParams, $sortListParams, $aggsListParams, $queryParams)));
$listParams = array_reduce(array_keys($listParams), function ($r, $key) use ($params, $defaultParams, $queryListParams) {
    if (in_array($key, array_values($queryListParams['chooseListParams'])) && !empty($params[$key])) {
        $r['chooseList'][][$key] = ($key == 'is_full') ? [0, 1] : ($params[$key] ?? ($defaultParams[$key] ?? ''));
    }

    if (!empty($params[$key]) && in_array($key, array_values($queryListParams['aggsListParams']))) {
        $siftCount       = 20;
        $r['aggsList'][] = "$key ^ 1 ^{$siftCount}";
    }
    if (in_array($key, array_values($queryListParams['queryParams'])) && !empty($params[$key])) {
        $r['query'][$key] = $params[$key] ?? ($defaultParams[$key] ?? '');
    }
    return $r;
}, []);
extract($listParams);

$query += [
    'choose_list' => $chooseList ?? '',
    'aggs_list'   => $aggsList ?? '',
];

if (isset($params['aggs_list'])) {
    $query['aggs_list'] = $params['aggs_list'];
}
$res = ['params' => json_encode(['query' => $query])];

var_dump($res);