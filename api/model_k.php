<?php
$au_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"aub_id"=>4,
"row_id"=>5,
"t"=>6,
"k"=>7,
"v"=>8,
NULL);

$addr_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"addr"=>4,
"type"=>5,
"auth_id"=>6,
"contact_id"=>7,
"contact_fullname"=>8,
NULL);

$otp_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"otp"=>4,
"expiry"=>5,
"action"=>6,
"addr_id"=>7,
"addr_addr"=>8,
"addr_type"=>9,
"auth_id"=>10,
"contact_id"=>11,
"contact_fullname"=>12,
NULL);

$auth_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"usn"=>5,
"role"=>6,
"exten"=>7,
"agentno"=>8,
"chatid"=>9,
"mac"=>10,
"contact_id"=>11,
"contact_fullname"=>12,
"contact_fname"=>13,
"contact_lname"=>14,
"contact_phone"=>15,
"contact_email"=>16,
"contact_location"=>17,
"last_break"=>18,
"last_break_ts"=>19,
"available"=>20,
NULL);

$users_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"usn"=>5,
"role"=>6,
"exten"=>7,
"agentno"=>8,
"chatid"=>9,
"mac"=>10,
"contact_id"=>11,
"contact_fullname"=>12,
"contact_fname"=>13,
"contact_lname"=>14,
"contact_phone"=>15,
"contact_email"=>16,
"contact_location"=>17,
"last_break"=>18,
"last_break_ts"=>19,
"available"=>20,
NULL);

$contacts_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"fullname"=>5,
"fname"=>6,
"lname"=>7,
"phone"=>8,
"email"=>9,
"phone2"=>10,
"dob"=>11,
"age"=>12,
"age_group_id"=>13,
"age_group"=>14,
"sex_id"=>15,
"sex"=>16,
"national_id_type_id"=>17,
"national_id_type"=>18,
"national_id"=>19,
"address"=>20,
"residence"=>21,
"location_id"=>22,
"location"=>23,
"nationality_id"=>24,
"nationality"=>25,
"tribe_id"=>26,
"tribe"=>27,
"lang_id"=>28,
"lang"=>29,
"landmark"=>30,
"location_0"=>31,
"location_1"=>32,
"location_2"=>33,
"location_3"=>34,
"location_4"=>35,
"location_5"=>36,
"location_6"=>37,
"reporter_count"=>38,
"perp_count"=>39,
"client_count"=>40,
NULL);

$profile_k = $contacts_k;

$campaigns_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"name"=>5,
"callerid"=>6,
"campaign"=>7,
"voiceprompt_id"=>8,
"voiceprompt_name"=>9,
"voiceprompt_type"=>10,
"category_id"=>11,
"category_name"=>12,
"category_fullname"=>13,
"member_count"=>14,
"members"=>15,
"agent_ring_strategy"=>16,
"agent_ring_timeout"=>17,
"agent_wrapup"=>18,
"wait_sla_target"=>19,
"hold_sla_target"=>20,
"queue_timeout"=>21,
"moh_ids"=>22,
"moh_names"=>23,
"moh_duration"=>24,
"exit_id"=>25,
"exit_name"=>26,
"exit_type"=>27,
"ring_timeout"=>28,
"reattempts"=>29,
"reattempt_interval"=>30,
"lead_count"=>31,
"answered"=>32,
"resched"=>33,
"unreachable"=>34,
"progress"=>35,
"avg_talk"=>36,
"avg_hold"=>37,
"max_talk"=>38,
"max_hold"=>39,
"not_dialed"=>40,
"ans_count"=>41,
"ab_count"=>42,
"ivr_count"=>43,
"sla_wait"=>44,
"ans_avg_talk_time"=>45,
"hold_avg"=>46,
"occupied"=>47,
"occupancy"=>48,
"available"=>49,
"availability"=>50,
"agents_online"=>51,
NULL);

$inbound_k = $campaigns_k;

$outbound_k = $campaigns_k;

$workinghours_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"daterange"=>5,
"dayofweek"=>6,
"start_ts"=>7,
"end_ts"=>8,
"dt0"=>9,
"dt1"=>10,
"sun"=>11,
"mon"=>12,
"tue"=>13,
"wed"=>14,
"thu"=>15,
"fri"=>16,
"sat"=>17,
"source"=>18,
"priority"=>19,
"campaign_id"=>20,
"campaign_campaign"=>21,
"campaign_iid"=>22,
"voiceprompt_id"=>23,
"voiceprompt_name"=>24,
"voiceprompt_type"=>25,
NULL);

$ooohours_k = $workinghours_k;

$shifts_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"daterange"=>5,
"dayofweek"=>6,
"start_ts"=>7,
"end_ts"=>8,
"dt0"=>9,
"dt1"=>10,
"sun"=>11,
"mon"=>12,
"tue"=>13,
"wed"=>14,
"thu"=>15,
"fri"=>16,
"sat"=>17,
"user_id"=>18,
"user_usn"=>19,
"user_role"=>20,
"user_exten"=>21,
"contact_id"=>22,
"contact_fullname"=>23,
"contact_fname"=>24,
"contact_lname"=>25,
"contact_phone"=>26,
"contact_email"=>27,
NULL);

$members_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"user_id"=>5,
"user_usn"=>6,
"user_role"=>7,
"user_exten"=>8,
"contact_id"=>9,
"contact_fullname"=>10,
"contact_fname"=>11,
"contact_lname"=>12,
"contact_phone"=>13,
"contact_email"=>14,
"campaign_id"=>15,
NULL);

$voicemaps_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"session_id"=>5,
"session_ip"=>6,
"k"=>7,
"dst_id"=>8,
"dst_name"=>9,
"dst_type"=>10,
"voiceprompt_id"=>11,
"voiceprompt_name"=>12,
"voiceprompt_type"=>13,
NULL);

$voiceumaps_k = $voicemaps_k;

$voiceprompts_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"session_id"=>5,
"session_ip"=>6,
"name"=>7,
"type"=>8,
"voicefile_ids"=>9,
"voicefile_names"=>10,
"voicefile_duration"=>11,
"voicefile_concat"=>12,
"exten"=>13,
"dtmfmaxlen"=>14,
"recmaxlen"=>15,
"api"=>16,
"lvl"=>17,
NULL);

$dst_k = $voiceprompts_k;

$exit_k = $voiceprompts_k;

$voicefiles_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"session_id"=>5,
"session_ip"=>6,
"file_id"=>7,
"file_name"=>8,
"file_mime"=>9,
"file_size"=>10,
"file_uploadstatus"=>11,
"file_movestatus"=>12,
"file_channels"=>13,
"file_sample_rate"=>14,
"file_duration"=>15,
"pos"=>16,
"source"=>17,
"source_id"=>18,
NULL);

$moh_k = $voicefiles_k;

$attachments_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"file_id"=>5,
"file_name"=>6,
"file_mime"=>7,
"file_size"=>8,
"file_uploadstatus"=>9,
"file_movestatus"=>10,
"pos"=>11,
"case_id"=>12,
"is_delete"=>13,
NULL);

$files_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"session_id"=>5,
"session_ip"=>6,
"name"=>7,
"mime"=>8,
"size"=>9,
"uploadstatus"=>10,
"movestatus"=>11,
"channels"=>12,
"sample_rate"=>13,
"duration"=>14,
"batch_id"=>15,
NULL);

$vfiles_k = $files_k;

$csv_k = $files_k;

$categories_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"session_id"=>5,
"session_ip"=>6,
"name"=>7,
"fullname"=>8,
"fullname_id"=>9,
"category_id"=>10,
"category_name"=>11,
"category_fullname"=>12,
"category_fullname_id"=>13,
"category_level"=>14,
"category_category_id"=>15,
"category_root_id"=>16,
"category_root_name"=>17,
"level"=>18,
"root_id"=>19,
"root_name"=>20,
NULL);

$subcategories_k = $categories_k;

$age_groups_k = $categories_k;

$tasks_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"task"=>5,
"activity_count"=>6,
"activity_ids"=>7,
"activity_last_id"=>8,
"activity_on"=>9,
"activity_by"=>10,
"activity_by_id"=>11,
"activity_by_role"=>12,
NULL);

$activities_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"activity"=>5,
"activity_ts"=>6,
"activity_duration"=>7,
"is_read"=>8,
"src"=>9,
"src_uid"=>10,
"src_ts"=>11,
"src_address"=>12,
"src_usr"=>13,
"src_vector"=>14,
"src_status"=>15,
"disposition_id"=>16,
"disposition"=>17,
"last_disposition_id"=>18,
"yr"=>19,
"mn"=>20,
"wk"=>21,
"dt"=>22,
"hr"=>23,
"h"=>24,
NULL);

$actions_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"activity"=>5,
"activity_ts"=>6,
"activity_duration"=>7,
"is_read"=>8,
"src"=>9,
"src_uid"=>10,
"src_ts"=>11,
"src_address"=>12,
"src_usr"=>13,
"src_vector"=>14,
"src_status"=>15,
"disposition_id"=>16,
"disposition"=>17,
"action"=>18,
NULL);

$qas_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"chan_uniqueid"=>5,
"chan_chan_ts"=>6,
"chan_vector"=>7,
"chan_phone"=>8,
"chan_usr"=>9,
"chan_wait_time"=>10,
"chan_talk_time"=>11,
"chan_hold_time"=>12,
"chan_hangup_reason"=>13,
"chan_hangup_status"=>14,
"chan_user_id"=>15,
"chan_user_name"=>16,
"chan_user_role"=>17,
"opening_phrase"=>18,
"non_interrupting"=>19,
"empathy"=>20,
"paraphrasing"=>21,
"courteous"=>22,
"nonhesitant"=>23,
"extra_mile_willingness"=>24,
"confirms_client_satisfaction"=>25,
"follows_up_on_case_updates"=>26,
"accuracy"=>27,
"grammar"=>28,
"consults"=>29,
"procedure_adherance"=>30,
"educative"=>31,
"notifies_hold"=>32,
"updates_hold"=>33,
"call_closing_coutesy"=>34,
"opening_phrase_comments"=>35,
"listening_comments"=>36,
"pro_active_comments"=>37,
"resolution_comments"=>38,
"hold_comments"=>39,
"call_closing_comments"=>40,
"feedback"=>41,
"greeting_score"=>42,
"listening_score"=>43,
"proactive_score"=>44,
"resolution_score"=>45,
"holding_score"=>46,
"closing_score"=>47,
"total_score"=>48,
"greeting_score_p"=>49,
"listening_score_p"=>50,
"proactive_score_p"=>51,
"resolution_score_p"=>52,
"holding_score_p"=>53,
"closing_score_p"=>54,
"total_score_p"=>55,
"yr"=>56,
"mn"=>57,
"wk"=>58,
"dt"=>59,
"hr"=>60,
"h"=>61,
NULL);

$calls_k=array("uniqueid"=>0,
"chan_ts"=>1,
"context"=>2,
"context_masq"=>3,
"trunk"=>4,
"phone"=>5,
"usr"=>6,
"ring_time"=>7,
"wait_time"=>8,
"queue_time"=>9,
"wait_time_tot"=>10,
"talk_time"=>11,
"hangup_reason"=>12,
"hangup_status"=>13,
"sla_wait_target"=>14,
"sla_wait"=>15,
"sla_hold"=>16,
"hr"=>17,
"dt"=>18,
"wk"=>19,
"mn"=>20,
"yr"=>21,
"vector"=>22,
"chan_status_masq"=>23,
"exten"=>24,
"branch"=>25,
"category"=>26,
"uid2"=>27,
"hold_time"=>28,
"hour"=>29,
"cid_name"=>30,
"user_id"=>31,
"user_name"=>32,
"qa_done"=>33,
"fca_dt"=>34,
NULL);

$locals_k = $calls_k;

$chanss_k=array("uniqueid"=>0,
"chan_ts"=>1,
"usr"=>2,
"state_hangup"=>3,
"last_call"=>4,
"occupied"=>5,
"occupancy"=>6,
"available"=>7,
"availability"=>8,
"yr"=>9,
"mn"=>10,
"wk"=>11,
"dt"=>12,
"hr"=>13,
"hour"=>14,
NULL);

$reporters_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"contact_id"=>5,
"contact_fullname"=>6,
"contact_fname"=>7,
"contact_lname"=>8,
"contact_phone"=>9,
"contact_email"=>10,
"contact_phone2"=>11,
"contact_dob"=>12,
"contact_age"=>13,
"contact_age_group_id"=>14,
"contact_age_group"=>15,
"contact_sex_id"=>16,
"contact_sex"=>17,
"contact_national_id_type_id"=>18,
"contact_national_id_type"=>19,
"contact_national_id"=>20,
"contact_address"=>21,
"contact_residence"=>22,
"contact_nationality_id"=>23,
"contact_nationality"=>24,
"contact_tribe_id"=>25,
"contact_tribe"=>26,
"contact_lang_id"=>27,
"contact_lang"=>28,
"contact_location_id"=>29,
"contact_location"=>30,
"contact_landmark"=>31,
"contact_location_0"=>32,
"contact_location_1"=>33,
"contact_location_2"=>34,
"contact_location_3"=>35,
"contact_location_4"=>36,
"contact_location_5"=>37,
"contact_location_6"=>38,
"src"=>39,
"src_uid"=>40,
"src_address"=>41,
"src_vector"=>42,
NULL);

$clients_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"contact_id"=>5,
"contact_fullname"=>6,
"contact_fname"=>7,
"contact_lname"=>8,
"contact_phone"=>9,
"contact_email"=>10,
"contact_phone2"=>11,
"contact_dob"=>12,
"contact_age"=>13,
"contact_age_group_id"=>14,
"contact_age_group"=>15,
"contact_sex_id"=>16,
"contact_sex"=>17,
"contact_national_id_type_id"=>18,
"contact_national_id_type"=>19,
"contact_national_id"=>20,
"contact_address"=>21,
"contact_residence"=>22,
"contact_nationality_id"=>23,
"contact_nationality"=>24,
"contact_tribe_id"=>25,
"contact_tribe"=>26,
"contact_lang_id"=>27,
"contact_lang"=>28,
"contact_location_id"=>29,
"contact_location"=>30,
"contact_landmark"=>31,
"contact_location_0"=>32,
"contact_location_1"=>33,
"contact_location_2"=>34,
"contact_location_3"=>35,
"contact_location_4"=>36,
"contact_location_5"=>37,
"contact_location_6"=>38,
"task_id"=>39,
"case_id"=>40,
"category_id"=>41,
"category"=>42,
"gbv_related"=>43,
"relationship_id"=>44,
"relationship"=>45,
"relationship_comment"=>46,
"is_disabled"=>47,
"disability_id"=>48,
"disability"=>49,
"health_id"=>50,
"health"=>51,
"hiv_id"=>52,
"hiv"=>53,
"special_services"=>54,
"in_school"=>55,
"school_type_id"=>56,
"school_type"=>57,
"school_level_id"=>58,
"school_level"=>59,
"school_attendance"=>60,
"school_name"=>61,
"school_address"=>62,
"not_in_school_reason"=>63,
"is_married"=>64,
"marital_id"=>65,
"marital"=>66,
"spouse_profession_id"=>67,
"spouse_profession"=>68,
"spouse_fullname"=>69,
"is_guardian_known"=>70,
"guardian_marital_id"=>71,
"guardian_marital"=>72,
"guardian_fullname"=>73,
"guardian_national_id"=>74,
"household_id"=>75,
"household"=>76,
"household_adults"=>77,
"household_head_occupation_id"=>78,
"household_head_occupation"=>79,
"src_uid"=>80,
"is_disabled_refered"=>81,
"is_disabled_referals"=>82,
"not_in_school_id"=>83,
"not_in_school"=>84,
"is_delete"=>85,
"is_reporter"=>86,
NULL);

$perpetrators_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"contact_id"=>5,
"contact_fullname"=>6,
"contact_fname"=>7,
"contact_lname"=>8,
"contact_phone"=>9,
"contact_email"=>10,
"contact_phone2"=>11,
"contact_dob"=>12,
"contact_age"=>13,
"contact_age_group_id"=>14,
"contact_age_group"=>15,
"contact_sex_id"=>16,
"contact_sex"=>17,
"contact_national_id_type_id"=>18,
"contact_national_id_type"=>19,
"contact_national_id"=>20,
"contact_address"=>21,
"contact_residence"=>22,
"contact_nationality_id"=>23,
"contact_nationality"=>24,
"contact_tribe_id"=>25,
"contact_tribe"=>26,
"contact_lang_id"=>27,
"contact_lang"=>28,
"contact_location_id"=>29,
"contact_location"=>30,
"contact_landmark"=>31,
"contact_location_0"=>32,
"contact_location_1"=>33,
"contact_location_2"=>34,
"contact_location_3"=>35,
"contact_location_4"=>36,
"contact_location_5"=>37,
"contact_location_6"=>38,
"task_id"=>39,
"case_id"=>40,
"relationship_id"=>41,
"relationship"=>42,
"shareshome_id"=>43,
"shareshome"=>44,
"marital_id"=>45,
"marital"=>46,
"health_id"=>47,
"health"=>48,
"employment_id"=>49,
"employment"=>50,
"guardian_fullname"=>51,
"notes"=>52,
"src_uid"=>53,
"is_delete"=>54,
NULL);

$cases_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"case_category_id"=>5,
"case_category"=>6,
"case_category_root_id"=>7,
"case_category_fullname_id"=>8,
"gbv_related"=>9,
"cat_0"=>10,
"cat_1"=>11,
"cat_2"=>12,
"cat_3"=>13,
"cat_4"=>14,
"knowabout116_id"=>15,
"knowabout116"=>16,
"justice_id"=>17,
"justice"=>18,
"assessment_id"=>19,
"assessment"=>20,
"escalatedby_id"=>21,
"escalatedto_id"=>22,
"escalatedto"=>23,
"escalatedto_role"=>24,
"assigned_to_id"=>25,
"priority"=>26,
"status"=>27,
"police_ob_no"=>28,
"services"=>29,
"referals"=>30,
"narrative"=>31,
"plan"=>32,
"is_medical_exam_done"=>33,
"is_incidence_reported"=>34,
"is_hiv_tested"=>35,
"is_pep_given"=>36,
"is_art_given"=>37,
"is_ecp_given"=>38,
"is_counselling_given"=>39,
"incidence_when"=>40,
"incidence_location"=>41,
"hiv_test_result"=>42,
"counseling_org"=>43,
"incidence_ref_no"=>44,
"src"=>45,
"src_uid"=>46,
"src_address"=>47,
"src_vector"=>48,
"reporter_id"=>49,
"reporter_contact_id"=>50,
"reporter_fullname"=>51,
"reporter_phone"=>52,
"reporter_email"=>53,
"reporter_phone2"=>54,
"reporter_dob"=>55,
"reporter_age"=>56,
"reporter_age_group"=>57,
"reporter_sex"=>58,
"reporter_national_id"=>59,
"reporter_nationality"=>60,
"reporter_tribe"=>61,
"reporter_lang"=>62,
"reporter_landmark"=>63,
"reporter_location"=>64,
"reporter_location_0"=>65,
"reporter_location_1"=>66,
"reporter_location_2"=>67,
"reporter_location_3"=>68,
"reporter_location_4"=>69,
"reporter_location_5"=>70,
"is_reporter_client"=>71,
"activity_count"=>72,
"activity_ids"=>73,
"activity_last_id"=>74,
"activity_on"=>75,
"activity_by"=>76,
"activity_by_id"=>77,
"activity_by_role"=>78,
"activity_source"=>79,
"activity_src_uid"=>80,
"disposition_id"=>81,
"disposition"=>82,
"final_status"=>83,
"yr"=>84,
"mn"=>85,
"wk"=>86,
"dt"=>87,
"hr"=>88,
"h"=>89,
NULL);

$followups_k = $cases_k;

$case_activities_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"case_id"=>5,
"aub_id"=>6,
"activity"=>7,
"activity_ref"=>8,
"detail"=>9,
"priority"=>10,
"status"=>11,
"escalatedto_id"=>12,
"escalatedto"=>13,
"escalatedto_role"=>14,
"disposition_id"=>15,
"disposition"=>16,
"src"=>17,
"src_uid"=>18,
"src_address"=>19,
"src_vector"=>20,
"reporter_id"=>21,
"reporter_contact_id"=>22,
"reporter_fullname"=>23,
"reporter_phone"=>24,
"reporter_email"=>25,
"reporter_phone2"=>26,
"reporter_dob"=>27,
"reporter_age"=>28,
"reporter_age_group"=>29,
"reporter_sex"=>30,
"reporter_national_id"=>31,
"reporter_nationality"=>32,
"reporter_tribe"=>33,
"reporter_lang"=>34,
"reporter_landmark"=>35,
"reporter_location_0"=>36,
"reporter_location_1"=>37,
"reporter_location_2"=>38,
"reporter_location_3"=>39,
"reporter_location_4"=>40,
"reporter_location_5"=>41,
"change_count"=>42,
"yr"=>43,
"mn"=>44,
"wk"=>45,
"dt"=>46,
"hr"=>47,
"h"=>48,
NULL);

$services_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"case_id"=>5,
"caseupd_id"=>6,
"category_id"=>7,
"category_name"=>8,
"category_fullname"=>9,
NULL);

$referals_k=array("id"=>0,
"created_on"=>1,
"created_by"=>2,
"created_by_id"=>3,
"created_by_role"=>4,
"case_id"=>5,
"caseupd_id"=>6,
"category_id"=>7,
"category_name"=>8,
"category_fullname"=>9,
NULL);

$today_k=array("id"=>0,
"updated_on"=>1,
"_ivr_count"=>2,
"_ivr_avg_time"=>3,
"_ivr_min_time"=>4,
"_ivr_max_time"=>5,
"_ab_count"=>6,
"_ab_avg_queue_time"=>7,
"_ab_min_queue_time"=>8,
"_ab_max_queue_time"=>9,
"_ans_count"=>10,
"_ans_avg_queue_time"=>11,
"_ans_min_queue_time"=>12,
"_ans_max_queue_time"=>13,
"_ans_avg_talk_time"=>14,
"_ans_min_talk_time"=>15,
"_ans_max_talk_time"=>16,
"_sla_wait_target"=>17,
"_sla_hold_target"=>18,
"_sla_wait"=>19,
"_sla_wait_count"=>20,
"_sla_hold"=>21,
"_hold_count"=>22,
"_avg_hold"=>23,
"_hold_min"=>24,
"_hold_max"=>25,
NULL);


?>