document.addEventListener("DOMContentLoaded", () => {
    const chatForm = document.getElementById("chat-form");
    const chatInput = document.getElementById("chat-input");
    const chatMessages = document.getElementById("chat-messages");
  
    chatForm.addEventListener("submit", (event) => {
      event.preventDefault();
      const userMessage = chatInput.value.trim();
  
      if (userMessage === "") return;
  
      // Display user's message
      const userMessageElement = document.createElement("p");
      userMessageElement.textContent = "You: " + userMessage;
      chatMessages.appendChild(userMessageElement);
  
      // Scroll to the latest message
      chatMessages.scrollTop = chatMessages.scrollHeight;
  
      // Simulate a server response
      setTimeout(() => {
        const responseMessageElement = document.createElement("p");
        responseMessageElement.textContent =
          "Support: Thanks for your message! We will assist you shotly.";
        chatMessages.appendChild(responseMessageElement);
  
        // Scroll to the latest message
        chatMessages.scrollTop = chatMessages.scrollHeight;
      }, 1000);
  
      chatInput.value = ""; // Clear the input field
    });
  });
  