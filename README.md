Lab Exercises

Week 4 (11/19):  Web Service Basics Lecture

Build a frontend and middle layer.  Two groups in each section.  

Group one builds a web form asking for zip code which submits to a middle-layer service.  Group two builds a middle layer service that accepts zip code as input and calls two source data locations for information.  Data is returned as a JSON array to frontend.

Source data provided in pipe delimited format:
1)  Current weather conditions based on zip  (hardcode stpt, msp, ord)
2)  Current weather forecast based on zip (hardcode stpt, msp, ord)

File:  wx-ws.php is a feature complete backend, minus sanitization of $_POST (reserved for week 5) and output error checking (week 6).

Group one frontend builds some HTML based on returned data.

Week 5:  Security

Group one builds middle-layer web service for authentication, returning success or failure, JSON-formatted, to frontend.

Group two builds a frontend for username/password and carries session to the "zip code screen" built in previous week.  Group two will call an authentication web service created by group one.

Week 6:  Error Handling and Gitflow

Group two builds an authorization service returns an authorization token and revises the authentication service to return the token.  Group two builds a web service that checks the auth token for validity, returning valid or invalid.

Group one changes the authentication frontend to carry the token and then modifies the zip code input to call the authorization web service prior to making the call.

Both groups add error handling to middle and frontend to account for security and HTTP-level errors.

Move Git through pipeline and promote to main linux server(?)


