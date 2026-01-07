<?php
if ( !defined('K_INSTALLATION_IN_PROGRESS') ) die(); // cannot be loaded directly

/* couch_templates (id, description, title, k_order, custom_params, deleted, , , , , , , , , , , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_TEMPLATES." VALUES ";
$k_stmts[] = $k_stmt_pre."('1', 'index.php', '', '0', '1', NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0');";

/* couch_fields (id, name, k_type, data, validator_msg, custom_toolbar, collapsed, no_xss_check, class, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_FIELDS." VALUES ";
$k_stmts[] = $k_stmt_pre."('4', '1', 'h1-hero-name', 'h1-hero-description', '', 'text', '0', 'text', '0', NULL, '\\r\\n        <h1 class=\\\"hero-title\\\">Speakers</h1>\\r\\n     \\r\\n        <p class=\\\"hero-subtitle\\\">Discover quality and innovation in every detail</p>\\r\\n        ', '0', '0', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', '-1', '', '0', '0', '80', '0', '0', '0', '0', '0', '', '', '0', '<cms:editable\\r\\nname=\\'h1-hero-name\\'\\r\\ntype=\\'text\\'\\r\\nlabel=\\'h1-hero-description\\'/>', '', NULL, '1', '', '');";
$k_stmts[] = $k_stmt_pre."('6', '1', 'review-1', 'review-card-1', '', 'text', '0', 'text', '0', NULL, '\\r\\n                <div class=\\\"review-img\\\">\\r\\n                    <h3>Premium Sound</h3>\\r\\n                    <!--Img can go here-->\\r\\n                </div>\\r\\n                <div class=\\\"review-description\\\">\\r\\n                    <p>Lorieum Impsum text. bla bla bla</p>\\r\\n                    <p class=\\\"rating\\\">★★★★★ 5/5</p>\\r\\n\\r\\n        </div>\\r\\n        ', '0', '0', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', '-1', '', '0', '0', '80', '0', '0', '0', '0', '0', '', '', '0', '<cms:editable\\r\\nname=\\'review-1\\'\\r\\ntype=\\'text\\'\\r\\nlabel=\\'review-card-1\\'/>', '', NULL, '1', '', '');";

/* couch_pages (id, parent_id, creation_date, is_master, nested_parent_id, pointer_link_detail, file_meta, , , , , , , , , , , , , , , , , , , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_PAGES." VALUES ";
$k_stmts[] = $k_stmt_pre."('1', '1', '0', 'Default page for index.php * PLEASE CHANGE THIS TITLE *', 'default-page-for-index-php-please-change-this-title', '2025-12-19 20:23:12', '2026-01-05 23:13:16', '2025-12-19 20:23:12', NULL, '1', '-1', '0', '0', '1', '-1', '0', '1', NULL, '0', NULL, NULL, '0', '0', '0', NULL, NULL, '0', NULL, '127.0.0.1', '0', '1');";

/* couch_folders (id, template_id, k_desc, , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_FOLDERS." VALUES ";

/* couch_data_text (page_id, value, , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_DATA_TEXT." VALUES ";
$k_stmts[] = $k_stmt_pre."('1', '4', '<h1 class=\\\"hero-title\\\">s</h1>             <p class=\\\"hero-subtitle\\\">Discover quality and innovation in every detail</p>', 's Discover quality and innovation in every detail');";
$k_stmts[] = $k_stmt_pre."('1', '6', '<div class=\\\"review-img\\\">                    <h3>Why                                  </h3></div>                <div class=\\\"review-descxxxription\\\">                    <p>Lorieum Impsum text. bla bla bla</p>                    <p class=\\\"rating\\\">★★★★★ 5/5</p>        </div>', 'Why Lorieum Impsum text. bla bla bla ★★★★★ 5/5');";

/* couch_data_numeric (page_id, value, ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_DATA_NUMERIC." VALUES ";

/* couch_fulltext (page_id, content, ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_FULLTEXT." VALUES ";
$k_stmts[] = $k_stmt_pre."('1', 'Default page for index.php * PLEASE CHANGE THIS TITLE *', 's Discover quality and innovation in every detail Why Lorieum Impsum text. bla bla bla ★★★★★ 5/5 ');";

/* couch_comments (id, page_id, email, data, , , , , , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_COMMENTS." VALUES ";

/* couch_relations (pid, cid, , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_RELATIONS." VALUES ";

/* couch_sub_templates (template_id, field_id, , , ) */
$k_stmt_pre = "INSERT INTO ".K_TBL_SUB_TEMPLATES." VALUES ";
