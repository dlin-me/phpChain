<?php
/**
 *
 * User: davidlin
 * Date: 19/04/13
 * Time: 11:17 PM
 *
 * Example  Chain::with(array(1,2,3,4))->array_pop()->print_r()->getcwd()->withReturned()->print_r();
 *
 * @method Chain zend_version
 * @method Chain func_num_args
 * @method Chain func_get_arg
 * @method Chain func_get_args
 * @method Chain strlen
 * @method Chain strcmp
 * @method Chain strncmp
 * @method Chain strcasecmp
 * @method Chain strncasecmp
 * @method Chain each
 * @method Chain error_reporting
 * @method Chain define
 * @method Chain defined
 * @method Chain get_class
 * @method Chain get_called_class
 * @method Chain get_parent_class
 * @method Chain method_exists
 * @method Chain property_exists
 * @method Chain class_exists
 * @method Chain interface_exists
 * @method Chain function_exists
 * @method Chain class_alias
 * @method Chain get_included_files
 * @method Chain get_required_files
 * @method Chain is_subclass_of
 * @method Chain is_a
 * @method Chain get_class_vars
 * @method Chain get_object_vars
 * @method Chain get_class_methods
 * @method Chain trigger_error
 * @method Chain user_error
 * @method Chain set_error_handler
 * @method Chain restore_error_handler
 * @method Chain set_exception_handler
 * @method Chain restore_exception_handler
 * @method Chain get_declared_classes
 * @method Chain get_declared_interfaces
 * @method Chain get_defined_functions
 * @method Chain get_defined_vars
 * @method Chain create_function
 * @method Chain get_resource_type
 * @method Chain get_loaded_extensions
 * @method Chain extension_loaded
 * @method Chain get_extension_funcs
 * @method Chain get_defined_constants
 * @method Chain debug_backtrace
 * @method Chain debug_print_backtrace
 * @method Chain gc_collect_cycles
 * @method Chain gc_enabled
 * @method Chain gc_enable
 * @method Chain gc_disable
 * @method Chain strtotime
 * @method Chain date
 * @method Chain idate
 * @method Chain gmdate
 * @method Chain mktime
 * @method Chain gmmktime
 * @method Chain checkdate
 * @method Chain strftime
 * @method Chain gmstrftime
 * @method Chain time
 * @method Chain localtime
 * @method Chain getdate
 * @method Chain date_create
 * @method Chain date_create_from_format
 * @method Chain date_parse
 * @method Chain date_parse_from_format
 * @method Chain date_get_last_errors
 * @method Chain date_format
 * @method Chain date_modify
 * @method Chain date_add
 * @method Chain date_sub
 * @method Chain date_timezone_get
 * @method Chain date_timezone_set
 * @method Chain date_offset_get
 * @method Chain date_diff
 * @method Chain date_time_set
 * @method Chain date_date_set
 * @method Chain date_isodate_set
 * @method Chain date_timestamp_set
 * @method Chain date_timestamp_get
 * @method Chain timezone_open
 * @method Chain timezone_name_get
 * @method Chain timezone_name_from_abbr
 * @method Chain timezone_offset_get
 * @method Chain timezone_transitions_get
 * @method Chain timezone_location_get
 * @method Chain timezone_identifiers_list
 * @method Chain timezone_abbreviations_list
 * @method Chain timezone_version_get
 * @method Chain date_interval_create_from_date_string
 * @method Chain date_interval_format
 * @method Chain date_default_timezone_set
 * @method Chain date_default_timezone_get
 * @method Chain date_sunrise
 * @method Chain date_sunset
 * @method Chain date_sun_info
 * @method Chain ereg
 * @method Chain ereg_replace
 * @method Chain eregi
 * @method Chain eregi_replace
 * @method Chain split
 * @method Chain spliti
 * @method Chain sql_regcase
 * @method Chain libxml_set_streams_context
 * @method Chain libxml_use_internal_errors
 * @method Chain libxml_get_last_error
 * @method Chain libxml_clear_errors
 * @method Chain libxml_get_errors
 * @method Chain libxml_disable_entity_loader
 * @method Chain openssl_pkey_free
 * @method Chain openssl_pkey_new
 * @method Chain openssl_pkey_export
 * @method Chain openssl_pkey_export_to_file
 * @method Chain openssl_pkey_get_private
 * @method Chain openssl_pkey_get_public
 * @method Chain openssl_pkey_get_details
 * @method Chain openssl_free_key
 * @method Chain openssl_get_privatekey
 * @method Chain openssl_get_publickey
 * @method Chain openssl_x509_read
 * @method Chain openssl_x509_free
 * @method Chain openssl_x509_parse
 * @method Chain openssl_x509_checkpurpose
 * @method Chain openssl_x509_check_private_key
 * @method Chain openssl_x509_export
 * @method Chain openssl_x509_export_to_file
 * @method Chain openssl_pkcs12_export
 * @method Chain openssl_pkcs12_export_to_file
 * @method Chain openssl_pkcs12_read
 * @method Chain openssl_csr_new
 * @method Chain openssl_csr_export
 * @method Chain openssl_csr_export_to_file
 * @method Chain openssl_csr_sign
 * @method Chain openssl_csr_get_subject
 * @method Chain openssl_csr_get_public_key
 * @method Chain openssl_digest
 * @method Chain openssl_encrypt
 * @method Chain openssl_decrypt
 * @method Chain openssl_cipher_iv_length
 * @method Chain openssl_sign
 * @method Chain openssl_verify
 * @method Chain openssl_seal
 * @method Chain openssl_open
 * @method Chain openssl_pkcs7_verify
 * @method Chain openssl_pkcs7_decrypt
 * @method Chain openssl_pkcs7_sign
 * @method Chain openssl_pkcs7_encrypt
 * @method Chain openssl_private_encrypt
 * @method Chain openssl_private_decrypt
 * @method Chain openssl_public_encrypt
 * @method Chain openssl_public_decrypt
 * @method Chain openssl_get_md_methods
 * @method Chain openssl_get_cipher_methods
 * @method Chain openssl_dh_compute_key
 * @method Chain openssl_random_pseudo_bytes
 * @method Chain openssl_error_string
 * @method Chain preg_match
 * @method Chain preg_match_all
 * @method Chain preg_replace
 * @method Chain preg_replace_callback
 * @method Chain preg_filter
 * @method Chain preg_split
 * @method Chain preg_quote
 * @method Chain preg_grep
 * @method Chain preg_last_error
 * @method Chain readgzfile
 * @method Chain gzrewind
 * @method Chain gzclose
 * @method Chain gzeof
 * @method Chain gzgetc
 * @method Chain gzgets
 * @method Chain gzgetss
 * @method Chain gzread
 * @method Chain gzopen
 * @method Chain gzpassthru
 * @method Chain gzseek
 * @method Chain gztell
 * @method Chain gzwrite
 * @method Chain gzputs
 * @method Chain gzfile
 * @method Chain gzcompress
 * @method Chain gzuncompress
 * @method Chain gzdeflate
 * @method Chain gzinflate
 * @method Chain gzencode
 * @method Chain ob_gzhandler
 * @method Chain zlib_get_coding_type
 * @method Chain bcadd
 * @method Chain bcsub
 * @method Chain bcmul
 * @method Chain bcdiv
 * @method Chain bcmod
 * @method Chain bcpow
 * @method Chain bcsqrt
 * @method Chain bcscale
 * @method Chain bccomp
 * @method Chain bcpowmod
 * @method Chain bzopen
 * @method Chain bzread
 * @method Chain bzwrite
 * @method Chain bzflush
 * @method Chain bzclose
 * @method Chain bzerrno
 * @method Chain bzerrstr
 * @method Chain bzerror
 * @method Chain bzcompress
 * @method Chain bzdecompress
 * @method Chain jdtogregorian
 * @method Chain gregoriantojd
 * @method Chain jdtojulian
 * @method Chain juliantojd
 * @method Chain jdtojewish
 * @method Chain jewishtojd
 * @method Chain jdtofrench
 * @method Chain frenchtojd
 * @method Chain jddayofweek
 * @method Chain jdmonthname
 * @method Chain easter_date
 * @method Chain easter_days
 * @method Chain unixtojd
 * @method Chain jdtounix
 * @method Chain cal_to_jd
 * @method Chain cal_from_jd
 * @method Chain cal_days_in_month
 * @method Chain cal_info
 * @method Chain ctype_alnum
 * @method Chain ctype_alpha
 * @method Chain ctype_cntrl
 * @method Chain ctype_digit
 * @method Chain ctype_lower
 * @method Chain ctype_graph
 * @method Chain ctype_print
 * @method Chain ctype_punct
 * @method Chain ctype_space
 * @method Chain ctype_upper
 * @method Chain ctype_xdigit
 * @method Chain curl_init
 * @method Chain curl_copy_handle
 * @method Chain curl_version
 * @method Chain curl_setopt
 * @method Chain curl_setopt_array
 * @method Chain curl_exec
 * @method Chain curl_getinfo
 * @method Chain curl_error
 * @method Chain curl_errno
 * @method Chain curl_close
 * @method Chain curl_multi_init
 * @method Chain curl_multi_add_handle
 * @method Chain curl_multi_remove_handle
 * @method Chain curl_multi_select
 * @method Chain curl_multi_exec
 * @method Chain curl_multi_getcontent
 * @method Chain curl_multi_info_read
 * @method Chain curl_multi_close
 * @method Chain dba_open
 * @method Chain dba_popen
 * @method Chain dba_close
 * @method Chain dba_delete
 * @method Chain dba_exists
 * @method Chain dba_fetch
 * @method Chain dba_insert
 * @method Chain dba_replace
 * @method Chain dba_firstkey
 * @method Chain dba_nextkey
 * @method Chain dba_optimize
 * @method Chain dba_sync
 * @method Chain dba_handlers
 * @method Chain dba_list
 * @method Chain dba_key_split
 * @method Chain dom_import_simplexml
 * @method Chain exif_read_data
 * @method Chain read_exif_data
 * @method Chain exif_tagname
 * @method Chain exif_thumbnail
 * @method Chain exif_imagetype
 * @method Chain finfo_open
 * @method Chain finfo_close
 * @method Chain finfo_set_flags
 * @method Chain finfo_file
 * @method Chain finfo_buffer
 * @method Chain mime_content_type
 * @method Chain filter_input
 * @method Chain filter_var
 * @method Chain filter_input_array
 * @method Chain filter_var_array
 * @method Chain filter_list
 * @method Chain filter_has_var
 * @method Chain filter_id
 * @method Chain ftp_connect
 * @method Chain ftp_ssl_connect
 * @method Chain ftp_login
 * @method Chain ftp_pwd
 * @method Chain ftp_cdup
 * @method Chain ftp_chdir
 * @method Chain ftp_exec
 * @method Chain ftp_raw
 * @method Chain ftp_mkdir
 * @method Chain ftp_rmdir
 * @method Chain ftp_chmod
 * @method Chain ftp_alloc
 * @method Chain ftp_nlist
 * @method Chain ftp_rawlist
 * @method Chain ftp_systype
 * @method Chain ftp_pasv
 * @method Chain ftp_get
 * @method Chain ftp_fget
 * @method Chain ftp_put
 * @method Chain ftp_fput
 * @method Chain ftp_size
 * @method Chain ftp_mdtm
 * @method Chain ftp_rename
 * @method Chain ftp_delete
 * @method Chain ftp_site
 * @method Chain ftp_close
 * @method Chain ftp_set_option
 * @method Chain ftp_get_option
 * @method Chain ftp_nb_fget
 * @method Chain ftp_nb_get
 * @method Chain ftp_nb_continue
 * @method Chain ftp_nb_put
 * @method Chain ftp_nb_fput
 * @method Chain ftp_quit
 * @method Chain gd_info
 * @method Chain imagearc
 * @method Chain imageellipse
 * @method Chain imagechar
 * @method Chain imagecharup
 * @method Chain imagecolorat
 * @method Chain imagecolorallocate
 * @method Chain imagepalettecopy
 * @method Chain imagecreatefromstring
 * @method Chain imagecolorclosest
 * @method Chain imagecolorclosesthwb
 * @method Chain imagecolordeallocate
 * @method Chain imagecolorresolve
 * @method Chain imagecolorexact
 * @method Chain imagecolorset
 * @method Chain imagecolortransparent
 * @method Chain imagecolorstotal
 * @method Chain imagecolorsforindex
 * @method Chain imagecopy
 * @method Chain imagecopymerge
 * @method Chain imagecopymergegray
 * @method Chain imagecopyresized
 * @method Chain imagecreate
 * @method Chain imagecreatetruecolor
 * @method Chain imageistruecolor
 * @method Chain imagetruecolortopalette
 * @method Chain imagesetthickness
 * @method Chain imagefilledarc
 * @method Chain imagefilledellipse
 * @method Chain imagealphablending
 * @method Chain imagesavealpha
 * @method Chain imagecolorallocatealpha
 * @method Chain imagecolorresolvealpha
 * @method Chain imagecolorclosestalpha
 * @method Chain imagecolorexactalpha
 * @method Chain imagecopyresampled
 * @method Chain imagerotate
 * @method Chain imageantialias
 * @method Chain imagesettile
 * @method Chain imagesetbrush
 * @method Chain imagesetstyle
 * @method Chain imagecreatefrompng
 * @method Chain imagecreatefromgif
 * @method Chain imagecreatefromjpeg
 * @method Chain imagecreatefromwbmp
 * @method Chain imagecreatefromxbm
 * @method Chain imagecreatefromgd
 * @method Chain imagecreatefromgd2
 * @method Chain imagecreatefromgd2part
 * @method Chain imagepng
 * @method Chain imagegif
 * @method Chain imagejpeg
 * @method Chain imagewbmp
 * @method Chain imagegd
 * @method Chain imagegd2
 * @method Chain imagedestroy
 * @method Chain imagegammacorrect
 * @method Chain imagefill
 * @method Chain imagefilledpolygon
 * @method Chain imagefilledrectangle
 * @method Chain imagefilltoborder
 * @method Chain imagefontwidth
 * @method Chain imagefontheight
 * @method Chain imageinterlace
 * @method Chain imageline
 * @method Chain imageloadfont
 * @method Chain imagepolygon
 * @method Chain imagerectangle
 * @method Chain imagesetpixel
 * @method Chain imagestring
 * @method Chain imagestringup
 * @method Chain imagesx
 * @method Chain imagesy
 * @method Chain imagedashedline
 * @method Chain imagettfbbox
 * @method Chain imagettftext
 * @method Chain imageftbbox
 * @method Chain imagefttext
 * @method Chain imagetypes
 * @method Chain jpeg2wbmp
 * @method Chain png2wbmp
 * @method Chain image2wbmp
 * @method Chain imagelayereffect
 * @method Chain imagexbm
 * @method Chain imagecolormatch
 * @method Chain imagefilter
 * @method Chain imageconvolution
 * @method Chain hash
 * @method Chain hash_file
 * @method Chain hash_hmac
 * @method Chain hash_hmac_file
 * @method Chain hash_init
 * @method Chain hash_update
 * @method Chain hash_update_stream
 * @method Chain hash_update_file
 * @method Chain hash_final
 * @method Chain hash_copy
 * @method Chain hash_algos
 * @method Chain iconv
 * @method Chain ob_iconv_handler
 * @method Chain iconv_get_encoding
 * @method Chain iconv_set_encoding
 * @method Chain iconv_strlen
 * @method Chain iconv_substr
 * @method Chain iconv_strpos
 * @method Chain iconv_strrpos
 * @method Chain iconv_mime_encode
 * @method Chain iconv_mime_decode
 * @method Chain iconv_mime_decode_headers
 * @method Chain json_encode
 * @method Chain json_decode
 * @method Chain json_last_error
 * @method Chain ldap_connect
 * @method Chain ldap_close
 * @method Chain ldap_bind
 * @method Chain ldap_sasl_bind
 * @method Chain ldap_unbind
 * @method Chain ldap_read
 * @method Chain ldap_list
 * @method Chain ldap_search
 * @method Chain ldap_free_result
 * @method Chain ldap_count_entries
 * @method Chain ldap_first_entry
 * @method Chain ldap_next_entry
 * @method Chain ldap_get_entries
 * @method Chain ldap_first_attribute
 * @method Chain ldap_next_attribute
 * @method Chain ldap_get_attributes
 * @method Chain ldap_get_values
 * @method Chain ldap_get_values_len
 * @method Chain ldap_get_dn
 * @method Chain ldap_explode_dn
 * @method Chain ldap_dn2ufn
 * @method Chain ldap_add
 * @method Chain ldap_delete
 * @method Chain ldap_modify
 * @method Chain ldap_mod_add
 * @method Chain ldap_mod_replace
 * @method Chain ldap_mod_del
 * @method Chain ldap_errno
 * @method Chain ldap_err2str
 * @method Chain ldap_error
 * @method Chain ldap_compare
 * @method Chain ldap_sort
 * @method Chain ldap_rename
 * @method Chain ldap_get_option
 * @method Chain ldap_set_option
 * @method Chain ldap_first_reference
 * @method Chain ldap_next_reference
 * @method Chain ldap_parse_reference
 * @method Chain ldap_parse_result
 * @method Chain ldap_start_tls
 * @method Chain ldap_set_rebind_proc
 * @method Chain mb_convert_case
 * @method Chain mb_strtoupper
 * @method Chain mb_strtolower
 * @method Chain mb_language
 * @method Chain mb_internal_encoding
 * @method Chain mb_http_input
 * @method Chain mb_http_output
 * @method Chain mb_detect_order
 * @method Chain mb_substitute_character
 * @method Chain mb_parse_str
 * @method Chain mb_output_handler
 * @method Chain mb_preferred_mime_name
 * @method Chain mb_strlen
 * @method Chain mb_strpos
 * @method Chain mb_strrpos
 * @method Chain mb_stripos
 * @method Chain mb_strripos
 * @method Chain mb_strstr
 * @method Chain mb_strrchr
 * @method Chain mb_stristr
 * @method Chain mb_strrichr
 * @method Chain mb_substr_count
 * @method Chain mb_substr
 * @method Chain mb_strcut
 * @method Chain mb_strwidth
 * @method Chain mb_strimwidth
 * @method Chain mb_convert_encoding
 * @method Chain mb_detect_encoding
 * @method Chain mb_list_encodings
 * @method Chain mb_encoding_aliases
 * @method Chain mb_convert_kana
 * @method Chain mb_encode_mimeheader
 * @method Chain mb_decode_mimeheader
 * @method Chain mb_convert_variables
 * @method Chain mb_encode_numericentity
 * @method Chain mb_decode_numericentity
 * @method Chain mb_send_mail
 * @method Chain mb_get_info
 * @method Chain mb_check_encoding
 * @method Chain mb_regex_encoding
 * @method Chain mb_regex_set_options
 * @method Chain mb_ereg
 * @method Chain mb_eregi
 * @method Chain mb_ereg_replace
 * @method Chain mb_eregi_replace
 * @method Chain mb_split
 * @method Chain mb_ereg_match
 * @method Chain mb_ereg_search
 * @method Chain mb_ereg_search_pos
 * @method Chain mb_ereg_search_regs
 * @method Chain mb_ereg_search_init
 * @method Chain mb_ereg_search_getregs
 * @method Chain mb_ereg_search_getpos
 * @method Chain mb_ereg_search_setpos
 * @method Chain mbregex_encoding
 * @method Chain mbereg
 * @method Chain mberegi
 * @method Chain mbereg_replace
 * @method Chain mberegi_replace
 * @method Chain mbsplit
 * @method Chain mbereg_match
 * @method Chain mbereg_search
 * @method Chain mbereg_search_pos
 * @method Chain mbereg_search_regs
 * @method Chain mbereg_search_init
 * @method Chain mbereg_search_getregs
 * @method Chain mbereg_search_getpos
 * @method Chain mbereg_search_setpos
 * @method Chain mysql_connect
 * @method Chain mysql_pconnect
 * @method Chain mysql_close
 * @method Chain mysql_select_db
 * @method Chain mysql_query
 * @method Chain mysql_unbuffered_query
 * @method Chain mysql_db_query
 * @method Chain mysql_list_dbs
 * @method Chain mysql_list_tables
 * @method Chain mysql_list_fields
 * @method Chain mysql_list_processes
 * @method Chain mysql_error
 * @method Chain mysql_errno
 * @method Chain mysql_affected_rows
 * @method Chain mysql_insert_id
 * @method Chain mysql_result
 * @method Chain mysql_num_rows
 * @method Chain mysql_num_fields
 * @method Chain mysql_fetch_row
 * @method Chain mysql_fetch_array
 * @method Chain mysql_fetch_assoc
 * @method Chain mysql_fetch_object
 * @method Chain mysql_data_seek
 * @method Chain mysql_fetch_lengths
 * @method Chain mysql_fetch_field
 * @method Chain mysql_field_seek
 * @method Chain mysql_free_result
 * @method Chain mysql_field_name
 * @method Chain mysql_field_table
 * @method Chain mysql_field_len
 * @method Chain mysql_field_type
 * @method Chain mysql_field_flags
 * @method Chain mysql_escape_string
 * @method Chain mysql_real_escape_string
 * @method Chain mysql_stat
 * @method Chain mysql_thread_id
 * @method Chain mysql_client_encoding
 * @method Chain mysql_ping
 * @method Chain mysql_get_client_info
 * @method Chain mysql_get_host_info
 * @method Chain mysql_get_proto_info
 * @method Chain mysql_get_server_info
 * @method Chain mysql_info
 * @method Chain mysql_set_charset
 * @method Chain mysql
 * @method Chain mysql_fieldname
 * @method Chain mysql_fieldtable
 * @method Chain mysql_fieldlen
 * @method Chain mysql_fieldtype
 * @method Chain mysql_fieldflags
 * @method Chain mysql_selectdb
 * @method Chain mysql_freeresult
 * @method Chain mysql_numfields
 * @method Chain mysql_numrows
 * @method Chain mysql_listdbs
 * @method Chain mysql_listtables
 * @method Chain mysql_listfields
 * @method Chain mysql_db_name
 * @method Chain mysql_dbname
 * @method Chain mysql_tablename
 * @method Chain mysql_table_name
 * @method Chain mysqli_affected_rows
 * @method Chain mysqli_autocommit
 * @method Chain mysqli_change_user
 * @method Chain mysqli_character_set_name
 * @method Chain mysqli_close
 * @method Chain mysqli_commit
 * @method Chain mysqli_connect
 * @method Chain mysqli_connect_errno
 * @method Chain mysqli_connect_error
 * @method Chain mysqli_data_seek
 * @method Chain mysqli_dump_debug_info
 * @method Chain mysqli_debug
 * @method Chain mysqli_errno
 * @method Chain mysqli_error
 * @method Chain mysqli_stmt_execute
 * @method Chain mysqli_execute
 * @method Chain mysqli_fetch_field
 * @method Chain mysqli_fetch_fields
 * @method Chain mysqli_fetch_field_direct
 * @method Chain mysqli_fetch_lengths
 * @method Chain mysqli_fetch_all
 * @method Chain mysqli_fetch_array
 * @method Chain mysqli_fetch_assoc
 * @method Chain mysqli_fetch_object
 * @method Chain mysqli_fetch_row
 * @method Chain mysqli_field_count
 * @method Chain mysqli_field_seek
 * @method Chain mysqli_field_tell
 * @method Chain mysqli_free_result
 * @method Chain mysqli_get_cache_stats
 * @method Chain mysqli_get_connection_stats
 * @method Chain mysqli_get_client_stats
 * @method Chain mysqli_get_charset
 * @method Chain mysqli_get_client_info
 * @method Chain mysqli_get_client_version
 * @method Chain mysqli_get_host_info
 * @method Chain mysqli_get_proto_info
 * @method Chain mysqli_get_server_info
 * @method Chain mysqli_get_server_version
 * @method Chain mysqli_get_warnings
 * @method Chain mysqli_init
 * @method Chain mysqli_info
 * @method Chain mysqli_insert_id
 * @method Chain mysqli_kill
 * @method Chain mysqli_more_results
 * @method Chain mysqli_multi_query
 * @method Chain mysqli_next_result
 * @method Chain mysqli_num_fields
 * @method Chain mysqli_num_rows
 * @method Chain mysqli_options
 * @method Chain mysqli_ping
 * @method Chain mysqli_poll
 * @method Chain mysqli_prepare
 * @method Chain mysqli_report
 * @method Chain mysqli_query
 * @method Chain mysqli_real_connect
 * @method Chain mysqli_real_escape_string
 * @method Chain mysqli_real_query
 * @method Chain mysqli_reap_async_query
 * @method Chain mysqli_rollback
 * @method Chain mysqli_select_db
 * @method Chain mysqli_set_charset
 * @method Chain mysqli_stmt_affected_rows
 * @method Chain mysqli_stmt_attr_get
 * @method Chain mysqli_stmt_attr_set
 * @method Chain mysqli_stmt_bind_param
 * @method Chain mysqli_stmt_bind_result
 * @method Chain mysqli_stmt_close
 * @method Chain mysqli_stmt_data_seek
 * @method Chain mysqli_stmt_errno
 * @method Chain mysqli_stmt_error
 * @method Chain mysqli_stmt_fetch
 * @method Chain mysqli_stmt_field_count
 * @method Chain mysqli_stmt_free_result
 * @method Chain mysqli_stmt_get_result
 * @method Chain mysqli_stmt_get_warnings
 * @method Chain mysqli_stmt_init
 * @method Chain mysqli_stmt_insert_id
 * @method Chain mysqli_stmt_more_results
 * @method Chain mysqli_stmt_next_result
 * @method Chain mysqli_stmt_num_rows
 * @method Chain mysqli_stmt_param_count
 * @method Chain mysqli_stmt_prepare
 * @method Chain mysqli_stmt_reset
 * @method Chain mysqli_stmt_result_metadata
 * @method Chain mysqli_stmt_send_long_data
 * @method Chain mysqli_stmt_store_result
 * @method Chain mysqli_stmt_sqlstate
 * @method Chain mysqli_sqlstate
 * @method Chain mysqli_ssl_set
 * @method Chain mysqli_stat
 * @method Chain mysqli_store_result
 * @method Chain mysqli_thread_id
 * @method Chain mysqli_thread_safe
 * @method Chain mysqli_use_result
 * @method Chain mysqli_warning_count
 * @method Chain mysqli_refresh
 * @method Chain mysqli_bind_param
 * @method Chain mysqli_bind_result
 * @method Chain mysqli_client_encoding
 * @method Chain mysqli_escape_string
 * @method Chain mysqli_fetch
 * @method Chain mysqli_param_count
 * @method Chain mysqli_get_metadata
 * @method Chain mysqli_send_long_data
 * @method Chain mysqli_set_opt
 * @method Chain odbc_autocommit
 * @method Chain odbc_binmode
 * @method Chain odbc_close
 * @method Chain odbc_close_all
 * @method Chain odbc_columns
 * @method Chain odbc_commit
 * @method Chain odbc_connect
 * @method Chain odbc_cursor
 * @method Chain odbc_data_source
 * @method Chain odbc_execute
 * @method Chain odbc_error
 * @method Chain odbc_errormsg
 * @method Chain odbc_exec
 * @method Chain odbc_fetch_array
 * @method Chain odbc_fetch_object
 * @method Chain odbc_fetch_row
 * @method Chain odbc_fetch_into
 * @method Chain odbc_field_len
 * @method Chain odbc_field_scale
 * @method Chain odbc_field_name
 * @method Chain odbc_field_type
 * @method Chain odbc_field_num
 * @method Chain odbc_free_result
 * @method Chain odbc_gettypeinfo
 * @method Chain odbc_longreadlen
 * @method Chain odbc_next_result
 * @method Chain odbc_num_fields
 * @method Chain odbc_num_rows
 * @method Chain odbc_pconnect
 * @method Chain odbc_prepare
 * @method Chain odbc_result
 * @method Chain odbc_result_all
 * @method Chain odbc_rollback
 * @method Chain odbc_setoption
 * @method Chain odbc_specialcolumns
 * @method Chain odbc_statistics
 * @method Chain odbc_tables
 * @method Chain odbc_primarykeys
 * @method Chain odbc_columnprivileges
 * @method Chain odbc_tableprivileges
 * @method Chain odbc_foreignkeys
 * @method Chain odbc_procedures
 * @method Chain odbc_procedurecolumns
 * @method Chain odbc_do
 * @method Chain odbc_field_precision
 * @method Chain spl_classes
 * @method Chain spl_autoload
 * @method Chain spl_autoload_extensions
 * @method Chain spl_autoload_register
 * @method Chain spl_autoload_unregister
 * @method Chain spl_autoload_functions
 * @method Chain spl_autoload_call
 * @method Chain class_parents
 * @method Chain class_implements
 * @method Chain spl_object_hash
 * @method Chain iterator_to_array
 * @method Chain iterator_count
 * @method Chain iterator_apply
 * @method Chain pdo_drivers
 * @method Chain pg_connect
 * @method Chain pg_pconnect
 * @method Chain pg_close
 * @method Chain pg_connection_status
 * @method Chain pg_connection_busy
 * @method Chain pg_connection_reset
 * @method Chain pg_host
 * @method Chain pg_dbname
 * @method Chain pg_port
 * @method Chain pg_tty
 * @method Chain pg_options
 * @method Chain pg_version
 * @method Chain pg_ping
 * @method Chain pg_parameter_status
 * @method Chain pg_transaction_status
 * @method Chain pg_query
 * @method Chain pg_query_params
 * @method Chain pg_prepare
 * @method Chain pg_execute
 * @method Chain pg_send_query
 * @method Chain pg_send_query_params
 * @method Chain pg_send_prepare
 * @method Chain pg_send_execute
 * @method Chain pg_cancel_query
 * @method Chain pg_fetch_result
 * @method Chain pg_fetch_row
 * @method Chain pg_fetch_assoc
 * @method Chain pg_fetch_array
 * @method Chain pg_fetch_object
 * @method Chain pg_fetch_all
 * @method Chain pg_fetch_all_columns
 * @method Chain pg_affected_rows
 * @method Chain pg_get_result
 * @method Chain pg_result_seek
 * @method Chain pg_result_status
 * @method Chain pg_free_result
 * @method Chain pg_last_oid
 * @method Chain pg_num_rows
 * @method Chain pg_num_fields
 * @method Chain pg_field_name
 * @method Chain pg_field_num
 * @method Chain pg_field_size
 * @method Chain pg_field_type
 * @method Chain pg_field_type_oid
 * @method Chain pg_field_prtlen
 * @method Chain pg_field_is_null
 * @method Chain pg_field_table
 * @method Chain pg_get_notify
 * @method Chain pg_get_pid
 * @method Chain pg_result_error
 * @method Chain pg_result_error_field
 * @method Chain pg_last_error
 * @method Chain pg_last_notice
 * @method Chain pg_put_line
 * @method Chain pg_end_copy
 * @method Chain pg_copy_to
 * @method Chain pg_copy_from
 * @method Chain pg_trace
 * @method Chain pg_untrace
 * @method Chain pg_lo_create
 * @method Chain pg_lo_unlink
 * @method Chain pg_lo_open
 * @method Chain pg_lo_close
 * @method Chain pg_lo_read
 * @method Chain pg_lo_write
 * @method Chain pg_lo_read_all
 * @method Chain pg_lo_import
 * @method Chain pg_lo_export
 * @method Chain pg_lo_seek
 * @method Chain pg_lo_tell
 * @method Chain pg_escape_string
 * @method Chain pg_escape_bytea
 * @method Chain pg_unescape_bytea
 * @method Chain pg_set_error_verbosity
 * @method Chain pg_client_encoding
 * @method Chain pg_set_client_encoding
 * @method Chain pg_meta_data
 * @method Chain pg_convert
 * @method Chain pg_insert
 * @method Chain pg_update
 * @method Chain pg_delete
 * @method Chain pg_select
 * @method Chain pg_exec
 * @method Chain pg_getlastoid
 * @method Chain pg_cmdtuples
 * @method Chain pg_errormessage
 * @method Chain pg_numrows
 * @method Chain pg_numfields
 * @method Chain pg_fieldname
 * @method Chain pg_fieldsize
 * @method Chain pg_fieldtype
 * @method Chain pg_fieldnum
 * @method Chain pg_fieldprtlen
 * @method Chain pg_fieldisnull
 * @method Chain pg_freeresult
 * @method Chain pg_result
 * @method Chain pg_loreadall
 * @method Chain pg_locreate
 * @method Chain pg_lounlink
 * @method Chain pg_loopen
 * @method Chain pg_loclose
 * @method Chain pg_loread
 * @method Chain pg_lowrite
 * @method Chain pg_loimport
 * @method Chain pg_loexport
 * @method Chain pg_clientencoding
 * @method Chain pg_setclientencoding
 * @method Chain posix_kill
 * @method Chain posix_getpid
 * @method Chain posix_getppid
 * @method Chain posix_getuid
 * @method Chain posix_setuid
 * @method Chain posix_geteuid
 * @method Chain posix_seteuid
 * @method Chain posix_getgid
 * @method Chain posix_setgid
 * @method Chain posix_getegid
 * @method Chain posix_setegid
 * @method Chain posix_getgroups
 * @method Chain posix_getlogin
 * @method Chain posix_getpgrp
 * @method Chain posix_setsid
 * @method Chain posix_setpgid
 * @method Chain posix_getpgid
 * @method Chain posix_getsid
 * @method Chain posix_uname
 * @method Chain posix_times
 * @method Chain posix_ctermid
 * @method Chain posix_ttyname
 * @method Chain posix_isatty
 * @method Chain posix_getcwd
 * @method Chain posix_mkfifo
 * @method Chain posix_mknod
 * @method Chain posix_access
 * @method Chain posix_getgrnam
 * @method Chain posix_getgrgid
 * @method Chain posix_getpwnam
 * @method Chain posix_getpwuid
 * @method Chain posix_getrlimit
 * @method Chain posix_get_last_error
 * @method Chain posix_errno
 * @method Chain posix_strerror
 * @method Chain posix_initgroups
 * @method Chain readline
 * @method Chain readline_info
 * @method Chain readline_add_history
 * @method Chain readline_clear_history
 * @method Chain readline_read_history
 * @method Chain readline_write_history
 * @method Chain readline_completion_function
 * @method Chain session_name
 * @method Chain session_module_name
 * @method Chain session_save_path
 * @method Chain session_id
 * @method Chain session_regenerate_id
 * @method Chain session_decode
 * @method Chain session_register
 * @method Chain session_unregister
 * @method Chain session_is_registered
 * @method Chain session_encode
 * @method Chain session_start
 * @method Chain session_destroy
 * @method Chain session_unset
 * @method Chain session_set_save_handler
 * @method Chain session_cache_limiter
 * @method Chain session_cache_expire
 * @method Chain session_set_cookie_params
 * @method Chain session_get_cookie_params
 * @method Chain session_write_close
 * @method Chain session_commit
 * @method Chain shmop_open
 * @method Chain shmop_read
 * @method Chain shmop_close
 * @method Chain shmop_size
 * @method Chain shmop_write
 * @method Chain shmop_delete
 * @method Chain simplexml_load_file
 * @method Chain simplexml_load_string
 * @method Chain simplexml_import_dom
 * @method Chain snmpget
 * @method Chain snmpgetnext
 * @method Chain snmpwalk
 * @method Chain snmprealwalk
 * @method Chain snmpwalkoid
 * @method Chain snmp_get_quick_print
 * @method Chain snmp_set_quick_print
 * @method Chain snmp_set_enum_print
 * @method Chain snmp_set_oid_output_format
 * @method Chain snmp_set_oid_numeric_print
 * @method Chain snmpset
 * @method Chain snmp2_get
 * @method Chain snmp2_getnext
 * @method Chain snmp2_walk
 * @method Chain snmp2_real_walk
 * @method Chain snmp2_set
 * @method Chain snmp3_get
 * @method Chain snmp3_getnext
 * @method Chain snmp3_walk
 * @method Chain snmp3_real_walk
 * @method Chain snmp3_set
 * @method Chain snmp_set_valueretrieval
 * @method Chain snmp_get_valueretrieval
 * @method Chain snmp_read_mib
 * @method Chain use_soap_error_handler
 * @method Chain is_soap_fault
 * @method Chain socket_select
 * @method Chain socket_create
 * @method Chain socket_create_listen
 * @method Chain socket_create_pair
 * @method Chain socket_accept
 * @method Chain socket_set_nonblock
 * @method Chain socket_set_block
 * @method Chain socket_listen
 * @method Chain socket_close
 * @method Chain socket_write
 * @method Chain socket_read
 * @method Chain socket_getsockname
 * @method Chain socket_getpeername
 * @method Chain socket_connect
 * @method Chain socket_strerror
 * @method Chain socket_bind
 * @method Chain socket_recv
 * @method Chain socket_send
 * @method Chain socket_recvfrom
 * @method Chain socket_sendto
 * @method Chain socket_get_option
 * @method Chain socket_set_option
 * @method Chain socket_shutdown
 * @method Chain socket_last_error
 * @method Chain socket_clear_error
 * @method Chain socket_getopt
 * @method Chain socket_setopt
 * @method Chain sqlite_open
 * @method Chain sqlite_popen
 * @method Chain sqlite_close
 * @method Chain sqlite_query
 * @method Chain sqlite_exec
 * @method Chain sqlite_array_query
 * @method Chain sqlite_single_query
 * @method Chain sqlite_fetch_array
 * @method Chain sqlite_fetch_object
 * @method Chain sqlite_fetch_single
 * @method Chain sqlite_fetch_string
 * @method Chain sqlite_fetch_all
 * @method Chain sqlite_current
 * @method Chain sqlite_column
 * @method Chain sqlite_libversion
 * @method Chain sqlite_libencoding
 * @method Chain sqlite_changes
 * @method Chain sqlite_last_insert_rowid
 * @method Chain sqlite_num_rows
 * @method Chain sqlite_num_fields
 * @method Chain sqlite_field_name
 * @method Chain sqlite_seek
 * @method Chain sqlite_rewind
 * @method Chain sqlite_next
 * @method Chain sqlite_prev
 * @method Chain sqlite_valid
 * @method Chain sqlite_has_more
 * @method Chain sqlite_has_prev
 * @method Chain sqlite_escape_string
 * @method Chain sqlite_busy_timeout
 * @method Chain sqlite_last_error
 * @method Chain sqlite_error_string
 * @method Chain sqlite_unbuffered_query
 * @method Chain sqlite_create_aggregate
 * @method Chain sqlite_create_function
 * @method Chain sqlite_factory
 * @method Chain sqlite_udf_encode_binary
 * @method Chain sqlite_udf_decode_binary
 * @method Chain sqlite_fetch_column_types
 * @method Chain constant
 * @method Chain bin2hex
 * @method Chain sleep
 * @method Chain usleep
 * @method Chain time_nanosleep
 * @method Chain time_sleep_until
 * @method Chain strptime
 * @method Chain flush
 * @method Chain wordwrap
 * @method Chain htmlspecialchars
 * @method Chain htmlentities
 * @method Chain html_entity_decode
 * @method Chain htmlspecialchars_decode
 * @method Chain get_html_translation_table
 * @method Chain sha1
 * @method Chain sha1_file
 * @method Chain md5
 * @method Chain md5_file
 * @method Chain crc32
 * @method Chain iptcparse
 * @method Chain iptcembed
 * @method Chain getimagesize
 * @method Chain image_type_to_mime_type
 * @method Chain image_type_to_extension
 * @method Chain phpinfo
 * @method Chain phpversion
 * @method Chain phpcredits
 * @method Chain php_logo_guid
 * @method Chain php_real_logo_guid
 * @method Chain php_egg_logo_guid
 * @method Chain zend_logo_guid
 * @method Chain php_sapi_name
 * @method Chain php_uname
 * @method Chain php_ini_scanned_files
 * @method Chain php_ini_loaded_file
 * @method Chain strnatcmp
 * @method Chain strnatcasecmp
 * @method Chain substr_count
 * @method Chain strspn
 * @method Chain strcspn
 * @method Chain strtok
 * @method Chain strtoupper
 * @method Chain strtolower
 * @method Chain strpos
 * @method Chain stripos
 * @method Chain strrpos
 * @method Chain strripos
 * @method Chain strrev
 * @method Chain hebrev
 * @method Chain hebrevc
 * @method Chain nl2br
 * @method Chain basename
 * @method Chain dirname
 * @method Chain pathinfo
 * @method Chain stripslashes
 * @method Chain stripcslashes
 * @method Chain strstr
 * @method Chain stristr
 * @method Chain strrchr
 * @method Chain str_shuffle
 * @method Chain str_word_count
 * @method Chain str_split
 * @method Chain strpbrk
 * @method Chain substr_compare
 * @method Chain strcoll
 * @method Chain money_format
 * @method Chain substr
 * @method Chain substr_replace
 * @method Chain quotemeta
 * @method Chain ucfirst
 * @method Chain lcfirst
 * @method Chain ucwords
 * @method Chain strtr
 * @method Chain addslashes
 * @method Chain addcslashes
 * @method Chain rtrim
 * @method Chain str_replace
 * @method Chain str_ireplace
 * @method Chain str_repeat
 * @method Chain count_chars
 * @method Chain chunk_split
 * @method Chain trim
 * @method Chain ltrim
 * @method Chain strip_tags
 * @method Chain similar_text
 * @method Chain explode
 * @method Chain implode
 * @method Chain join
 * @method Chain setlocale
 * @method Chain localeconv
 * @method Chain nl_langinfo
 * @method Chain soundex
 * @method Chain levenshtein
 * @method Chain chr
 * @method Chain ord
 * @method Chain parse_str
 * @method Chain str_getcsv
 * @method Chain str_pad
 * @method Chain chop
 * @method Chain strchr
 * @method Chain sprintf
 * @method Chain printf
 * @method Chain vprintf
 * @method Chain vsprintf
 * @method Chain fprintf
 * @method Chain vfprintf
 * @method Chain sscanf
 * @method Chain fscanf
 * @method Chain parse_url
 * @method Chain urlencode
 * @method Chain urldecode
 * @method Chain rawurlencode
 * @method Chain rawurldecode
 * @method Chain http_build_query
 * @method Chain readlink
 * @method Chain linkinfo
 * @method Chain symlink
 * @method Chain link
 * @method Chain unlink
 * @method Chain exec
 * @method Chain system
 * @method Chain escapeshellcmd
 * @method Chain escapeshellarg
 * @method Chain passthru
 * @method Chain shell_exec
 * @method Chain proc_open
 * @method Chain proc_close
 * @method Chain proc_terminate
 * @method Chain proc_get_status
 * @method Chain proc_nice
 * @method Chain rand
 * @method Chain srand
 * @method Chain getrandmax
 * @method Chain mt_rand
 * @method Chain mt_srand
 * @method Chain mt_getrandmax
 * @method Chain getservbyname
 * @method Chain getservbyport
 * @method Chain getprotobyname
 * @method Chain getprotobynumber
 * @method Chain getmyuid
 * @method Chain getmygid
 * @method Chain getmypid
 * @method Chain getmyinode
 * @method Chain getlastmod
 * @method Chain base64_decode
 * @method Chain base64_encode
 * @method Chain convert_uuencode
 * @method Chain convert_uudecode
 * @method Chain abs
 * @method Chain ceil
 * @method Chain floor
 * @method Chain round
 * @method Chain sin
 * @method Chain cos
 * @method Chain tan
 * @method Chain asin
 * @method Chain acos
 * @method Chain atan
 * @method Chain atanh
 * @method Chain atan2
 * @method Chain sinh
 * @method Chain cosh
 * @method Chain tanh
 * @method Chain asinh
 * @method Chain acosh
 * @method Chain expm1
 * @method Chain log1p
 * @method Chain pi
 * @method Chain is_finite
 * @method Chain is_nan
 * @method Chain is_infinite
 * @method Chain pow
 * @method Chain exp
 * @method Chain log
 * @method Chain log10
 * @method Chain sqrt
 * @method Chain hypot
 * @method Chain deg2rad
 * @method Chain rad2deg
 * @method Chain bindec
 * @method Chain hexdec
 * @method Chain octdec
 * @method Chain decbin
 * @method Chain decoct
 * @method Chain dechex
 * @method Chain base_convert
 * @method Chain number_format
 * @method Chain fmod
 * @method Chain inet_ntop
 * @method Chain inet_pton
 * @method Chain ip2long
 * @method Chain long2ip
 * @method Chain getenv
 * @method Chain putenv
 * @method Chain getopt
 * @method Chain sys_getloadavg
 * @method Chain microtime
 * @method Chain gettimeofday
 * @method Chain getrusage
 * @method Chain uniqid
 * @method Chain quoted_printable_decode
 * @method Chain quoted_printable_encode
 * @method Chain convert_cyr_string
 * @method Chain get_current_user
 * @method Chain set_time_limit
 * @method Chain get_cfg_var
 * @method Chain magic_quotes_runtime
 * @method Chain set_magic_quotes_runtime
 * @method Chain get_magic_quotes_gpc
 * @method Chain get_magic_quotes_runtime
 * @method Chain import_request_variables
 * @method Chain error_log
 * @method Chain error_get_last
 * @method Chain call_user_func
 * @method Chain call_user_func_array
 * @method Chain call_user_method
 * @method Chain call_user_method_array
 * @method Chain forward_static_call
 * @method Chain forward_static_call_array
 * @method Chain serialize
 * @method Chain unserialize
 * @method Chain var_dump
 * @method Chain var_export
 * @method Chain debug_zval_dump
 * @method Chain print_r
 * @method Chain memory_get_usage
 * @method Chain memory_get_peak_usage
 * @method Chain register_shutdown_function
 * @method Chain register_tick_function
 * @method Chain unregister_tick_function
 * @method Chain highlight_file
 * @method Chain show_source
 * @method Chain highlight_string
 * @method Chain php_strip_whitespace
 * @method Chain ini_get
 * @method Chain ini_get_all
 * @method Chain ini_set
 * @method Chain ini_alter
 * @method Chain ini_restore
 * @method Chain get_include_path
 * @method Chain set_include_path
 * @method Chain restore_include_path
 * @method Chain setcookie
 * @method Chain setrawcookie
 * @method Chain header
 * @method Chain header_remove
 * @method Chain headers_sent
 * @method Chain headers_list
 * @method Chain connection_aborted
 * @method Chain connection_status
 * @method Chain ignore_user_abort
 * @method Chain parse_ini_file
 * @method Chain parse_ini_string
 * @method Chain is_uploaded_file
 * @method Chain move_uploaded_file
 * @method Chain gethostbyaddr
 * @method Chain gethostbyname
 * @method Chain gethostbynamel
 * @method Chain gethostname
 * @method Chain dns_check_record
 * @method Chain checkdnsrr
 * @method Chain dns_get_mx
 * @method Chain getmxrr
 * @method Chain dns_get_record
 * @method Chain intval
 * @method Chain floatval
 * @method Chain doubleval
 * @method Chain strval
 * @method Chain gettype
 * @method Chain settype
 * @method Chain is_null
 * @method Chain is_resource
 * @method Chain is_bool
 * @method Chain is_long
 * @method Chain is_float
 * @method Chain is_int
 * @method Chain is_integer
 * @method Chain is_double
 * @method Chain is_real
 * @method Chain is_numeric
 * @method Chain is_string
 * @method Chain is_array
 * @method Chain is_object
 * @method Chain is_scalar
 * @method Chain is_callable
 * @method Chain pclose
 * @method Chain popen
 * @method Chain readfile
 * @method Chain rewind
 * @method Chain rmdir
 * @method Chain umask
 * @method Chain fclose
 * @method Chain feof
 * @method Chain fgetc
 * @method Chain fgets
 * @method Chain fgetss
 * @method Chain fread
 * @method Chain fopen
 * @method Chain fpassthru
 * @method Chain ftruncate
 * @method Chain fstat
 * @method Chain fseek
 * @method Chain ftell
 * @method Chain fflush
 * @method Chain fwrite
 * @method Chain fputs
 * @method Chain mkdir
 * @method Chain rename
 * @method Chain copy
 * @method Chain tempnam
 * @method Chain tmpfile
 * @method Chain file
 * @method Chain file_get_contents
 * @method Chain file_put_contents
 * @method Chain stream_select
 * @method Chain stream_context_create
 * @method Chain stream_context_set_params
 * @method Chain stream_context_get_params
 * @method Chain stream_context_set_option
 * @method Chain stream_context_get_options
 * @method Chain stream_context_get_default
 * @method Chain stream_context_set_default
 * @method Chain stream_filter_prepend
 * @method Chain stream_filter_append
 * @method Chain stream_filter_remove
 * @method Chain stream_socket_client
 * @method Chain stream_socket_server
 * @method Chain stream_socket_accept
 * @method Chain stream_socket_get_name
 * @method Chain stream_socket_recvfrom
 * @method Chain stream_socket_sendto
 * @method Chain stream_socket_enable_crypto
 * @method Chain stream_socket_shutdown
 * @method Chain stream_socket_pair
 * @method Chain stream_copy_to_stream
 * @method Chain stream_get_contents
 * @method Chain stream_supports_lock
 * @method Chain fgetcsv
 * @method Chain fputcsv
 * @method Chain flock
 * @method Chain get_meta_tags
 * @method Chain stream_set_read_buffer
 * @method Chain stream_set_write_buffer
 * @method Chain set_file_buffer
 * @method Chain set_socket_blocking
 * @method Chain stream_set_blocking
 * @method Chain socket_set_blocking
 * @method Chain stream_get_meta_data
 * @method Chain stream_get_line
 * @method Chain stream_wrapper_register
 * @method Chain stream_register_wrapper
 * @method Chain stream_wrapper_unregister
 * @method Chain stream_wrapper_restore
 * @method Chain stream_get_wrappers
 * @method Chain stream_get_transports
 * @method Chain stream_resolve_include_path
 * @method Chain stream_is_local
 * @method Chain get_headers
 * @method Chain stream_set_timeout
 * @method Chain socket_set_timeout
 * @method Chain socket_get_status
 * @method Chain realpath
 * @method Chain fnmatch
 * @method Chain fsockopen
 * @method Chain pfsockopen
 * @method Chain pack
 * @method Chain unpack
 * @method Chain get_browser
 * @method Chain crypt
 * @method Chain opendir
 * @method Chain closedir
 * @method Chain chdir
 * @method Chain getcwd
 * @method Chain rewinddir
 * @method Chain readdir
 * @method Chain dir
 * @method Chain scandir
 * @method Chain glob
 * @method Chain fileatime
 * @method Chain filectime
 * @method Chain filegroup
 * @method Chain fileinode
 * @method Chain filemtime
 * @method Chain fileowner
 * @method Chain fileperms
 * @method Chain filesize
 * @method Chain filetype
 * @method Chain file_exists
 * @method Chain is_writable
 * @method Chain is_writeable
 * @method Chain is_readable
 * @method Chain is_executable
 * @method Chain is_file
 * @method Chain is_dir
 * @method Chain is_link
 * @method Chain stat
 * @method Chain lstat
 * @method Chain chown
 * @method Chain chgrp
 * @method Chain lchown
 * @method Chain lchgrp
 * @method Chain chmod
 * @method Chain touch
 * @method Chain clearstatcache
 * @method Chain disk_total_space
 * @method Chain disk_free_space
 * @method Chain diskfreespace
 * @method Chain realpath_cache_size
 * @method Chain realpath_cache_get
 * @method Chain mail
 * @method Chain ezmlm_hash
 * @method Chain openlog
 * @method Chain syslog
 * @method Chain closelog
 * @method Chain define_syslog_variables
 * @method Chain lcg_value
 * @method Chain metaphone
 * @method Chain ob_start
 * @method Chain ob_flush
 * @method Chain ob_clean
 * @method Chain ob_end_flush
 * @method Chain ob_end_clean
 * @method Chain ob_get_flush
 * @method Chain ob_get_clean
 * @method Chain ob_get_length
 * @method Chain ob_get_level
 * @method Chain ob_get_status
 * @method Chain ob_get_contents
 * @method Chain ob_implicit_flush
 * @method Chain ob_list_handlers
 * @method Chain ksort
 * @method Chain krsort
 * @method Chain natsort
 * @method Chain natcasesort
 * @method Chain asort
 * @method Chain arsort
 * @method Chain sort
 * @method Chain rsort
 * @method Chain usort
 * @method Chain uasort
 * @method Chain uksort
 * @method Chain shuffle
 * @method Chain array_walk
 * @method Chain array_walk_recursive
 * @method Chain count
 * @method Chain end
 * @method Chain prev
 * @method Chain next
 * @method Chain reset
 * @method Chain current
 * @method Chain key
 * @method Chain min
 * @method Chain max
 * @method Chain in_array
 * @method Chain array_search
 * @method Chain extract
 * @method Chain compact
 * @method Chain array_fill
 * @method Chain array_fill_keys
 * @method Chain range
 * @method Chain array_multisort
 * @method Chain array_push
 * @method Chain array_pop
 * @method Chain array_shift
 * @method Chain array_unshift
 * @method Chain array_splice
 * @method Chain array_slice
 * @method Chain array_merge
 * @method Chain array_merge_recursive
 * @method Chain array_replace
 * @method Chain array_replace_recursive
 * @method Chain array_keys
 * @method Chain array_values
 * @method Chain array_count_values
 * @method Chain array_reverse
 * @method Chain array_reduce
 * @method Chain array_pad
 * @method Chain array_flip
 * @method Chain array_change_key_case
 * @method Chain array_rand
 * @method Chain array_unique
 * @method Chain array_intersect
 * @method Chain array_intersect_key
 * @method Chain array_intersect_ukey
 * @method Chain array_uintersect
 * @method Chain array_intersect_assoc
 * @method Chain array_uintersect_assoc
 * @method Chain array_intersect_uassoc
 * @method Chain array_uintersect_uassoc
 * @method Chain array_diff
 * @method Chain array_diff_key
 * @method Chain array_diff_ukey
 * @method Chain array_udiff
 * @method Chain array_diff_assoc
 * @method Chain array_udiff_assoc
 * @method Chain array_diff_uassoc
 * @method Chain array_udiff_uassoc
 * @method Chain array_sum
 * @method Chain array_product
 * @method Chain array_filter
 * @method Chain array_map
 * @method Chain array_chunk
 * @method Chain array_combine
 * @method Chain array_key_exists
 * @method Chain pos
 * @method Chain sizeof
 * @method Chain key_exists
 * @method Chain assert
 * @method Chain assert_options
 * @method Chain version_compare
 * @method Chain ftok
 * @method Chain str_rot13
 * @method Chain stream_get_filters
 * @method Chain stream_filter_register
 * @method Chain stream_bucket_make_writeable
 * @method Chain stream_bucket_prepend
 * @method Chain stream_bucket_append
 * @method Chain stream_bucket_new
 * @method Chain output_add_rewrite_var
 * @method Chain output_reset_rewrite_vars
 * @method Chain sys_get_temp_dir
 * @method Chain msg_get_queue
 * @method Chain msg_send
 * @method Chain msg_receive
 * @method Chain msg_remove_queue
 * @method Chain msg_stat_queue
 * @method Chain msg_set_queue
 * @method Chain msg_queue_exists
 * @method Chain sem_get
 * @method Chain sem_acquire
 * @method Chain sem_release
 * @method Chain sem_remove
 * @method Chain shm_attach
 * @method Chain shm_remove
 * @method Chain shm_detach
 * @method Chain shm_put_var
 * @method Chain shm_has_var
 * @method Chain shm_get_var
 * @method Chain shm_remove_var
 * @method Chain tidy_getopt
 * @method Chain tidy_parse_string
 * @method Chain tidy_parse_file
 * @method Chain tidy_get_output
 * @method Chain tidy_get_error_buffer
 * @method Chain tidy_clean_repair
 * @method Chain tidy_repair_string
 * @method Chain tidy_repair_file
 * @method Chain tidy_diagnose
 * @method Chain tidy_get_release
 * @method Chain tidy_get_config
 * @method Chain tidy_get_status
 * @method Chain tidy_get_html_ver
 * @method Chain tidy_is_xhtml
 * @method Chain tidy_is_xml
 * @method Chain tidy_error_count
 * @method Chain tidy_warning_count
 * @method Chain tidy_access_count
 * @method Chain tidy_config_count
 * @method Chain tidy_get_opt_doc
 * @method Chain tidy_get_root
 * @method Chain tidy_get_head
 * @method Chain tidy_get_html
 * @method Chain tidy_get_body
 * @method Chain ob_tidyhandler
 * @method Chain token_get_all
 * @method Chain token_name
 * @method Chain wddx_serialize_value
 * @method Chain wddx_serialize_vars
 * @method Chain wddx_packet_start
 * @method Chain wddx_packet_end
 * @method Chain wddx_add_vars
 * @method Chain wddx_deserialize
 * @method Chain xml_parser_create
 * @method Chain xml_parser_create_ns
 * @method Chain xml_set_object
 * @method Chain xml_set_element_handler
 * @method Chain xml_set_character_data_handler
 * @method Chain xml_set_processing_instruction_handler
 * @method Chain xml_set_default_handler
 * @method Chain xml_set_unparsed_entity_decl_handler
 * @method Chain xml_set_notation_decl_handler
 * @method Chain xml_set_external_entity_ref_handler
 * @method Chain xml_set_start_namespace_decl_handler
 * @method Chain xml_set_end_namespace_decl_handler
 * @method Chain xml_parse
 * @method Chain xml_parse_into_struct
 * @method Chain xml_get_error_code
 * @method Chain xml_error_string
 * @method Chain xml_get_current_line_number
 * @method Chain xml_get_current_column_number
 * @method Chain xml_get_current_byte_index
 * @method Chain xml_parser_free
 * @method Chain xml_parser_set_option
 * @method Chain xml_parser_get_option
 * @method Chain utf8_encode
 * @method Chain utf8_decode
 * @method Chain xmlrpc_encode
 * @method Chain xmlrpc_decode
 * @method Chain xmlrpc_decode_request
 * @method Chain xmlrpc_encode_request
 * @method Chain xmlrpc_get_type
 * @method Chain xmlrpc_set_type
 * @method Chain xmlrpc_is_fault
 * @method Chain xmlrpc_server_create
 * @method Chain xmlrpc_server_destroy
 * @method Chain xmlrpc_server_register_method
 * @method Chain xmlrpc_server_call_method
 * @method Chain xmlrpc_parse_method_descriptions
 * @method Chain xmlrpc_server_add_introspection_data
 * @method Chain xmlrpc_server_register_introspection_callback
 * @method Chain xmlwriter_open_uri
 * @method Chain xmlwriter_open_memory
 * @method Chain xmlwriter_set_indent
 * @method Chain xmlwriter_set_indent_string
 * @method Chain xmlwriter_start_comment
 * @method Chain xmlwriter_end_comment
 * @method Chain xmlwriter_start_attribute
 * @method Chain xmlwriter_end_attribute
 * @method Chain xmlwriter_write_attribute
 * @method Chain xmlwriter_start_attribute_ns
 * @method Chain xmlwriter_write_attribute_ns
 * @method Chain xmlwriter_start_element
 * @method Chain xmlwriter_end_element
 * @method Chain xmlwriter_full_end_element
 * @method Chain xmlwriter_start_element_ns
 * @method Chain xmlwriter_write_element
 * @method Chain xmlwriter_write_element_ns
 * @method Chain xmlwriter_start_pi
 * @method Chain xmlwriter_end_pi
 * @method Chain xmlwriter_write_pi
 * @method Chain xmlwriter_start_cdata
 * @method Chain xmlwriter_end_cdata
 * @method Chain xmlwriter_write_cdata
 * @method Chain xmlwriter_text
 * @method Chain xmlwriter_write_raw
 * @method Chain xmlwriter_start_document
 * @method Chain xmlwriter_end_document
 * @method Chain xmlwriter_write_comment
 * @method Chain xmlwriter_start_dtd
 * @method Chain xmlwriter_end_dtd
 * @method Chain xmlwriter_write_dtd
 * @method Chain xmlwriter_start_dtd_element
 * @method Chain xmlwriter_end_dtd_element
 * @method Chain xmlwriter_write_dtd_element
 * @method Chain xmlwriter_start_dtd_attlist
 * @method Chain xmlwriter_end_dtd_attlist
 * @method Chain xmlwriter_write_dtd_attlist
 * @method Chain xmlwriter_start_dtd_entity
 * @method Chain xmlwriter_end_dtd_entity
 * @method Chain xmlwriter_write_dtd_entity
 * @method Chain xmlwriter_output_memory
 * @method Chain xmlwriter_flush
 * @method Chain zip_open
 * @method Chain zip_close
 * @method Chain zip_read
 * @method Chain zip_entry_open
 * @method Chain zip_entry_close
 * @method Chain zip_entry_read
 * @method Chain zip_entry_filesize
 * @method Chain zip_entry_name
 * @method Chain zip_entry_compressedsize
 * @method Chain zip_entry_compressionmethod
 * @method Chain dl
 */
class Chain
{
    /**
     * This is internal placeholder of the chaining value
     * @var
     */
    protected $chainValue;

    /**
     * This is the internal placeholder of the returned value of the last function call
     * @var
     */
    protected $returnValue;

    /**
     * @param $value
     */
    public function __construct($chainValue, $returnValue = null)
    {
        $this->chainValue = $chainValue;
        $this->returnValue = is_null($returnValue) ? $chainValue : $returnValue;
    }

    /**
     * use the returned value of the last function call to continue the chain
     * @return Chain
     */
    public function withReturned()
    {
        $this->chainValue = $this->returnValue;
        return $this;
    }

    /**
     * @param $obj
     * @return Chain
     */
    public static function with($obj)
    {
        return new Chain($obj);
    }

    /**
     * This returns the final result;
     *
     * One can also use strVal, intval, floatval, doubleval to get the result value
     *
     * @return mixed
     */
    public function chainVal()
    {
        return $this->chainValue;
    }


    /**
     * get function to allow optionally ignoring the parentheses
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->$name();
    }


    protected $ifs = array();

    /**
     * If
     * @param  $flag
     * @return Chain
     */
    private function chainIf( $flag)
    {
        array_unshift($this->ifs, $flag == true);
        return $this;
    }

    /**
     * Else
     * @return Chain
     */
    public function chainElse()
    {
        $this->ifs[0] = !$this->ifs[0];
        return $this;
    }

    /**
     * End if
     * @return Chain
     */
    public function chainEndIf()
    {
        array_shift($this->ifs);
        return $this;
    }

    /**
     * Test chain value
     * @param $operator
     * @param $value
     * @return Chain
     */
    public function ifChainValue($operator, $value)
    {
        return $this->chainIf($this->_compare($this->chainValue, $operator, $value));
    }

    /**
     * Test returned value
     * @param $operator
     * @param $value
     * @return Chain
     */
    public function ifReturnedValue($operator, $value){

        return $this->chainIf($this->_compare($this->returnValue, $operator, $value));
    }


    private function _compare($a, $operator, $b)
    {
        $operators = array('>', '==', '<', '>=', '<=', '===', '!=', '!==');

        if (in_array($operator, $operators)) {
            $func = create_function('$a,$b', "return \$a $operator \$b;");
            $result = $func($a, $b);
        } else {
            throw new Exception ("Operator $operator is not supported, use '>','==','<','>=','<=','===', '!=' or '!=='.");
        }
        return $result;
    }


    /**
     * Execute the function
     *
     * @param $name
     * @param $args
     * @return Chain
     * @throws Exception
     */
    public function __call($name, $args)
    {

        if (count($this->ifs) > 0 && !$this->ifs[0]) {
            return $this;
        }

        //work out the inserting point
        if (preg_match('/(\d+)$/', $name, $match)) { //insertion point is specified as postfix of the function name

            $insertPoint = intval($match[0]);
            $name = rtrim($name, $match[0]);
        } else { // if caller did not specify
            $insertPoint = -1;
        }



        //validate that the function exists
        if (!function_exists($name)) {
            throw new Exception("ERR: Function $name dose not exist !");
        }

        if ($insertPoint < 0 && (count($args) > 0 || $this->_getFunctionArgNum($name) > 0)) { //caller did not say it
            $insertPoint = 1;
        }

        if ($insertPoint > 0) { //use parameter
            $finalArgs = array();

            $loops = max($insertPoint, count($args));

            for ($i = 1; $i <= $loops; $i++) {
                if ($i == $insertPoint) {
                    $finalArgs[] = & $this->chainValue;
                }
                if (isset($args[$i-1])) {
                    $finalArgs[] =  & $args[$i-1];
                } else if ($i < $insertPoint) {
                    $finalArgs[] = null;
                }
            }

        } else { //caller said do not use $this->chainValue
            $finalArgs = & $args;
        }

        $this->returnValue = call_user_func_array($name, $finalArgs);
        //set the internal value placeholders
        if ($insertPoint > 0) {
            $p = new ReflectionParameter($name, $insertPoint - 1);
            if (!$p->isPassedByReference()) {
                $this->chainValue = $this->returnValue;
            }
        } else {
            $this->chainValue = $this->returnValue;
        }


        return $this;
    }

    private function _getFunctionArgNum($function_name)
    {
        $func_reflection = new ReflectionFunction($function_name);
        return $func_reflection->getNumberOfParameters();
    }

    /**
     * @param $chain
     * @return Chain
     */
    public function chainClone(&$chain)
    {
        $chain = new Chain($this->chainValue, $this->returnValue);
        return $this;
    }

}


//Chain::with(array(1,2,3))->array_pop()->ifReturnedValue('==',3)->array_pop->chainEndIf->print_r;
//Chain::with('abcdeft')->strpos('d')->ifReturnedValue('==', 4)->print_r0('hello')->chainElse->print_r0('world')->chainEndIf;
//echo Chain::with(' ok ')->trim()->strtoupper()->chainVal;