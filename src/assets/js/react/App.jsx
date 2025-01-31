import React from 'react';
import ReactDOM from 'react-dom/client';
import TestComponent from "./components/testcomponent/TestComponent";

const App = () => {
    return (
        <div>
            <h1>Witaj w React na WordPressie!!</h1>
            <TestComponent title="Testowy komponent" />
        </div>
    );
};


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);
