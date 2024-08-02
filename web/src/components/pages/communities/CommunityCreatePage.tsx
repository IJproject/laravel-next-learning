"use client";

import React from "react";
import axios from "@/libs/axios";

export const CommunityCreatePage = () => {

  const handleSubmit = async () => {
    try {
      const response = await axios.post("/communities/", { name: "New Community", description: 'This is a new community.' });
      console.log(response.data);
    } catch (error) {
      console.error("Network error:", error);
    }
  };

  return (
    <>
      <h1>Communities</h1>
      <button onClick={handleSubmit}>コミュニティの作成</button>
    </>
  );
};
