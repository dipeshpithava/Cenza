<?php
    //Function Create Table
    function create_database()
    {
         // require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
         
         // $query="CREATE TABLE IF NOT EXISTS Friend_List(
         //        FriendsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         //        FriendsName VARCHAR(40),
         //        FriendsMobile VARCHAR(10),
         //        City VARCHAR(20),
         //        State VARCHAR(20),
         //        Country VARCHAR(20)
         //     )ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci;";
         
         // dbDelta($query);   //This function use to create table
    }
    function add_menu()
    {
         //Add Menu Page To Admin Site
         add_menu_page( 'Home Leads Page', 'Home Leads', 'manage_options', 'home-leads', 'fun_operations' );
         add_menu_page( 'Contact Form Leads Page', 'Contact Form Leads', 'manage_options', 'contact-form-leads', 'fun_operations2' );
         /*
          * here Argument 1 ==> Page Title
          *               2 ==> Menu Title
          *               3 ==> Capabilities (Which Use Can View This Page)
          *               4 ==> Page Slug Name
          *               5 ==> Function Name Call When Page Menu Click
          */
         
         $role = get_role( 'administrator' );       //get Role
         $role->add_cap('manage_options');      //Page Capabilities Here
    }
    
    
    //call when page menu click
    function fun_operations()
    {
        do_action("view_friends_hook");
        
        //Here do_action has two argument 1==> Hook name you can define any hook name here
                                       // 2==> Parameter you can pass paramentet as your requirement
    }

    //call when page menu click
    function fun_operations2()
    {
        do_action("view_friends_hook2");
        
        //Here do_action has two argument 1==> Hook name you can define any hook name here
                                       // 2==> Parameter you can pass paramentet as your requirement
    }
    
    
    function head_script()
    {
        ob_start();
        ?>
        <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__); ?>css/DT_bootstrap.css">
        <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__); ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__); ?>css/styles.css">
        <script src="<?php echo plugin_dir_url(__FILE__); ?>js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo plugin_dir_url(__FILE__); ?>js/jquery.dataTables.js"></script>
        <script src="<?php echo plugin_dir_url(__FILE__); ?>js/DT_bootstrap.js"></script>
        <?php
    }
    add_action('admin_head','head_script');
    
    add_action('view_friends_hook','view_friends');
    add_action('view_friends_hook2','view_friends2');
    
    function view_friends()
    {
        global $wpdb;
        ?>
        <br>
        <div style="width:97%;margin-left:17px;">
        <table id="example" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
            <?php
            $rec = $wpdb->get_results("SELECT * FROM home_form");
            ?>
                <thead>
                <tr>
                    <th align="center" scope="col">ID</th>
                    <th align="center" scope="col">Name</th>
                    <th align="center" scope="col">Email ID</th>
                    <th align="center" scope="col">Message</th>
                    <th align="center" scope="col">Date Time</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($rec as $event) 
                    {
                        ?>
                        <tr>
                            <td align="center" scope="col"><?php echo $event->id; ?></td>
                            <td align="center" scope="col"><?php echo $event->name; ?></td>
                            <td align="center" scope="col"><?php echo $event->email_id; ?></td>
                            <td align="center" scope="col"><?php echo $event->message; ?></td>
                            <td align="center" scope="col"><?php echo $event->date_time; ?></td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
        </table>
        </div>
        <?php
    }

    function view_friends2()
    {
        global $wpdb;
        ?>
        <br>
        <div style="width:97%;margin-left:17px;">
        <table id="example" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
            <?php
            $rec = $wpdb->get_results("SELECT * FROM contact_form");
            ?>
                <thead>
                <tr>
                    <th align="center" scope="col">ID</th>
                    <th align="center" scope="col">Name</th>
                    <th align="center" scope="col">Organisation</th>
                    <th align="center" scope="col">Phone</th>
                    <th align="center" scope="col">Email ID</th>
                    <th align="center" scope="col">Contact Preference</th>
                    <th align="center" scope="col">Project Details</th>
                    <th align="center" scope="col">Country</th>
                    <th align="center" scope="col">Required Information</th>
                    <th align="center" scope="col">Date Time</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($rec as $event) 
                    {
                        ?>
                        <tr>
                            <td align="center" scope="col"><?php echo $event->id; ?></td>
                            <td align="center" scope="col"><?php echo $event->name; ?></td>
                            <td align="center" scope="col"><?php echo $event->org; ?></td>
                            <td align="center" scope="col"><?php echo $event->phone; ?></td>
                            <td align="center" scope="col"><?php echo $event->email_id; ?></td>
                            <td align="center" scope="col"><?php echo $event->pref_contact; ?></td>
                            <td align="center" scope="col"><?php echo $event->project_details; ?></td>
                            <td align="center" scope="col"><?php echo $event->country; ?></td>
                            <td align="center" scope="col"><?php echo $event->req_info; ?></td>
                            <td align="center" scope="col"><?php echo $event->date_time; ?></td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
        </table>
        </div>
        <?php
    }
?>
