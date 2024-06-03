import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.linear_model import LogisticRegression
import gradio as gr

# Load your dataset (replace 'your_dataset.csv' with the actual file name)
df = pd.read_csv('your_dataset.csv')

# Select relevant features and target variable
features = ['Age', 'Education', 'Sex', 'Is_smoking', 'Cigs_per_day', 'Bp_meds', 
            'Prevalent_strokes', 'Prevalent_hyp', 'Diabetes', 'Tot_col', 'Heart_rate']
target = 'Cardiovascular_disease'  # Assuming you have a column named 'Cardiovascular_disease'

X = df[features]
y = df[target]

# Split the dataset into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Standardize the features
scaler = StandardScaler()
X_train_scaled = scaler.fit_transform(X_train)
X_test_scaled = scaler.transform(X_test)

# Train a logistic regression model
model = LogisticRegression()
model.fit(X_train_scaled, y_train)

# Function to make predictions
def predict_cvd_risk(Age, Education, Sex, Is_smoking, Cigs_per_day, Bp_meds, Prevalent_strokes, Prevalent_hyp, Diabetes, Tot_col, Heart_rate):
    user_data = scaler.transform([[Age, Education, Sex, Is_smoking, Cigs_per_day, Bp_meds,
                                   Prevalent_strokes, Prevalent_hyp, Diabetes, Tot_col, Heart_rate]])
    prediction = model.predict_proba(user_data)[0][1]  # Probability of having cardiovascular disease
    return prediction * 100

# Create the Gradio interface
inputs = [
    gr.inputs.Number(label="Age"),
    gr.inputs.Number(label="Education"),
    gr.inputs.Radio(label="Sex", choices=[0, 1], type="index"),
    gr.inputs.Checkbox(label="Is Smoking"),
    gr.inputs.Number(label="Cigs per Day"),
    gr.inputs.Checkbox(label="BP Meds"),
    gr.inputs.Checkbox(label="Prevalent Strokes"),
    gr.inputs.Checkbox(label="Prevalent Hyp"),
    gr.inputs.Checkbox(label="Diabetes"),
    gr.inputs.Number(label="Total Cholesterol"),
    gr.inputs.Number(label="Heart Rate")
]

output = gr.outputs.Textbox(label="Cardiovascular Disease Risk (%)")

gr.Interface(fn=predict_cvd_risk, inputs=inputs, outputs=output, title="Cardiovascular Disease Risk Prediction",
             description="Enter the following parameters to predict the risk of cardiovascular disease").launch()
