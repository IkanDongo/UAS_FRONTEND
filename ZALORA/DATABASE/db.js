const uri = "mongodb+srv://noel0:noel@cluster.mlrnpuu.mongodb.net/?retryWrites=true&w=majority&appName=Cluster";

const mongoose = require("mongoose");


mongoose.connect(uri)
  .then(() => {
    console.log("Successfully connected to MongoDB");
  })
  .catch((error) => {
    console.error("Error connecting to MongoDB:", error.message);
  });


const db = mongoose.connection;


db.once("open", () => {
  console.log("🔗 Database connection is open");
});