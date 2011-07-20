<?php

/*
** Original language file from:
**	http://community.elgg.org/pg/plugins/project/385033/developer/c4lpt/rename-groups-as-communities
**
**	If you want to create new translations of this file, skip over this code and translate just the
**	the parts after the big notice
**
*/


$languagecode = get_current_language();
$singularvar = $languagecode . 'singular';
$pluralvar = $languagecode . 'plural';

$singular = get_plugin_setting($singularvar, 'rename_groups');
$plural = get_plugin_setting($pluralvar, 'rename_groups');

// set defaults if setting can't be found
if(empty($singular)){ $singular = elgg_echo('groups:group'); }
if(empty($plural)){ $plural = elgg_echo('groups'); }

// get first letter of each, and register variables for starting with uppercase and lowercase first letter
// $usingle = uppercase singluar eg. Group
// $lsingle = lowercase singluar eg. group
// $uplural = uppercase plural eg. Groups
// $lplural = lowercase plural eg. groups

$lsingle = strtolower($singular);
$lplural = strtolower($plural);

//create our uppercase singular
$first_letter = strtoupper($singular[0]);
$rest_of_word = substr($singular, 1);

$usingle = $first_letter . $rest_of_word;

//create our uppercase plural
$first_letter = strtoupper($plural[0]);
$rest_of_word = substr($plural, 1);

$uplural = $first_letter . $rest_of_word;


/*	****************************************************************************
 * 
 * 				BEGIN TRANSLATIONS BELOW
 * 
 * 	****************************************************************************
 */	

$english = array(

	/*
	 * 	Blog plugin
	 */
	'groups:enableblog' => 'Enable ' . $lsingle . ' blog',
	'blog:enableblog' => 'Enable ' . $lsingle . ' blog',
	'blog:group' => $usingle . ' blog',
	 'blog:nogroup' => 'This ' . $lsingle . ' does not have any blog posts yet',

	/*
	** bookmarks plugin
	*/
	'bookmarks:bookmarklet:group' => "Get " . $lsingle . " bookmarklet",
	'bookmarks:group' => $usingle . ' bookmarks',
	'bookmarks:enablebookmarks' => 'Enable ' . $lsingle . ' bookmarks',
	'groups:enablebookmarks' => 'Enable ' . $lsingle . ' bookmarks',
	'bookmarks:nogroup' => 'This ' . $lsingle . ' does not have any bookmarks yet',

	/*
	 * 	Custom Index plugin
	 */
	'custom:groups' => "Latest " . $lplural,
	'custom:nogroups' => "There are no " . $lplural . " yet",

	/*
	** event_calendar plugin
	*/
	'event_calendar:group' => $usingle . " calendar",
	'event_calendar:settings:group_profile_display:title' => $usingle . " calendar profile display (if community calendars are enabled)",
	'event_calendar:settings:autogroup:title' => "Automatically add " . $lsingle . " events for all members to their personal calendars.",
	'event_calendar:settings:group_calendar:title' => $usingle . " calendars",
	'event_calendar:settings:group_calendar:admin' => "yes, only admins and " . $lsingle . " owners can post events",
	'event_calendar:settings:group_calendar:members' => "yes, any " . $lsingle . " member can post an event",
	'event_calendar:settings:group_default:title' => "New " . $lplural . " should by default have a community calendar (if " . $lsingle . " calendars are enabled)",
	'event_calendar:settings:group_default:no' => "no (but admins or " . $lsingle . " owners can turn a " . $lsingle . " calendar on if desired)",
	'event_calendar:settings:group_default:yes' => "yes (but admins or " . $lsingle . " owners can turn a " . $lsingle . " calendar off if desired)",
	'event_calendar:settings:group_always_display:title' => "If " . $lsingle . " calendar is enabled, always display it (even if empty)",
	'event_calendar:enable_event_calendar' => "Enable " . $lsingle . " event calendar",
	'event_calendar:add_to_group:remove_group_title' => "Remove this event from " . $lsingle,
	'event_calendar:add_to_group:remove_group_button' => "Remove from " . $lsingle,
	'event_calendar:remove_from_group:success' => "Event removed from " . $lsingle . " calendar",
	'event_calendar:add_to_group:add_group_title' => "Add this event to " . $lsingle,
	'event_calendar:add_to_group:add_group_button' => "Add to " . $lsingle,
	'event_calendar:add_to_group:success' => "Event added to " . $lsingle . " calendar",
	'event_calendar:settings:add_to_group_calendar:title' => "Allow " . $lsingle . " admins to add any existing event to a group calendar",

	/*
	** file plugin
	*/
	'file:group' => $usingle . " files",
	'file:nogroup' => 'This ' . $lsingle . ' does not have any files yet',

	/*
	** group_contact_list plugin
	*/
	'groupclist:title' => $usingle . ' Contact List',
	'groupclist:title_users' => $usingle . ' Contact List: select/unselect community users',
	'groupclist:totalpages' => 'Total ' . $uplural . ':',
	'groupclist:delete:yes' => $usingle . ' deleted',
	'groupclist:delete:no' => 'Error: ' . $usingle . ' not deleted',
	'groupclist:addmember:yes' => 'All selected users are now ' . $lsingle . ' members',
	'groupclist:addmember:no' => 'Error adding user to ' . $lsingle,

	/*
	** groups plugin
	*/
	'groups' => $uplural,
	'groups:owned' => $uplural . " you own",
	'groups:yours' => "Your " . $lplural,
	'groups:user' => "%s's " . $lplural,
	'groups:all' => "All site " . $lplural,
	'groups:new' => "Create a new " . $lsingle,
	'groups:edit' => "Edit " . $lsingle,
	'groups:delete' => 'Delete ' . $lsingle,
	'groups:icon' => $usingle . ' icon (leave blank to leave unchanged)',
	'groups:name' => $usingle . ' name',
	'groups:username' => $usingle . ' short name (displayed in URLs, alphanumeric characters only)',
	'groups:members' => $usingle . ' members',
	'groups:membership' => $usingle . " membership permissions",
	'groups:widget:num_display' => 'Number of ' . $lplural . ' to display',
	'groups:widget:membership' => $usingle . ' membership',
	'groups:widgets:description' => 'Display the ' . $lplural . ' you are a member of on your profile',
	'groups:noaccess' => 'No access to ' . $lsingle,
	'groups:cantedit' => 'You can not edit this ' . $lsingle,
	'groups:saved' => $usingle . ' saved',
	'groups:featured' => 'Featured ' . $lplural,
	'groups:featuredon' => 'You have made this ' . $lsingle . ' a featured one.',
	'groups:unfeature' => 'You have removed this ' . $lsingle . ' from the featured list',
	'groups:join' => 'Join ' . $lsingle,
	'groups:leave' => 'Leave ' . $lsingle,
	'groups:nofriends' => "You have no friends left who have not been invited to this " . $lsingle,
	'groups:viagroups' => "via " . $lplural,
	'groups:group' => $usingle,
	'groups:notfound' => $usingle . " not found",
	'groups:notfound:details' => "The requested " . $lsingle . " either does not exist or you do not have access to it",
	'groups:count' => $lplural . " created",
	'groups:open' => "open " . $lsingle,
	'groups:closed' => "closed " . $lsingle,
	'groups:searchtag' => "Search for " . $lplural . " by tag",
	'groups:closedgroup' => 'This ' . $lsingle . ' has a closed membership. To ask to be added, click the "request membership" menu link.',
	'groups:visibility' => 'Who can see this ' . $lsingle . '?',
	'groups:enablepages' => 'Enable ' . $lsingle . ' pages',
	'groups:enableforum' => 'Enable ' . $lsingle . ' discussion',
	'groups:enablefiles' => 'Enable ' . $lsingle . ' files',
	'groups:pages' => $usingle . ' pages',
	'groups:files' => $usingle . ' files',
	'groups:forum' => $usingle . ' discussion',
	'grouptopic:error' => 'Your ' . $lsingle . ' topic could not be created. Please try again or contact a system administrator.',
	'groups:privategroup' => 'This ' . $lsingle . ' is private, requesting membership.',
	'groups:notitle' => $uplural . ' must have a title',
	'groups:cantjoin' => 'Can not join ' . $lsingle,
	'groups:cantleave' => 'Could not leave ' . $lsingle,
	'groups:addedtogroup' => 'Successfully added the user to the ' . $lsingle,
	'groups:joinrequestmade' => 'Request to join ' . $lsingle . ' successfully made',
	'groups:joined' => 'Successfully joined ' . $lsingle . '!',
	'groups:left' => 'Successfully left ' . $lsingle,
	'groups:notowner' => 'Sorry, you are not the owner of this ' . $lsingle,
	'groups:alreadymember' => 'You are already a member of this ' . $lsingle . '!',
	'groups:invite:body' => "Hi %s,

You have been invited to join the '%s' " . $lsingle . ", click below to confirm:

%s",

	'groups:welcome:subject' => "Welcome to the %s " . $lsingle . "!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' " . $lsingle . "! Click below to begin posting!

%s",

	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' " . $lsingle . ", click below to view their profile:

%s

or click below to confirm request:

%s",

	'groups:nowidgets' => 'No widgets have been defined for this ' . $lsingle,
	'groups:widgets:members:title' => $usingle . ' members',
	'groups:widgets:members:description' => 'List the members of a ' . $lsingle,
	'groups:widgets:members:label:displaynum' => 'List the members of a ' . $lsingle,
	'groups:widgets:entities:title' => "Objects in " . $lsingle,
	'groups:widgets:entities:description' => "List the objects saved in this " . $lsingle,
	'groups:widgets:entities:label:displaynum' => 'List the objects of a ' . $lsingle,
	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) ' . $lsingle . '?',
	'group:deleted' => $usingle . ' and ' . $lsingle . ' contents deleted',
	'group:notdeleted' => $usingle . ' could not be deleted',
	'grouppost:deleted' => $usingle . ' posting successfully deleted',
	'grouppost:notdeleted' => $usingle . ' posting could not be deleted',
	'groups:deletewarning' => "Are you sure you want to delete this " . $lsingle . "? There is no undo!",
	'group' => $usingle, 
	'item:group' => $uplural,
	'groups:searchtitle' => "Searching for " . $lplural . ": %s",
	'group:search:startblurb' => $uplural . " matching '%s':",
	'groups:invitations' => $usingle . ' invitations',

	/*
	 * Group Custom Layout plugin
	 */
	'group_custom_layout' => $usingle . " Custom Layout",
	'item:object:group_widget' => $usingle . " Widget",
	'item:object:custom_layout' => $usingle . " Custom Layout",
	'group_custom_layout:edit' => "Edit " . $usingle . " Layout",
	'group_custom_layout:edit:title' => "Edit " . $usingle . " Layout",
	'group_custom_layout:edit:reset:confirm' => "Are you sure you wish to reset the custom " . $lsingle . " layout?",
	'group_custom_layout:action:reset:error:no_custom' => "This " . $lsingle . " doesn't have a Custom Layout to remove",
	'group_custom_layout:action:save:error:add_to_group' => "Error while adding Custom Layout to " . $lsingle,
	'group_custom_layout:action:save:error:no_widget' => "No " . $usingle . " Widget for id: %s",
	'group_custom_layout:action:save:error:widget_save' => "Error while saving " . $usingle . " Widget: %s",


	/*
	** notifications plugin
	*/
	'notifications:subscriptions:changesettings:groups' => $usingle . ' notifications',
	'notifications:subscriptions:groups:description' => 'To receive notifications when new content is added to a ' . $lsingle . ' you are a member of, find it below and select the notification method you would like to use.',

	/*
	** pages plugin
	*/
	'pages:group' => $usingle . ' pages',
	'pages:groupprofile' => $usingle . ' pages',
	'pages:nogroup' => 'This ' . $lsingle . ' does not have any pages yet',

	/*
	 * Polls plugin
	 */
	'polls:group_polls' => $usingle . " polls",
	'polls:settings:group:title' => $usingle . " polls",
	'polls:settings:group_profile_display:title' => "If " . $lsingle . " polls are activated, where should polls content be displayed in " . $lsingle . " profiles?",
	'polls:settings:group_access:title' => "If " . $lsingle . " polls are activated, who gets to create polls?",
	'polls:settings:group_access:admins' => $lsingle . " owners and admins only",
	'polls:settings:group_access:members' => "any " . $lsingle . " member",
	'poll_individual_group:widget:description' => "Display the latest poll for this " . $lsingle . ".",

	/*
	 * 	Tidypics plugin
	 */
	'album:group' => $usingle . " albums",
	'tidypics:enablephotos' => 'Enable ' . $lsingle . ' photo albums',
	'tidypics:nophotosingroup' => 'This ' . $lsingle . ' does not have any photos yet',
	'tidypics:settings:grp_perm_override' => "Allow ' . $lsingle . ' members full access to ' . $lsingle . ' albums",
	'tidypics:settings:quota' => "User/" . $usingle . " Quota (MB) - 0 equals no quota",
	'tidypics:settings:heading:groups' => $usingle . " Settings",
	'album:river:group' => "in the " . $lsingle,

	/*
	** vazco_groupmailer plugin
	*/
	'vazco_groupmailer:send' => 'Send ' . $lsingle . ' e-mail',
	'vazco_groupmailer:send:menu' => 'Send ' . $lsingle . ' e-mail',
	'vazco_groupmailer:nogroup' => 'No ' . $lsingle . ' was chosen',
	'vazco_groupmailer:norights' => 'You have no rights to send mass e-mail to this ' . $lsingle,
	'vazco_groupmailer:description' => 'This form allows you to send e-mails to all the ' . $lsingle . ' members.<br/>
<br/>You can use the following special markers:<br/>
{$message_receiver} - the receiver of the message',
	'phpmailer:template:settings' => 'Set template for the messages sent to ' . $lplural . '. You can use the following markers:<br/><br/>
{$message_body} - the context of the message<br/>
{$message_title} - the title of the message<br/>
{$message_sender} - the name of the sender of the message<br/>
{$message_receiver} - the name of the receiver of the message',

	/*
	** vazco_mainpage plugin
	*/
	'custom:groups' => 'Latest ' . $lplural,
	'custom:featuredgroups' => 'Featured ' . $lplural,
	'custom:groupicons' => 'Latest ' . $lplural . ' (icons)',
	'custom:groups:desc' => 'Shows latest ' . $lplural,
	'custom:featuredgroups:desc' => 'Displays featured ' . $lplural,
	'custom:groupicons:desc' => 'Displays latest ' . $lplural . ' as icons. Displays only communities that have icons.',

	//
	//	rename_groups language mappings
	//
	'rename_groups:language' => "Language",
	'rename_groups:missing:language:file' => "Langauge file appears to be missing.  Check that it exists and that the languages directory has read access.",
	'rename_groups:plural' => "Plural",
	'rename_groups:settings' => "Rename Groups for each language",
	'rename_groups:singular' => "Singular",
	
);

add_translation("en", $english);

?>
