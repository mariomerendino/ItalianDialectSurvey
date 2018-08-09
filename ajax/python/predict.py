#TAKES IN A STRING OF ANSWERS TO THE SURVEY, AND PRINTS THE PREDICTED ANSWER 

import pandas as pd
import numpy as np
import sys
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfTransformer
from sklearn.pipeline import Pipeline
from sklearn.naive_bayes import MultinomialNB
from sklearn.linear_model import SGDClassifier
from sklearn.metrics import accuracy_score

def predict(userResponse):
    df = pd.read_csv('python/survey.csv')

    regions = ['Abruzzo', 'Basilicata', 'Calabria', 'Campania', 'Emiglia-Romagna', 'Friuli-Venezia Giulia', 'Lazio', 'Liguria', 'Lombardia', 'Marche', 'Molise', 'Piemonte', 'Puglia', 'Sardegna', 'Sicilia', 'Svizzera Italiana', 'Toscana', 'Trentino-Alto Adige', 'Umbria', "Valle d'Aosta", 'Veneto']

    questions = df.columns.values

    y = df[questions[1]]

    df['Responses'] = df[df.columns[2:]].apply(lambda x: ','.join(x.dropna().astype(str)),axis=1)

    X = df['Responses']

    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.15, random_state=23)

    clf = Pipeline([('vect', CountVectorizer()), 
                        ('tfidf', TfidfTransformer()), 
                        ('clf', SGDClassifier(loss='hinge', penalty='l2',
                                                alpha=1e-3, random_state=42)),
    ])

    clf.fit(X_train, y_train) 
    
    responseArray = []
    responseArray.append(userResponse);
    pred = clf.predict(responseArray)

    print(pred)

predict(sys.argv[1])
