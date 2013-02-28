<?php
/*
Plugin Name:Events
Plugin URI: http://editflow.org/
Description:an test plugin 
Author:tedi3231
Version: 0.1
Author URI: http://www.wedoapp.com/

Copyright 2009-2012 Mohammad Jangda, Daniel Bachhuber, et al.

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/
add_action('init','prowp_register_my_event');

function prowp_register_my_event(){
        register_post_type('Events',array(
                'public'=>true,
                'has_archive'=>true,
                'supports'=>array('author','title','editor','revisions','customer-fields'),
                'labels'=>array(
                        'name'=>'事件列表'
                )
            ));
}
?>
