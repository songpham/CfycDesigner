var express = require('express'),
    app = express();
var monk = require('monk');
var swChars = monk('localhost:27017/starwars').get('character');
var db = monk('localhost:27017/starwars');
var swChars = db.get('character');
app.use('/', express.static(__dirname + '/'));
app.get('/', function(req, res) {
    res.sendFile(path.join(__dirname + "/index.html"));
});
app.listen(3000, function() {
    console.log("Server ready. Listening on port 3000");
});
app.get('/character', function (req, res) {
  swChars.find({}, function (err, docs) {
    if (err == null) {
      res.json(docs);
    } else {
      console.log(err);
    }
  });
});
app.get('/jedi', function (req, res) {
  swChars.find({side: "Light"}, function (err, docs) {
    if (err == null) {
      res.json(docs);
    } else {
      console.log(err);
    }
  });
});