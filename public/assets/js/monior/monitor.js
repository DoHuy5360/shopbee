import { SWITCHTAB } from "../module/class/switch_tab.js";

var manage_marketing = new SWITCHTAB("manage-marketing");
manage_marketing.implement();

var manage_activity = new SWITCHTAB("manage-activity");
manage_activity.implement();
manage_activity.setArrow();
manage_activity.setTransformLeftRight();
