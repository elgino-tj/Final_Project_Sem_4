import express from "express";
import mongoose from "mongoose";
import dotenv from "dotenv";

const app = express();
dotenv.config();

const PORT = process.env.PORT || 7000;
const MONGOURL = process.env.MONGOURL;

// Define the Mongoose schema
const sculptureSchema = new mongoose.Schema({
  Scultpure: String,
  Artist: String,
  Year: String,
  Image: String,
  Description: String,
});

// Create a Mongoose model for the "Sculpture" collection
const Sculpture = mongoose.model('Sculpture', sculptureSchema);

// Connect to MongoDB and start the server
mongoose.connect(MONGOURL, { useNewUrlParser: true, useUnifiedTopology: true })
  .then(() => {
    console.log("Database is connected successfully.");

    // Define the route to retrieve sculpture data
    app.get('/sculpture', async (req, res) => {
        try {
          const data = await Sculpture.find();
          console.log(data); // Log the retrieved data
          res.json(data);
        } catch (err) {
          console.error("Error fetching sculpture data:", err); // Log the error
          res.status(500).json({ message: "Internal server error" }); // Send an error response
        }
      });      
      
    // Start the server
    app.listen(PORT, () => {
      console.log(`Server is running on port ${PORT}`);
    });
  })
  .catch((error) => console.error("Error connecting to database:", error));
