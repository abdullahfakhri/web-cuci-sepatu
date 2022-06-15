import React from "react";
import { BrowserRouter } from "react-router-dom";
import { RouterDefault } from "./RouterDefault";

export const PageRouter = () => {
  return (
    <div>
      <BrowserRouter>
        <RouterDefault />
      </BrowserRouter>
    </div>
  );
};
