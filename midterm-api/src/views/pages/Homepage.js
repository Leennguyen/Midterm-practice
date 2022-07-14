import React, { useEffect, useState } from "react";
import { Link, useNavigate } from "react-router-dom";


import "bootstrap/dist/css/bootstrap.min.css";
import axios from "axios";

const HomePage = () => {
  const [foods, setFoods] = useState([]);

  const [search, setSearch] = useState();

  useEffect(() => {
    getFoods();
  }, []);

  const getFoods = async () => {
    await axios.get(`http://localhost:8000/api/foods`).then(({ data }) => {
      setFoods(data.data);
    });
  };
  const handleSearch = async (e) => {
    const res = await axios.get(`http://localhost:8000/api/search/${search}`);
    setFoods(res.data);
  };
  return (
    <div className="container-md">
      <Link to="/" className="me-5">Home</Link>
      <Link to="/statistics">Statistics</Link>
      {/* <div className="mb-3" style={{ width: 600 }}>
        <InputGroup className="mb-10">
          <Form.Control
            placeholder="Enter name"
            aria-label="Recipient's username"
            aria-describedby="basic-addon2"
          />
          <Button variant="outline-secondary" id="button-addon2">
            Search
          </Button>
        </InputGroup>
      </div> */}
      <div
        className="searchbar"
        style={{ "padding-bottom": 50, "padding-top": 50 }}
      >
        <input
          className="search_input"
          type="text"
          name="search"
          placeholder="Search by name..."
          onChange={(e) => setSearch(e.target.value)}
        />
        <input
          className="search_input"
          type="text"
          name="search"
          placeholder="Search by price..."
          onChange={(e) => setSearch(e.target.value)}
        />
        <button class="" type="" onClick={handleSearch}>
          Search
        </button>
      </div>
      <div className="row" style={{ gap: 20 }}>
        {foods.length &&
          foods.map((food, key) => (
            <div key={key} className="card" style={{ width: 300 }}>
              <img src={`http://localhost:8000/images/${food.img}`} alt="" />
              <div className="card-body">
                <h5 className="card-title">{food.name}</h5>
                <p className="card-text">
                  <b>Price: </b>
                  {food.price}000 vnd
                </p>
              </div>
            </div>
          ))}
      </div>
    </div>
  );
};
export default HomePage;
