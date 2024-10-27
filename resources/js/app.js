import "./bootstrap";

//when compress build will cause logo or pic cannot locate, below is the solution
import.meta.glob([
    "../images/**", //grab everthing in image file
]);
